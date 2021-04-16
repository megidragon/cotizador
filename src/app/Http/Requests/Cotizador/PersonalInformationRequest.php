<?php

namespace App\Http\Requests\Cotizador;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PersonalInformationRequest extends FormRequest
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
            'first_name' => 'string',
            'last_name' => 'string',
            'document' => 'string',
            'birth_day' => 'number|min:1|max:31',
            'birth_month' => 'number|min:1|max:12',
            'birth_year' => 'number|min:1900',
            'email' => 'string',
            'prefix' => 'number',
            'phone' => 'number',
            'g-recaptcha-response' => 'required|recaptchav3:personal_data_submit,0.5'
        ];
    }

    public function failedValidation( Validator $validator): \Illuminate\Http\JsonResponse
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
