<?php

namespace Api\Cotizador;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cotizador\NormalizeAddressRequest;
use App\Http\Requests\Cotizador\StepOneRequest;
use App\Http\Requests\Cotizador\StepThreeRequest;
use App\Http\Requests\Cotizador\StepTwoRequest;
use App\Http\Resources\DoubtResource;
use App\Http\Resources\LocationsResource;
use Infrastructure\Helper\FormHelper;
use Infrastructure\Model\FormData;
use Modules\Cotizador\Payloads\CreateUserPayload;
use Modules\Cotizador\Services\AddressService;
use Modules\Cotizador\Services\CotizarService;
use Modules\Cotizador\Services\UserService;
use Modules\Cotizador\Traits\FormControl;
use Modules\SalesForce\Payloads\BiciFourthStepPayload;
use Modules\SalesForce\Payloads\BiciSecondStepPayload;
use Modules\SalesForce\Payloads\BiciThirdStepPayload;
use Modules\SalesForce\Services\SalesForceService;

class FormStepController extends Controller
{
    use FormControl;

    public function __construct(
        public UserService $userService,
        public AddressService $addressService,
        public CotizarService $cotizarService,
        public SalesForceService $salesForceService
    ){}

    public function stepOne(StepOneRequest $request)
    {
        $user = $this->createUser($request);

        // Salesforce call
        $salesforcePayload = BiciSecondStepPayload::make($request);
        $this->salesForceService->sendSecondForm($salesforcePayload);
        $this->setStep(3);

        $data = $request->only([
            'first_name',
            'last_name',
            'email',
            'birth_day',
            'birth_month',
            'birth_year',
            'document_number',
            'document_type',
            'phone_area_code',
            'phone',
            'gender',
            'address_street',
            'address_number',
            'address_floor',
            'address_department',
            'postal_code',
            'locality',
            'province',
            'country',
            'plan_id',
        ]);

        $this->setForm(array_merge($data, ['cif_id' => $user['cifId']]));

        $response = $this->addressService->checkAndSendAddress($request);

        if (!empty($response['domicilio']['cpa']))
        {
            $this->setStep(4);
            $this->setForm(['address_id' => $response['domicilio']['id']]);
            // Everything ok
            return $this->successApiResponse();
        }

        // Everything not that ok
        return $this->successApiResponse([
            'street_correction_modal' => !empty($response['dudas']),
            'cp_correction_modal' => !empty($response['localidades']),
            'locations' => LocationsResource::collection($response['localidades']),
            'doubt' => DoubtResource::collection($response['dudas']),
        ]);
    }

    public function stepTwo(StepTwoRequest $request)
    {
        $data = [
            'payment' => [
                'paymentType' => $request->payment_method
            ]
        ];
        $salesforcePayload = BiciFourthStepPayload::make($data);
        $this->salesForceService->sendFourthForm($salesforcePayload);

        $this->setStep(5);

        $this->setForm($request->only([
            'payment_method',
            'cbu',
            'card_number',
            'card_expiration_month',
            'card_expiration_year',
            'card_owner_name',
        ]));

        return $this->successApiResponse();
    }

    public function stepThree(StepThreeRequest $request)
    {
        $this->cotizarService->submitPolicy();
        return $this->successApiResponse();
    }

    public function normalizeAddress(NormalizeAddressRequest $request)
    {
        $response = $this->addressService->checkAndSendAddress($request);

        if (!empty($response['domicilio']['cpa']))
        {
            return $this->successApiResponse([
                'street_correction_modal' => !empty($response['dudas']),
                'cp_correction_modal' => !empty($response['localidades']),
                'locations' => LocationsResource::collection($response['localidades']),
                'doubt' => DoubtResource::collection($response['dudas']),
            ]);
        }

        return $this->successApiResponse([
            'success' => true
        ]);
    }

    private function createUser($request)
    {
        $userPayload = CreateUserPayload::make($request);
        $userPayload->fechaNacimiento = "{$request->birth_year}-{$request->birth_month}-{$request->birth_day}T13:01:27.908Z";

        return $this->userService->createUser($userPayload);
    }
}
