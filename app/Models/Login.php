<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    protected $table = 'login'; // your actual table

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
