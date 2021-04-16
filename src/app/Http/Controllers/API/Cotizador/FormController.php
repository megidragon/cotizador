<?php

namespace Api\Cotizador;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cotizador\BasicPersonalInformationRequest;
use Illuminate\Http\Request;
use Modules\Cotizador\Payloads\RequestNotContractMassConsumptionPayload;
use Modules\Cotizador\Services\CampaignService;
use Modules\Cotizador\Traits\FormControl;
use Modules\Cotizador\ValueObjects\Campaign;

class FormController extends Controller
{
    use FormControl;

    public function canI(int $step)
    {
        return $this->successApiResponse([
            'success' => $this->isAllowed($step)
        ]);
    }

    public function getCurrentStep()
    {
        return $this->successApiResponse([
            'step' => $this->getStep()
        ]);
    }

    public function getFormStoredData()
    {
        return $this->successApiResponse($this->getForm());
    }
}
