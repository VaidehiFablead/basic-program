<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function oddEvenNumber()
    {
        $number = range(1, 50);
        $result = [];

        foreach ($number as $num) {
            if ($num % 2 == 0) {
                $result[] = $num . ' is Even';
            } else {
                $result[] = $num . ' is Odd';
            }
        }

        return view('number', compact('result'));
    }

    public function minMax(){
        $minmaxNumber=[12,32,50,8,29];

        $min=min($minmaxNumber);

        $max=max($minmaxNumber);

        dd($min,$max);
    }
}
