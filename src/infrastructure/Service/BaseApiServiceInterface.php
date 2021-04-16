<?php
namespace Infrastructure\Service;

interface BaseApiServiceInterface
{
    public function getRequest(string $uri, array $params, array $headers);
    public function postRequest(string $uri, array $params, array $headers);
    public function patchRequest(string $uri, array $params, array $headers);
    public function deleteRequest(string $uri, array $params, array $headers);
}
