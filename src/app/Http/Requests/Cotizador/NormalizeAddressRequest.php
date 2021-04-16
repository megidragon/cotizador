<?php

namespace App\Http\Requests\Cotizador;

use App\Rules\DocumentValidation;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Modules\Cotizador\Traits\FormControl;

class NormalizeAddressRequest extends FormRequest
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

    public function failedValidation( Validator $validator): \Illuminate\Http\JsonResponse
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
