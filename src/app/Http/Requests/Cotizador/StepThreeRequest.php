<?php

namespace App\Http\Requests\Cotizador;

use App\Rules\DocumentValidation;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Modules\Cotizador\Traits\FormControl;

class StepThreeRequest extends FormRequest
{
    use FormControl;
    private int $STEP = 5;

    public function authorize(): bool
    {
        return $this->isAllowed($this->STEP);
    }

    public function rules()
    {
        return [
            'terms_and_services' => 'required|accepted',
        ];
    }

    public function attributes()
    {
        return [
            'terms_and_services' => 'Terminos y condiciones'
        ];
    }

    public function failedValidation( Validator $validator): \Illuminate\Http\JsonResponse
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
