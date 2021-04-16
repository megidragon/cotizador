<?php

namespace Api\Cotizador;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cotizador\BasicPersonalInformationRequest;
use Modules\Cotizador\Payloads\RequestNotContractMassConsumptionPayload;
use Modules\Cotizador\Services\CampaignService;
use Modules\Cotizador\ValueObjects\Campaign;

class CampaignController extends Controller
{
    public function __construct(public CampaignService $campaignService)
    {
    }

    public function insertCampaignRequestNotContractMassConsumption(BasicPersonalInformationRequest $request)
    {
        return $this->successApiResponse();
        //dd($request->toArray());
        $this->campaignService->insertCampaign(Campaign::SOLICITA_NO_CONTRATA_CONSUMO_MASICO, $request);
    }
}
