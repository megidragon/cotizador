<?php
namespace Modules\Lists\Repositories;

use Infrastructure\Helper\FormHelper;
use Infrastructure\Repository\BaseApiRepository;

class ListProvinceRepository extends BaseApiRepository
{
    public function get($pc)
    {
        $pc = FormHelper::parsePostalCode($pc);
        return $this->getRequest("listas/provinciaPorCodigoPostal?codigoPostal=$pc");
    }
}
