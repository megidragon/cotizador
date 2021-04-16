<?php

namespace App\Http\Requests\Cotizador;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;
use Infrastructure\Request\BaseRequest;

class BasicPersonalInformationRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => 'string',
            'last_name' => 'string',
            'document_type' => 'string',
            'document_number' => 'string',
            'birth_day' => 'numeric|min:1|max:31',
            'birth_month' => 'numeric|min:1|max:12',
            'birth_year' => 'numeric|min:1900',
            'email' => 'string',
            'phone_area_code' => 'numeric|max:3',
            'phone' => 'numeric',
            'g-recaptcha-response' => [
                Rule::requiredIf(!config('app.debug')),
                'captcha',
            ]
        ];
    }

    public function attributes()
    {
        return [
            'first_name' => 'primer nombre',
            'last_name' => 'apellido',
            'document_type' => 'tipo de documento',
            'document_number' => 'numero de documento',
            'birth_day' => 'día de nacimiento',
            'birth_month' => 'mes de nacimiento',
            'birth_year' => 'año de nacimiento',
            'phone_area_code' => 'codigo de area',
            'phone' => 'numero celular',
            'plan_id' => 'codigo de plan',
            'g-recaptcha-response' => 'recaptcha',
        ];
    }

    public function failedValidation( Validator $validator): \Illuminate\Http\JsonResponse
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
