<?php
namespace Modules\Lists\Repositories;

use Infrastructure\Repository\BaseApiRepository;

class ListAddressRepository extends BaseApiRepository
{

    public function get() {
        return $this->getRequest('listas/listaDomicilios', [
            "cantRegistros" => 86219454,
            "cifId" => 86219454
        ]);
    }
}
