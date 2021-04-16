<?php
namespace Modules\Cotizador\Services;

use Infrastructure\Helper\FormHelper;
use Infrastructure\Service\BaseApiService;
use Modules\Cotizador\Payloads\GenerateRequestPayload;
use Modules\Cotizador\Payloads\PlanPayload;
use Modules\Cotizador\Payloads\PolicyPayload;
use Modules\Cotizador\Traits\FormControl;
use Modules\SalesForce\Payloads\BiciFifthStepPayload;
use Modules\SalesForce\Services\SalesForceService;

class CotizarService extends BaseApiService
{
    use FormControl;

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

    private function generateRequest(GenerateRequestPayload $payload)
    {
        $response = $this->request(
            'post',
            $this->parseUrl('cotizador/generarSolicitud?codPlan='.$payload->codPlan),
            [
                'params' => $payload->toArray(),
                'type' => 'json'
            ]
        );

        if (!empty($response['numeroSolicitud']))
        {
            return $response;
        }

        if (env('APP_DEBUG'))
        {
            throw new \Exception('Generar solicitud ha rechazado la peticion: '.json_encode($response), 500);
        }

        throw new \Exception('El servicio se encuentra inactivo. Intente nuevamente en unos minutos.');
    }

    private function emitPolicy(PolicyPayload $payload)
    {
        return $this->request(
            'post',
            $this->parseUrl('cotizador/emitirPoliza'),
            [
                'params' => $payload->toArray(),
                'type' => 'query'
            ],
            [
                'Accept' => 'application/json'
            ]
        );
    }

    public function submitPolicy()
    {
        // Policy request
        $storedData = $this->getForm()->toArray();
        $payload = GenerateRequestPayload::make($storedData);
        logger()->info('generar-solicitud: '.json_encode($payload->toArray()));
        $requestedResponse = $this->generateRequest($payload);

        // Policy send
        $policyPayload = new PolicyPayload;
        $policyPayload->numeroSolicitud = $requestedResponse['numeroSolicitud'];

        if ($storedData['payment_method'] === 'TA')
        {
            $policyPayload->numeroTarjeta = $storedData['card_number'];
            $policyPayload->vencimientoTarjeta = "{$storedData['card_expiration_month']}/{$storedData['card_expiration_year']}";
        }elseif ($storedData['payment_method'] === 'BA')
        {
            $policyPayload->numeroTarjeta = $storedData['cbu'];
            $policyPayload->vencimientoTarjeta = date('m/y');
        } else
        {
            throw new \Exception('Invalid data stores');
        }
        logger()->info('emitir poliza: '.json_encode($policyPayload->toArray()));
        $policyResponse = $this->emitPolicy($policyPayload);

        if (empty($policyResponse['numeroPoliza']))
        {
            $err = 'Fallo la generación de la poliza';
            if (env('APP_DEBUG'))
            {
                $err .= json_encode($policyResponse);
            }

            throw new \Exception($err);
        }

        $salesforcePayload = BiciFifthStepPayload::make($policyResponse);
        $this->salesForceService->sendFifthForm($salesforcePayload);

        $this->setStep(6);
    }
}
