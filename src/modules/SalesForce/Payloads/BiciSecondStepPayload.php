<?php
namespace Modules\SalesForce\Payloads;

class BiciSecondStepPayload extends SalesForceBasePayload
{
    public string $contactpoint = 'CotizadorMasivo/Datos-Personales-Bici';
    public string $salesforceID;
    public string $telefonoweb;
    public string $lastName;
    public string $gender;
    public string $identityNumber;
    public string $birthDate;
    public string $emailweb;
    public int $selectedPlan;
    public string $identityType;
    public string $firstName;
    public string $nationality;
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
            'lastName' => 'last_name',
            'identityType' => 'document_type',
            'identityNumber' => 'document_number',
            'selectedPlan' => 'plan_id',
            'leadUrl' => 'lead_url',
            'emailweb' => 'email',
            'gender' => 'gender'
        ];
    }
}
