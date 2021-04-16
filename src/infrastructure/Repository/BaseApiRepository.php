<?php
namespace Infrastructure\Repository;

use GuzzleHttp\Client;

abstract class BaseApiRepository implements BaseApiRepositoryInterface
{

    protected $TIMEOUT = 30;
    protected $CONNECT_TIMEOUT = 3;
    protected $HTTP_ERRORS = true;

    /* @var Client client */
    protected $client;
    protected $baseUrl;
    protected $headers;
    protected $accessToken;

    public function __construct()
    {
        $this->setBaseUrl();
        $this->accessToken = null; //TODO: mejorar implementación
        $this->client = new Client();
        $this->headers = [
            'cache-control' => 'no-cache',
            'content-type' => 'application/json',
        ];
    }

    public function getRequest(string $uri=null,  array $params=[], array $headers=[]): ?array
    {
        $requestUrl = $this->parseUrl($uri);

        $request = $this->client->get($requestUrl, $this->requestConfiguration($params, $headers));

        $response = $request ? $request->getBody()->getContents() : null;
        $status = $request ? $request->getStatusCode() : 500;

        if ($response && $status === 200 && $response !== 'null') {
            return json_decode($response, true);
        }

        return null;
    }

    public function postRequest(string $uri=null, array $params=[], array $headers=[]): ?array
    {
        $requestUrl = $this->parseUrl($uri);

        $request = $this->client->post($requestUrl, $this->requestConfiguration($params, $headers));

        $response = $request ? $request->getBody()->getContents() : null;
        $status = $request ? $request->getStatusCode() : 500;

        if ($response && $status === 200 && $response !== 'null') {
            return json_decode($response, true);
        }

        return null;
    }

    public function patchRequest(string $uri=null, array $params=[], array $headers=[]): ?array
    {
        $requestUrl = $this->parseUrl($uri);

        $request = $this->client->patch($requestUrl, $this->requestConfiguration($params, $headers));

        $response = $request ? $request->getBody()->getContents() : null;
        $status = $request ? $request->getStatusCode() : 500;

        if ($response && $status === 200 && $response !== 'null') {
            return json_decode($response, true);
        }

        return null;
    }

    public function deleteRequest(string $uri=null, array $params=[], array $headers=[]): ?array
    {
        $requestUrl = $this->parseUrl($uri);

        $request = $this->client->delete($requestUrl, $this->requestConfiguration($params, $headers));

        $response = $request ? $request->getBody()->getContents() : null;
        $status = $request ? $request->getStatusCode() : 500;

        if ($response && $status === 200 && $response !== 'null') {
            return json_decode($response, true);
        }

        return null;
    }

    private function requestConfiguration($params, $headers) {
        $headers = $headers ? array_merge($this->headers, $headers) : $this->headers;
        return [
            'headers'         => $headers,
            'timeout'         => $this->TIMEOUT,
            'connect_timeout' => $this->CONNECT_TIMEOUT,
            'http_errors'     => $this->HTTP_ERRORS,
            'json' => $params
        ];
    }

    private function parseUrl($uri)
    {
        $requestUrl = substr($this->baseUrl, -1) === '/' ? $this->baseUrl : $this->baseUrl . '/';
        return $requestUrl.$uri;
    }

    protected function setBaseUrl()
    {
        $this->baseUrl = config('services.ipolarisdes.baseApiUrl');
    }
}
