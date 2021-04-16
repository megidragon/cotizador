<?php

namespace Api\Cotizador;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cotizador\SalesForceRequest;
use Illuminate\Http\Request;
use Infrastructure\Helper\FormHelper;
use Modules\Cotizador\Payloads\RequestNotContractMassConsumptionPayload;
use Modules\Cotizador\Services\CampaignService;
use Modules\Cotizador\Traits\FormControl;
use Modules\SalesForce\Services\SalesForceService;
use Modules\SalesForce\Payloads\BiciFifthStepPayload;
use Modules\SalesForce\Payloads\BiciFirstStepPayload;
use Modules\SalesForce\Payloads\BiciFourthStepPayload;
use Modules\SalesForce\Payloads\BiciSecondStepPayload;
use Modules\SalesForce\Payloads\BiciThirdStepPayload;

class SalesForceController extends Controller
{
    use FormControl;

    public function __construct(
        public SalesForceService $salesForceService,
        public CampaignService $campaignService
    )
    {
    }

    public function sendFirstStep(SalesForceRequest $request)
    {
        $this->campaignService->insertCampaign(RequestNotContractMassConsumptionPayload::make($request));

        $data = BiciFirstStepPayload::make($request);
        $data->telefonoweb = $request->phone_area_code.$request->phone;

        $this->salesForceService->sendFirstForm($data);

        $this->setStep(2);

        return $this->successApiResponse();
    }

    public function sendSecondStep(Request $request)
    {
        $data = $this->salesForceService->send(BiciSecondStepPayload::make($request));
        return $this->successApiResponse($data);
    }

    public function sendThirdStep(Request $request)
    {
        $data = $this->salesForceService->send(BiciThirdStepPayload::make($request));
        return $this->successApiResponse($data);
    }

    public function sendFourthStep(Request $request)
    {
        $data = $this->salesForceService->send(BiciFourthStepPayload::make($request));
        return $this->successApiResponse($data);
    }

    public function sendFifthStep(Request $request)
    {
        $data = $this->salesForceService->send(BiciFifthStepPayload::make($request));
        return $this->successApiResponse($data);
    }
}
