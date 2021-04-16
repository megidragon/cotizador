<?php

namespace Api\Cotizador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Cotizador\Payloads\AddressPayload;
use Modules\Cotizador\Payloads\NormalizeAddressPayload;
use Modules\Cotizador\Services\AddressService;

class AddressController extends Controller
{
    public function __construct(public AddressService $service)
    {
    }

    public function normalizeAddress(Request $request)
    {
        $response = $this->service->normalizeAddress(NormalizeAddressPayload::make($request));
        return $this->successApiResponse($response);
    }

    public function insertAddress(Request $request)
    {
        $response = $this->service->insertAddress(AddressPayload::make($request));
        return $this->successApiResponse($response);
    }
}
