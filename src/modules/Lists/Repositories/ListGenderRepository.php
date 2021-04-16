<?php
namespace Modules\Lists\Repositories;

use Infrastructure\Repository\BaseApiRepository;

class ListGenderRepository extends BaseApiRepository
{

    public function get() {
        return $this->getRequest('listas/sexos');
    }
}
