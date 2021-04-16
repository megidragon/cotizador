<?php

namespace App\Http\Requests\Cotizador;

use App\Rules\DocumentValidation;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Modules\Cotizador\Traits\FormControl;

class StepTwoRequest extends FormRequest
{
    use FormControl;
    private int $STEP = 4;

    public function authorize(): bool
    {
        return $this->isAllowed($this->STEP);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'payment_method' => 'required|in:TA,BA',

            'cbu' => 'required_if:payment_method,BA|numeric|digits:22',
            'card_number' => 'required_if:payment_method,TA|numeric|digits:16',
            'card_expiration_month' => 'required_if:payment_method,TA',
            'card_expiration_year' => 'required_if:payment_method,TA',
            'card_owner_name' => 'required_if:payment_method,TA|max:250',
        ];
    }

    public function attributes()
    {
        return [
            'cbu' => 'CBU',
            'card_number' => 'Numero de tarjeta',
            'card_cvv' => 'Codigo de tarjeta',
            'card_expiration_month' => 'Mes de vencimiento',
            'card_expiration_year' => 'Año de vencimiento',
            'card_owner_name' => 'Titular de la tarjeta',
        ];
    }

    public function failedValidation( Validator $validator): \Illuminate\Http\JsonResponse
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
