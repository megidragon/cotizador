<?php
namespace Api\Cotizador;

use App\Http\Controllers\Controller;
use Modules\Cotizador\Payloads\PlanPayload;
use Modules\Cotizador\Repositories\PlansRepository;
use Modules\Cotizador\ValueObjects\BicicletaPlan;
use App\Http\Resources\PlanResource;

class PlanController extends Controller
{
    public function __construct(
        private PlansRepository $plansRepository
    )
    {}

    /**
     * @return mixed
     */
    public function getPlans()
    {
        $payload = PlanPayload::make(BicicletaPlan::toArray());

        $data = $this->plansRepository->getPlans($payload);

        return $this->successApiResponse(PlanResource::collection($data));
    }

    /**
     * @param $code
     * @return mixed
     * @throws \Exception
     */
    public function getPlanByCode($code)
    {
        $data = $this->plansRepository->getPlanByCode($code);

        return $this->successApiResponse(PlanResource::make($data));
    }
}
