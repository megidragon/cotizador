<?php
namespace Modules\Cotizador\Payloads;

use Infrastructure\Payload\BasePayload;

class AddressPayload extends BasePayload
{
    public ?string $barrio;
    public string $calle;
    public int $cifId;
    public string $cpa;
    public int $codigoPostal;
    public ?string $depto;
    public string $localidad;
    public int $numero;
    public ?string $piso;
    public string $provincia;

    public static function translation(): array
    {
        return [
            'calle' => 'address_street',
            'codigoPostal' => 'postal_code',
            'localidad' => 'locality',
            'numero' => 'address_number',
            'provincia' => 'province',
            'piso' => 'address_floor',
            'depto' => 'address_department',
            'cpa' => 'cpa',
        ];
    }
}
