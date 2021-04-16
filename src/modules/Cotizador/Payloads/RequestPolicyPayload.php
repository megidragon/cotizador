<?php
namespace Modules\Cotizador\Payloads;

use Infrastructure\Payload\BasePayload;

class RequestPolicyPayload extends BasePayload
{
    public $cbu;
    public $cifId;
    public $fechavig;
    public $formaCobro;
    public $gestorCobro;
    public $idDomCorrespondencia;
    public $idDomRiesgo;
    public $nroDocumento;
    public $numSecuPol;
    public $numTarjeta;
    public $tipoDocumento;
}
