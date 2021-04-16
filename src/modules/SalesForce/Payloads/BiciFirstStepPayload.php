<?php
namespace Modules\SalesForce\Payloads;

class BiciFirstStepPayload extends SalesForceBasePayload
{
    public string $contactpoint = 'CotizadorMasivo/Tipo-Cobertura-Bici';
    public string $telefonoweb;
    public string $lastName = 'Salesforce';
    public string $selectedPlan;
    public string $identityNumber;
    public string $leadUrl = 'CotizadorMasivo/Tipo-Cobertura-Bici';
    public int $webPrice;
    public int $assuredAmount;
    public string $emailweb;
    public string $identityType;
    public string $firstName;
    public int $budgetNumber;
    public $Cif;
    public $Ref;

    public static function translation(): array
    {
        return [
            'originForm' => 'origin_form',
            'product' => 'product',
            'contactpoint' => 'contactpoint',

            'telefonoweb' => 'web_phone',
            'firstName' => 'first_name',
            'lastName' => '',
            'identityType' => 'document_type',
            'identityNumber' => 'document_number',
            'selectedPlan' => 'plan_id',
            'leadUrl' => 'lead_url',
            'webPrice' => 'web_price',
            'assuredAmount' => 'assured_amount',
            'emailweb' => 'email',
            'budgetNumber' => 'budget_number',
        ];
    }
}
