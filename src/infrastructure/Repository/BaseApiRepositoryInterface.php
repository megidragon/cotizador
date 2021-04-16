<?php
namespace Infrastructure\Repository;

interface BaseApiRepositoryInterface {
    public function getRequest(string $uri, array $params, array $headers): ?array;
    public function postRequest(string $uri, array $params, array $headers): ?array;
    public function patchRequest(string $uri, array $params, array $headers): ?array;
    public function deleteRequest(string $uri, array $params, array $headers): ?array;
}
