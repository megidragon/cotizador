<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DocumentValidation implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return match(request()->get('document_type'))
        {
            'DNI' => $this->minMax($value, 8, 10),
            'LC' => $this->minMax($value, 1, 8),
            'LE' => $this->minMax($value, 1, 8),
            'CUIT' => $this->minMax($value, 1, 8),
            'CUIL' => $this->minMax($value, 1, 8),
            default => false
        };
    }

    private function minMax($value, $min, $max)
    {
        return strlen((string)$value) >= $min && strlen((string)$value) <= $max;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return match (request()->get('document_type'))
        {
            'DNI' => 'Para números de D.N.I. inferiores a 10.000.000 seleccione L.C./L.E. para continuar con la solicitud.',
            'LC' => 'Para el tipo de documento LC el número debe ser menor que 10.000.000',
            'LE' => 'Para el tipo de documento LE el número debe ser menor que 10.000.000',
            'CUIT' => 'Para el tipo de documento CUIT el número debe ser menor que 10.000.000',
            'CUIL' => 'Para el tipo de documento CUIL el número debe ser menor que 10.000.000',
        };
    }
}
