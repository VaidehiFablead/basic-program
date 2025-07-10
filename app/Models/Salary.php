<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $table = 'salary'; // your actual table

    protected $fillable = [
        'emp_id',
        'salary',
        'attendance',
        'leave'
    ];


    public function employee()
    {
        return $this->belongsTo(Emp::class, 'emp_id');
    }
}
