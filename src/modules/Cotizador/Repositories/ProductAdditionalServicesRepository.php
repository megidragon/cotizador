<?php
namespace Modules\Cotizador\Repositories;

use Infrastructure\Repository\BaseApiRepository;

class ProductAdditionalServicesRepository extends BaseApiRepository
{
    protected function setBaseUrl()
    {
        $this->baseUrl = $this->baseUrl = env('IPOLARISDES_GENERALES_SERVICE_API_ENDPOINT');
    }

    public function get()
    {
        return $this->getRequest('cotizador/getServiciosAdicionalesProducto');
    }
}
