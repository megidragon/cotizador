<?php
namespace Modules\Policy\Payloads;

use Infrastructure\Payload\BasePayload;

class PolicyPayload extends BasePayload
{
    public $bin;
    public $digitos;
    public $fechaExpiracion;
    public $listasPagos;
    public $medioDePago;
    public $nombreIdentificacion;
    public $numeroIdentificacion;
    public $tipoIdentificacion;
    public $token;
    public $totalAPagar;
}
