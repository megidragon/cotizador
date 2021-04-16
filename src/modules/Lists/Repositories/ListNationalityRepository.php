<?php
namespace Modules\Lists\Repositories;

use Infrastructure\Repository\BaseApiRepository;

class ListNationalityRepository extends BaseApiRepository
{

    public function get() {
        return $this->getRequest('listas/nacionalidades');
    }
}
