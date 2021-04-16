<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Cotizador\Payloads\PlanPayload;
use Modules\Cotizador\Repositories\PlansRepository;
use Modules\SalesForce\Payloads\BiciThirdStepPayload;
use Modules\SalesForce\Services\SalesForceService;

class TestController extends Controller
{
    public function __construct(
        private SalesForceService $salesForceService
    )
    {
        if (!config('app.debug'))
        {
            abort(401);
        }
    }

    public function test()
    {
        $data = new BiciThirdStepPayload;
        $data->salesforceID = '006q000000LO1zDAAT';
        $data->contactAddress = 'SAN MARTIN';
        $data->contactAddressNumber = 500;
        $data->clientPostalCode = 8300;
        $data->nationality = 'ARGE';
        $data->contractState = 1;
        $data->clientLocation = 'CAPITAL FEDERAL';
        $resp = $this->salesForceService->sendThirdForm($data);
        dd($resp);
    }

    public function getCsrfToken()
    {
        return response()->json(['csrf' => csrf_token()]);
    }
}
