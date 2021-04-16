<?php
namespace Modules\Cotizador\Payloads;

use Infrastructure\Payload\BasePayload;

class RequestNotContractMassConsumptionPayload extends BasePayload
{
    public string $inserta_camp = 'N';
    public string $apellido;
    public string $nombre;
    public string $email;
    public int $numDoc;
    public string $tipoDoc;
    public string $prefijo;
    public string $telefono;
    public int $presupuesto;
    public string $producto = 'BICI';

    public static function translation(): array
    {
        return [
            'nombre' => 'first_name',
            'apellido' => 'last_name',
            'email' => 'email',
            'numDoc' => 'document_number',
            'tipoDoc' => 'document_type',
            'prefijo' => 'phone_area_code',
            'telefono' => 'phone',
            'presupuesto' => 'budget',
            'producto' => 'product'
        ];
    }
}
