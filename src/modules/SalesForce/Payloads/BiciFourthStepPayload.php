<?php
namespace Modules\SalesForce\Payloads;

class BiciFourthStepPayload extends SalesForceBasePayload
{
    public string $contactpoint = 'CotizadorMasivo/Solicitud-Confirmacion-Bici';
    public string $salesforceID;
    public array $payment;
}
