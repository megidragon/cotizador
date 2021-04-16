<?php

namespace App\Http\Requests\Cotizador;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SelectPlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'utm_source' => 'string',
            'utm_medium' => 'string',
            'utm_campaign' => 'string',
            'premio' => 'string',
            'cantPlanes' => 'string',
            'numSecuPol' => 'string',
            'opcionSeleccionada' => 'string',
            'tipoProducto' => 'string',
            'email' => 'string',
            'plan_id' => 'string',
        ];
    }

    public function failedValidation( Validator $validator): \Illuminate\Http\JsonResponse
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
