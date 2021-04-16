<?php
namespace Modules\Policy\Services;

use Infrastructure\Service\BaseApiService;
use Modules\Policy\Payloads\PolicyPayload;

class PolicyService extends BaseApiService
{
    public function makePayment(PolicyPayload $payload)
    {
        return $this->postRequest('polizas/realizarPago', $payload->toArray());
    }
}
