<?php

namespace App\Http\Requests\Cotizador;

use App\Rules\DocumentValidation;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;
use Modules\Cotizador\Traits\FormControl;

/**
 * @property mixed first_name
 * @property mixed last_name
 * @property mixed document_type
 * @property mixed document_number
 * @property mixed birth_day
 * @property mixed birth_month
 * @property mixed birth_year
 * @property mixed email
 * @property mixed phone_area_code
 * @property mixed phone
 */
class SalesForceRequest extends FormRequest
{
    use FormControl;

    private int $STEP = 1;

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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'document_type' => 'required|string',
            'document_number' => ['required', 'numeric', new DocumentValidation],
            'birth_day' => 'required_if:birth_year,birth_month|numeric|min:1|max:31',
            'birth_month' => 'required_if:birth_year,birth_day|numeric|min:1|max:12',
            'birth_year' => 'required_if:birth_day,birth_month|numeric|min:1900',
            'email' => 'required|string',
            'phone_area_code' => 'required|max:3',
            'phone' => 'required|min:8|max:9',
            'plan_id' => 'required|numeric',
            'g-recaptcha-response' => [
                Rule::requiredIf(!config('app.debug')),
                'captcha',
            ]
        ];
    }

    public function messages()
    {
        return [
            'phone_area_code' => 'El :attribute debe ser un codigo valido'
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
