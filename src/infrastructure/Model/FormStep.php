<?php

namespace Infrastructure\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormStep extends Model
{
    use HasFactory;

    protected $primaryKey = 'budget_number'; // or null

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = ['budget_number', 'current_step'];
}
