<?php
namespace Infrastructure\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

abstract class BaseApiService implements BaseApiServiceInterface
{

    protected int $TIMEOUT = 30;
    protected int $CONNECT_TIMEOUT = 10;
    protected bool $HTTP_ERRORS = true;

    protected Client $client;
    protected string $baseUrl;
    protected array $headers;
    protected string|null $accessToken;

    public function __construct()
    {
        $this->setBaseUrl();
        $this->accessToken = null;
        $this->client = app(Client::class);
        $this->headers = [
            'cache-control' => 'no-cache',
            'Accept' => '*/*',
        ];
    }

    /**
     * @param string|null $uri
     * @param array $params
     * @param array $headers
     * @param bool $use_authorized
     * @return array|null
     * @throws \Exception
     */
    public function getRequest(string $uri=null, array $params=[], array $headers=[], bool $use_authorized=false): array|string|null
    {
        $requestUrl = $this->parseUrl($uri);
        if ($use_authorized && empty($this->accessToken))
        {
            throw new \Exception('access_token must be defined in service');
        }

        $body = ['params' => $params, 'type' => 'query'];

        return $this->request('get', $requestUrl, $body, $headers, $use_authorized);
    }

    /**
     * @param string|null $uri
     * @param array $params
     * @param array $headers
     * @param bool $use_authorized
     * @return ?array
     * @throws \Exception
     */
    public function postRequest(string $uri=null, array $params=[], array $headers=[], bool $use_authorized=false): array|string|null
    {
        $requestUrl = $this->parseUrl($uri);
        if ($use_authorized && empty($this->accessToken))
        {
            throw new \Exception('access_token must be defined in service');
        }

        $body = ['params' => $params, 'type' => 'form_params'];

        return $this->request('post', $requestUrl, $body, $headers, $use_authorized);
    }

    /**
     * @param string|null $uri
     * @param array $params
     * @param array $headers
     * @return ?array
     */
    public function patchRequest(string $uri=null, array $params=[], array $headers=[], bool $use_authorized=false): array|string|null
    {
        $requestUrl = $this->parseUrl($uri);
        if ($use_authorized && empty($this->accessToken))
        {
            throw new \Exception('access_token must be defined in service');
        }
        $body = ['params' => $params, 'type' => 'form_params'];

        return $this->request('patch', $requestUrl, $body, $headers, $use_authorized);
    }

    /**
     * @param string|null $uri
     * @param array $params
     * @param array $headers
     * @return ?array
     */
    public function deleteRequest(string $uri=null, array $params=[], array $headers=[], bool $use_authorized=false): array|string|null
    {
        $requestUrl = $this->parseUrl($uri);
        if ($use_authorized && empty($this->accessToken))
        {
            throw new \Exception('access_token must be defined in service');
        }

        $body = ['params' => $params, 'type' => 'form_params'];

        return $this->request('delete', $requestUrl, $body, $headers, $use_authorized);
    }

    private function parseResponse($request)
    {
        $response = $request ? $request->getBody()->getContents() : null;
        $status = $request ? $request->getStatusCode() : 500;

        if ($response && $status === 200 && $response !== 'null') {
            if ($this->isJson($response))
            {
                return json_decode($response, true);
            }

            return $response;
        }

        return $response;
    }

    public function request(
        string $method,
        string $url=null,
        array $body=[],
        array $headers=[],
        bool $use_authorized=false
    )
    {
        if (!in_array($method, ['post', 'get', 'patch', 'delete']))
        {
            throw new \Exception('Request method not allowed');
        }

        $paramType = !empty($body['type']) ? $body['type'] : 'form_params';
        $params = !empty($body['params']) ? $body['params'] : [];

        try {
            $request = $this->client->$method($url, $this->requestConfiguration($paramType, $params, $headers, $use_authorized));
        }catch (GuzzleException $e)
        {
            $message = method_exists($e, 'getResponse') && !empty($e->getResponse()) ? $e->getResponse()->getBody()->getContents() : null;
            $message = $message ?: $e->getMessage();
            throw new \Exception($message, $e->getCode());
        }

        return $this->parseResponse($request);
    }

    /**
     * @param string $paramsType
     * @param array $params
     * @param array $headers
     * @param bool $use_authorized
     * @return array
     * @throws \Exception
     */
    #[ArrayShape(['headers' => "array|string[]", 'timeout' => "int", 'connect_timeout' => "int", 'http_errors' => "bool", 'query' => ""])]
    private function requestConfiguration(string $paramsType, array $params, array $headers, bool $use_authorized=false): array
    {
        $headers = $headers ? array_merge($this->headers, $headers) : $this->headers;
        if ($use_authorized)
        {
            $headers = $this->setAuthorized($headers);
        }

        return [
            'headers'         => $headers,
            'timeout'         => $this->TIMEOUT,
            'connect_timeout' => $this->CONNECT_TIMEOUT,
            'http_errors'     => $this->HTTP_ERRORS,
            $paramsType       => $params
        ];
    }

    /**
     * @param $uri
     * @return string
     */
    #[Pure]
    protected function parseUrl($uri): string
    {
        $requestUrl = substr($this->baseUrl, 0, 1) === '/' ? $this->baseUrl : $this->baseUrl . '/';
        $uri = substr($uri, 0, 1) === '/' ? substr($uri, 1) : $uri;
        return $requestUrl.$uri;
    }

    #[Pure] private function setAuthorized(array $headers, string $type='bearer'): array
    {
        $headers['Authorization'] = match (strtolower($type))
        {
            'bearer' => 'Bearer '.$this->accessToken,
        };

        return $headers;

    }

    protected function setBaseUrl()
    {
        $this->baseUrl = config('services.ipolarisdes.baseApiUrl');
    }

    private function isJson($string): bool
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
