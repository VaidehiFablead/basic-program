<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
        protected $table = 'emp'; // your actual table

        protected $fillable = [
            'name',
            'email',
            'address',
            'contact',
            'branch',
            'position'
        ];
}
