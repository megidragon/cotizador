<?php
namespace Modules\Cotizador\Payloads;

use Infrastructure\Payload\BasePayload;

class NormalizeAddressPayload extends BasePayload
{
    public ?string $barrio;
    public int $cifId;
    public string $calle;
    public int $codigoPostal;
    public string $localidad;
    public int $numero;
    public int $provincia;
    public ?int $piso;
    public ?string $depto;

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
        ];
    }
}
