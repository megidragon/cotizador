<?php
namespace Modules\Cotizador\Payloads;

use Infrastructure\Payload\BasePayload;

class CreateUserPayload extends BasePayload
{
    public string $apellido;
    public string $email;
    public string $estadoCivil = "No Corresp";
    public string $fechaNacimiento;
    public string $nacionalidad;
    public string $nombres;
    public string $numeroDocumento;
    public string $prefijo;
    public string $sexo;
    public string $telefono;
    public string $tipoDocumento;
    public string $tipoTelefono = "CELU";

    public static function translation(): array
    {
        return [
            'apellido' => 'last_name',
            'email' => 'email',
            'nacionalidad' => 'country',
            'nombres' => 'first_name',
            'numeroDocumento' => 'document_number',
            'tipoDocumento' => 'document_type',
            'prefijo' => 'phone_area_code',
            'telefono' => 'phone',
            'sexo' => 'gender',
        ];
    }
}
