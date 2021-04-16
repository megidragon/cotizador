<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Cotizador\Payloads\PlanPayload;
use Modules\Cotizador\Repositories\PlansRepository;

class PagesController extends Controller
{
    public function __construct(
        private PlansRepository $plansRepository
    )
    {
    }

    public function index()
    {
        return view('index');
    }

    public function selectPlan()
    {
        $payload = PlanPayload::make([
            'codCia' => 1,
            'codRamoProd' => 417,
            'producto' => 'BICICLETA',
        ]);

        try {

            $data = $this->plansRepository->getPlans($payload);
        } catch (\Exception $e)
        {
            throw $e;
        }


        return view('pages/select_plan', ['plans' => $data]);
    }
}
