<?php
namespace Modules\SalesForce\Payloads;

class BiciThirdStepPayload extends SalesForceBasePayload
{
    public string $contactpoint = 'CotizadorMasivo/FormaPago-Bici';
    public string $contactAddress;
    public string $contactAddressNumber;
    public string $clientPostalCode;
    public string $salesforceID;
    public string $nationality;
    public string $contractState;
    public string $clientLocation;

    public static function translation(): array
    {
        return [
            'originForm' => 'origin_form',
            'product' => 'product',
            'contactpoint' => 'contactpoint',

            'contactAddress' => 'address_street',
            'contactAddressNumber' => 'address_number',
            'clientPostalCode' => 'postal_code',
            'nationality' => 'country',
            'contractState' => 'province',
            'clientLocation' => 'locality',
        ];
    }
}
