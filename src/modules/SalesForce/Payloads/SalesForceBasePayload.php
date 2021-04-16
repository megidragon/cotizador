<?php
namespace Modules\SalesForce\Payloads;

use Infrastructure\Payload\BasePayload;

class SalesForceBasePayload extends BasePayload
{
    public string $originForm = 'Bici';
    public string $product = 'Bici';

    public static function translation(): array
    {
        return [
            'Cif' => 'cif',
            'telefonoweb' => 'web_phone',
            'lastName' => 'last_name',
            'gender' => 'gender',
            'contactAddress' => 'contact_address',
            'clientPostalCode' => 'client_postal_code',
            'identityNumber' => 'identity_number',
            'selectedPlan' => 'selected_plan',
            'birthDate' => 'birth_date',
            'originForm' => 'origin_form',
            'product' => 'product',
            'contactpoint' => 'contactpoint',
            'leadUrl' => 'lead_url',
            'webPrice' => 'web_price',
            'assuredAmount' => 'assured_amount',
            'emailweb' => 'emailweb',
            'identityType' => 'identity_type',
            'firstName' => 'first_name',
            'nationality' => 'nationality',
            'salesforceID' => 'salesforce_id',
            'contractState' => 'contract_state',
            'aplicationNumber' => 'aplication_number',
            'payment' => 'payment'
        ];
    }
}
