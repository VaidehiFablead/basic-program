<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectController extends Controller
{
    public function object()
    {
        $user = [
            ['name' => 'pqr', 'age' => 22],
            ['name' => 'abc', 'age' => 20],
            ['name' => 'xyz', 'age' => 25],
        ];


        usort($user, function ($a) {
            return $a['name'] ;
        });

        dd($user);
    }
}
