<?php
namespace Modules\Cotizador\Services;

use Infrastructure\Service\BaseApiService;
use Modules\Cotizador\Payloads\PolicyPayload;
use Modules\Cotizador\Payloads\RequestPolicyPayload;

class PolicyService extends BaseApiService
{
    protected function setBaseUrl()
    {
        $this->baseUrl = $this->baseUrl = env('IPOLARISDES_GENERALES_SERVICE_API_ENDPOINT');
    }

    public function requestPolicy(RequestPolicyPayload $payload)
    {
        return $this->postRequest('cotizador/generarSolicitud', $payload->toArray());
    }

    public function makePolicy(PolicyPayload $payload)
    {
        return $this->postRequest('cotizador/emitirPoliza', $payload->toArray());
    }
}
