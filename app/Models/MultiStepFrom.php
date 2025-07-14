<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiStepFrom extends Model
{
    use HasFactory;

    protected $table='teacher';

    protected $fillable=[
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state'
    ];
}
