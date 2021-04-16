<?php

namespace App\Http\Requests\Cotizador;

use App\Rules\DocumentValidation;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Modules\Cotizador\Traits\FormControl;

class StepOneRequest extends FormRequest
{
    use FormControl;
    private int $STEP = 2;

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
            'plan_id' => 'required|numeric',
            'first_name' => 'required|max:200',
            'last_name' => 'required|max:200',
            'email' => 'required|max:200',
            'birth_day' => 'required_if:birth_year,birth_month|numeric|min:1|max:31',
            'birth_month' => 'required_if:birth_year,birth_day|numeric|min:1|max:12',
            'birth_year' => 'required_if:birth_day,birth_month|numeric|min:1900',
            'document_number' => ['required', 'numeric', new DocumentValidation],
            'document_type' => 'required',
            'phone_area_code' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'address_street' => 'required|max:200',
            'address_number' => 'required|numeric',
            'address_floor' => 'max:5',
            'address_department' => 'max:10',
            'postal_code' => 'required|digits_between:3,8',
            'locality' => 'required|max:200',
            'province' => 'required|max:200',
            'country' => 'required|max:200',
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
