<?php /** @noinspection ALL */
namespace Modules\Cotizador\ValueObjects;

use Infrastructure\ValueObject\ValueObject;

class BicicletaPlan extends ValueObject
{
    const COD_CIA = 1;
    const COD_RAMO_PROD = 417;
    const PRODUCTO = 'BICICLETA';

    static function toArray(): array
    {
        return [
            'codCia' => self::COD_CIA,
            'codRamoProd' => self::COD_RAMO_PROD,
            'producto' => self::PRODUCTO,
        ];
    }
}
