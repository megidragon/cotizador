<?php
namespace Infrastructure\Helper;

use Infrastructure\Model\Token;
use JetBrains\PhpStorm\Pure;

class FormHelper
{
    public static function getBudgetCode(): int
    {
        if (!session()->exists('policyCode'))
        {
            throw new \Exception('Undefined budget number in session', 400);
        }

        return session()->get('policyCode');
    }

    #[Pure] public static function parsePostalCode($pc)
    {
        return (int)str_pad((string)$pc, 7, '0');
    }

    public static function getSalesforceId()
    {
        if (!session()->exists('salesForceId'))
        {
            throw new \Exception('Undefined Salesforce id in session', 400);
        }

        return session()->get('salesForceId');
    }
}
