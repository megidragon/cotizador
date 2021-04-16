<?php
namespace Modules\Lists\Repositories;

use Infrastructure\Helper\FormHelper;
use Infrastructure\Repository\BaseApiRepository;

class ListLocalitiesRepository extends BaseApiRepository
{
    public function get($pc)
    {
        $pc = FormHelper::parsePostalCode($pc);
        return $this->getRequest("listas/localidadesPorCodigoPostal?codigoPostal=$pc");
    }
}
