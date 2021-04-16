<?php

namespace Api\Cotizador;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cotizador\StepOneRequest;
use Illuminate\Http\Request;
use Modules\Cotizador\Payloads\CreateUserPayload;
use Modules\Cotizador\Services\UserService;

class UserController extends Controller
{
    use \FormControl;
    public function __construct(public UserService $service)
    {
    }

    public function createUser(StepOneRequest $request)
    {
        $this->throwIfIsNotAllowed(1);
        $response = $this->service->createUser(CreateUserPayload::make($request));
        return $this->successApiResponse($response);
    }
}
