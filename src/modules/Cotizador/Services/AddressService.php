<?php
namespace Modules\Cotizador\Services;

use Infrastructure\Helper\FormHelper;
use Infrastructure\Service\BaseApiService;
use Modules\Cotizador\Payloads\AddressPayload;
use Modules\Cotizador\Payloads\NormalizeAddressPayload;
use Modules\SalesForce\Payloads\BiciThirdStepPayload;
use Modules\SalesForce\Services\SalesForceService;

class AddressService extends BaseApiService
{
    public function __construct(
        private SalesForceService $salesForceService
    )
    {
        parent::__construct();
    }

    protected function setBaseUrl()
    {
        $this->baseUrl = $this->baseUrl = env('IPOLARISDES_GENERALES_SERVICE_API_ENDPOINT');
    }

    public function normalizeAddress(NormalizeAddressPayload $payload): array|null
    {
        $payload->cifId = session()->get('cif_id');
        $payload->codigoPostal = FormHelper::parsePostalCode($payload->codigoPostal);

        logger()->info('normalizar domicilio: '.json_encode($payload->toArray()));
        return $this->postRequest('/cotizador/normalizarDomicilio', $payload->toArray(), [], false);
    }

    public function insertAddress(AddressPayload $payload): ?array
    {
        logger()->info('insert address: '.json_encode($payload->toArray()));
        return $this->postRequest('cotizador/insertarDomicilio', $payload->toArray());
    }

    public function checkAndSendAddress($request): bool|array
    {
        $addressResponse = $this->normalizeAddress(NormalizeAddressPayload::make($request));

        if (!empty($addressResponse['domicilio']['cpa']))
        {
            return $this->sendAddress($request, $addressResponse);
        }

        return $addressResponse;
    }

    public function sendAddress($request, $addressResponse): array
    {
        $insertAddressPayload = AddressPayload::make($request);
        $insertAddressPayload->cpa = $addressResponse['domicilio']['cpa'];
        $insertAddressPayload->cifId = session()->get('cif_id');

        $insertAddressResponse = $this->insertAddress($insertAddressPayload);
        if (!empty($insertAddressResponse['dudas']))
        {
            throw new \Exception('An error has ocurred in the address insert service: '.json_encode($insertAddressResponse));
        }

        // Salesforce call
        $salesforcePayload = BiciThirdStepPayload::make($request);
        $this->salesForceService->sendThirdForm($salesforcePayload);

        return $insertAddressResponse;
    }
}
