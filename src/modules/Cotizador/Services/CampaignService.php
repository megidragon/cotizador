<?php
namespace Modules\Cotizador\Services;

use Illuminate\Http\Request;
use Infrastructure\Helper\FormHelper;
use Infrastructure\Payload\BasePayload;
use Infrastructure\Service\BaseApiService;
use Modules\Cotizador\Payloads\RequestNotContractMassConsumptionPayload;
use Modules\Cotizador\ValueObjects\Campaign;

class CampaignService extends BaseApiService
{
    public function insertCampaign(RequestNotContractMassConsumptionPayload $payload)
    {
        $payload->presupuesto = FormHelper::getBudgetCode();
        if (config('salesforce.create_campaign'))
        {
            $payload->inserta_camp = 'S';
        }

        $response = $this->postRequest('nocliente/insertarSolNoCConsumoMasivoCampa', $payload->toArray(), [], false);
        session()->put('cif_id', $response['cifId']);
        session()->put('ref_id', $response['referidoId']);

        return $response;
    }
}
