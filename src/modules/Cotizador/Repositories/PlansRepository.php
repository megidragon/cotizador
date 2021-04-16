<?php
namespace Modules\Cotizador\Repositories;

use App\Exceptions\PlanNotFoundException;
use Infrastructure\Repository\BaseApiRepository;
use Modules\Cotizador\Payloads\PlanPayload;
use Modules\Cotizador\ValueObjects\BicicletaPlan;

class PlansRepository extends BaseApiRepository
{
    protected function setBaseUrl()
    {
        $this->baseUrl = $this->baseUrl = env('IPOLARISDES_GENERALES_SERVICE_API_ENDPOINT');
    }

    public function getPlans(PlanPayload $payload): ?array
    {
        $plans = $this->postRequest('cotizador/cotizarMasivosPorProducto', $payload->toArray());
        session()->put('policyCode', $plans['numSecuPol']);
        logger()->info('numero de presupuesto generado: '.$plans['numSecuPol']);

        return $plans['planes'];
    }

    public function getPlanByCode(int $code, $forcePolicyCode=false): ?array
    {
        $payload = PlanPayload::make(BicicletaPlan::toArray());

        $plans = $this->postRequest('cotizador/cotizarMasivosPorProducto', $payload->toArray());

        if (empty($plans['numSecuPol']))
        {
            throw new \Exception('Service unavailable');
        }

        if ($forcePolicyCode || empty(session()->get('policyCode')))
        {
            session()->put('policyCode', $plans['numSecuPol']);
        }

        $data = [];

        foreach ($plans['planes'] as $plan)
        {
            if ($plan['codRamo'] == $code)
            {
                $data = $plan;
                break;
            }
        }
        if (empty($data))
        {
            throw new \Exception('El plan solicitado no se pudo encontrar', 400);
        }

        return $data;
    }
}

