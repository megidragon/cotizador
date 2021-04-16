<?php

namespace Infrastructure\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $primaryKey = 'budget_number';

    public $incrementing = false;

    protected $fillable = [
        'budget_number',
        'cif_id',
        'plan_id',
        'address_id',
        'first_name',
        'last_name',
        'email',
        'birth_day',
        'birth_month',
        'birth_year',
        'document_number',
        'document_type',
        'phone_area_code',
        'phone',
        'gender',
        'address_street',
        'address_number',
        'address_floor',
        'address_department',
        'postal_code',
        'locality',
        'province',
        'country',
        'payment_method',
        'cbu',
        'card_number',
        'card_cvv',
        'card_expiration_month',
        'card_expiration_year',
        'card_owner_name',
    ];
}
