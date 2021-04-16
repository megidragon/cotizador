<?php

namespace Infrastructure\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    public $table = 'token';
    public $timestamps = false;

    protected $fillable = ['token', 'key', 'refresh_token'];
}
