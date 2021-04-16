<?php
namespace Modules\Cotizador\Payloads;

use Modules\Cotizador\ValueObjects\BicicletaPlan;
use Infrastructure\Payload\BasePayload;

class PolicyPayload extends BasePayload
{
    public int $codCia = BicicletaPlan::COD_CIA;
    public int $codRamo = BicicletaPlan::COD_RAMO_PROD;
    public int $numeroSolicitud;
    public string $numeroTarjeta;
    public string $vencimientoTarjeta;

    public static function translation(): array
    {
        return [
            'numeroSolicitud' => 'request_number',
            'numeroTarjeta' => 'card_number',
            'vencimientoTarjeta' => 'card_expliration',
        ];
    }
}
