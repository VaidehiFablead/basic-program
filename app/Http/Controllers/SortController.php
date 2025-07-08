<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortController extends Controller
{
    public function arraySort()
    {

        $array1 = [10, 340, 40, 22, 9];

        $asc = $array1;
        sort($asc);

        $desc = $array1;
        rsort($desc);
        return view('sort', compact('array1', 'asc', 'desc'));
    }

}
