<?php
namespace Infrastructure\ValueObject;

use ReflectionClass;

abstract class ValueObject
{
    abstract static function toArray(): array;

    static function getConstants(): array
    {
        $oClass = new ReflectionClass(get_called_class());
        return $oClass->getConstants();
    }
}
