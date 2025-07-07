<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuplicateController extends Controller
{
    public function duplicate(){
        $fruits= ['apple','mango','banana','kiwi','grapes','apple','mango','grapes'];
        
        $dup=array_unique($fruits);
        dd($dup);
    }
}
