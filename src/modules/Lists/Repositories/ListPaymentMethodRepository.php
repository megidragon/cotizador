<?php
namespace Modules\Lists\Repositories;

use Infrastructure\Repository\BaseApiRepository;

class ListPaymentMethodRepository extends BaseApiRepository
{

    public function get() {
        return $this->getRequest('listas/getMediosDePago', [
            "aplicacion" => "laboris laborum"
        ]);
    }
}

