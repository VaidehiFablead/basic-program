<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Student extends Authenticatable
{
    // use HasFactory;
     use HasApiTokens, Notifiable;

    // protected $table = 'students';

    protected $fillable = [
        'name',
        'email',
        'password',
        'age'
    ];

    protected $hidden = [
        'password',
    ];
}
