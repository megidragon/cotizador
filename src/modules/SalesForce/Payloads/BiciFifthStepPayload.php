<?php
namespace Modules\SalesForce\Payloads;

class BiciFifthStepPayload extends SalesForceBasePayload
{
    public string $contactpoint = 'CotizadorMasivo/Poliza-Emitida-Bici';
    public int $aplicationNumber;
    public string $salesforceID;

    public static function translation(): array
    {
        return [
            'aplicationNumber' => 'numeroPoliza'
        ];
    }
}
