<?php

namespace Api\Data;

use App\Http\Controllers\Controller;
use App\Http\Resources\Lists\ProvincesResource;
use Illuminate\Http\Request;
use Modules\Lists\Repositories\ListDocumentTypeRepository;
use Modules\Lists\Repositories\ListGenderRepository;
use Modules\Lists\Repositories\ListLocalitiesRepository;
use Modules\Lists\Repositories\ListNationalityRepository;
use Modules\Lists\Repositories\ListPaymentMethodRepository;
use Modules\Lists\Repositories\ListProvinceRepository;

class GeneralDataProviderController extends Controller
{
    public function __construct(
        private ListDocumentTypeRepository $documentTypeRepository,
        private ListPaymentMethodRepository $paymentMethodRepository,
        private ListGenderRepository $genderRepository,
        private ListLocalitiesRepository $localitiesRepository,
        private ListProvinceRepository $provinceRepository,
        private ListNationalityRepository $nationalityRepository
    )
    {
    }

    public function listDocumentType()
    {
        $data = $this->documentTypeRepository->get();
        return $this->successApiResponse($data);
    }

    public function listGender()
    {
        $data = $this->genderRepository->get();
        return $this->successApiResponse($data);
    }

    public function listProvinces($pc)
    {
        $data = [$this->provinceRepository->get($pc)];
        return $this->successApiResponse(ProvincesResource::collection($data));
    }

    public function listLocalities($pc)
    {
        $data = $this->localitiesRepository->get($pc);
        return $this->successApiResponse($data);
    }

    public function listCountries()
    {
        $data = $this->nationalityRepository->get();
        return $this->successApiResponse($data);
    }
}
