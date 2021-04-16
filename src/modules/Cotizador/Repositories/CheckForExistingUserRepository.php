<?php
namespace Modules\Cotizador\Repositories;

use App\Exceptions\PlanNotFoundException;
use Infrastructure\Repository\BaseApiRepository;
use Modules\Cotizador\Payloads\PlanPayload;
use Modules\Cotizador\ValueObjects\BicicletaPlan;

class CheckForExistingUserRepository extends BaseApiRepository
{
    public function check(PlanPayload $payload): ?array
    {
        //TODO: Pasar N, producto: BICI
        $plans = $this->postRequest('lorem', $payload->toArray());
        session()->put('cif_id', $plans['lorem']);
        session()->put('ref_id', $plans['lorem']);
        return $plans['planes'];
    }
}

