<?php
namespace Modules\SalesForce\Services;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Infrastructure\Helper\FormHelper;
use Infrastructure\Service\BaseApiService;
use Modules\Cotizador\Repositories\PlansRepository;
use Modules\SalesForce\Payloads\BiciFifthStepPayload;
use Modules\SalesForce\Payloads\BiciFirstStepPayload;
use Modules\SalesForce\Payloads\BiciFourthStepPayload;
use Modules\SalesForce\Payloads\BiciSecondStepPayload;
use Modules\SalesForce\Payloads\BiciThirdStepPayload;
use Modules\SalesForce\Payloads\SalesForceBasePayload;

class SalesForceService extends BaseApiService
{
    private bool $lastAttempt = false;

    public function __construct(
        private PlansRepository $plansRepository
    )
    {
        parent::__construct();
        $this->generateToken();
    }

    protected function setBaseUrl()
    {
        $this->baseUrl = $this->baseUrl = env('SALESFORCE_SERVICE_ENDPOINT');
    }

    public function sendFirstForm(BiciFirstStepPayload $payload): void
    {
        $plan = $this->plansRepository->getPlanByCode($payload->selectedPlan);
        $payload->webPrice = $plan['cuota'];
        $payload->assuredAmount = $plan['coberturas'][1]['nomina'][0]['sumaItem'];
        $payload->budgetNumber = session()->get('policyCode');
        $payload->Cif = session()->get('cif_id') ?: null;
        $payload->Ref = session()->get('ref_id') ?: null;

        logger()->info('Salesforce 1 paso: '.json_encode($payload->toArray()));
        $response = $this->send($payload);
        $response = $this->checkResponse($response, $payload);

        if (empty($response) || empty($response['salesforceID']))
        {
            throw new \Exception("An error has been found in the salesforce service.".json_encode($response));
        }

        session()->put('salesForceId', $response['salesforceID']);
        logger()->info('salesForceId setted: '.$response['salesforceID']);
    }

    public function sendSecondForm(BiciSecondStepPayload $payload): void
    {
        $payload->Cif = session()->get('cif_id') ?: null;
        $payload->Ref = session()->get('ref_id') ?: null;
        $payload->salesforceID = $payload->salesforceID ?: FormHelper::getSalesforceId();

        logger()->info('Salesforce 2 paso: '.json_encode($payload->toArray()));
        $response = $this->send($payload);
        $response = $this->checkResponse($response, $payload);

        if (empty($response['code']) || $response['code'] != 200)
        {
            throw new \Exception("An error has been found in the salesforce service.".json_encode($response));
        }
    }

    public function sendThirdForm(BiciThirdStepPayload $payload): array
    {
        $payload->salesforceID = $payload->salesforceID ?: FormHelper::getSalesforceId();

        logger()->info('Salesforce 3 paso: '.json_encode($payload->toArray()));
        $response = $this->send($payload);
        $response = $this->checkResponse($response, $payload);

        if (empty($response['code']) || $response['code'] != 200)
        {
            throw new \Exception("An error has been found in the salesforce service.".json_encode($response));
        }

        return $response;
    }

    public function sendFourthForm(BiciFourthStepPayload $payload): void
    {
        $payload->salesforceID = $payload->salesforceID ?: FormHelper::getSalesforceId();

        logger()->info('Salesforce 4 paso: '.json_encode($payload->toArray()));
        $response = $this->send($payload);
        $response = $this->checkResponse($response, $payload);

        if (empty($response['code']) || $response['code'] != 200)
        {
            throw new \Exception("An error has been found in the salesforce service.".json_encode($response));
        }
    }

    public function sendFifthForm(BiciFifthStepPayload $payload): void
    {
        $payload->salesforceID = $payload->salesforceID ?: FormHelper::getSalesforceId();
        $response = $this->send($payload);
        $response = $this->checkResponse($response, $payload);

        if (empty($response['code']) || $response['code'] != 200)
        {
            throw new \Exception("An error has been found in the salesforce service.".json_encode($response));
        }
    }

    public function send(SalesForceBasePayload $payload): ?array
    {
        try {
            return $this->request(
                'post',
                $this->baseUrl . '/services/apexrest/AccountUpsert',
                [
                    'params' => $payload->toArray(),
                    'type' => RequestOptions::JSON
                ],
                [
                    'content-type' => 'application/json'
                ],
                true
            );
        }catch (GuzzleException $e)
        {
            if (!empty($e->getResponse()))
            {
                logger()->error($e->getResponse()->getBody()->getContent());
            }

            return null;
        }
    }

    private function tryAgain($payload)
    {
        $this->lastAttempt = true;
        $this->generateToken();
        return $this->send($payload);
    }

    private function generateToken()
    {
        try
        {
            $payload = [
                'grant_type' => 'password',
                'username' => env('SALESFORCE_USERNAME'),
                'password' => env('SALESFORCE_PASSWORD'),
                'client_id' => env('SALESFORCE_CLIENT_ID'),
                'client_secret' => env('SALESFORCE_CLIENT_SECRET'),
            ];

            logger()->info('Generar token: '.json_encode($payload));
            $response = $this->request('post', env('SALESFORCE_CLIENT_AUTHENTICATION'), [
                'params' => $payload
            ]);
            logger()->info('Salesforce Token: '.$response['access_token']);

            $this->accessToken = $response['access_token'];
        }
        catch (\Exception $e)
        {
            if (env('APP_DEBUG'))
            {
                throw $e;
            }
            throw new \Exception('El servicio se encuentra fuera de servicio, intente nuevamente mas tarde.');
        }
    }

    private function checkResponse(array $response, SalesForceBasePayload $payload)
    {
        // Good way
        if (is_array($response) && !empty($response) && $response['code'] == 200)
        {
            return $response;
        }

        // If the budget number is duplicated, create a new one because this is the first step
        if (!empty($response['code']) && $response['code'] == 500)
        {
            return false;
        }

        if (empty($response))
        {
            return false;
        }

        throw new \Exception('Service is unavailable');
    }
}
