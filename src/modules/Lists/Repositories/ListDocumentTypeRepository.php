<?php
namespace Modules\Lists\Repositories;

use Infrastructure\Repository\BaseApiRepository;

class ListDocumentTypeRepository extends BaseApiRepository
{

    public function get() {
        return $this->getRequest('listas/tiposDocumentos');
    }
}
