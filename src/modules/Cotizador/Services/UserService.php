<?php
namespace Modules\Cotizador\Services;

use Infrastructure\Service\BaseApiService;
use Modules\Cotizador\Payloads\CreateUserPayload;

class UserService extends BaseApiService
{
    public function createUser(CreateUserPayload $payload)
    {
        logger()->info('Escribe cif: '.json_encode($payload->toArray()));
        $response = $this->request('post', $this->baseUrl."/nocliente/escribeCif", [
            'params' => $payload->toArray(),
            'type' => 'json'
        ], [], false);

        // TODO: Verify response format
        session()->put('cif_id', $response['cifId']);

        return $response;
    }
}
