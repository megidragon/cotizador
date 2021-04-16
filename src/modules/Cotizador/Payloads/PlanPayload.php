<?php
namespace Modules\Cotizador\Payloads;

use Infrastructure\Payload\BasePayload;

class PlanPayload extends BasePayload
{
    public $codCia;
    public $codRamoProd;
    public $producto;
}
