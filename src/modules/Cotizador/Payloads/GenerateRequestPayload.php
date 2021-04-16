<?php
namespace Modules\Cotizador\Payloads;

use Infrastructure\Payload\BasePayload;

class GenerateRequestPayload extends BasePayload
{
    public string $codPlan;
    public int $cifId;
    public string $formaCobro;
    public int $gestorCobro = 0;
    public int $idDomCorrespondencia;
    public int $idDomRiesgo;
    public int $nroDocumento;
    public string $tipoDocumento;
    public int $numSecuPol;
    public ?string $cbu;
    public ?string $numTarjeta;

    public static function translation(): array
    {
        return [
            'cbu' => 'cbu',
            'formaCobro' => 'payment_method',
            'idDomCorrespondencia' => 'address_id',
            'idDomRiesgo' => 'address_id',
            'nroDocumento' => 'document_number',
            'tipoDocumento' => 'document_type',
            'numTarjeta' => 'card_number',
            'numSecuPol' => 'budget_number',
            'cifId' => 'cif_id',
            'codPlan' => 'plan_id',
        ];
    }
}
