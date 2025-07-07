<?php

use App\Http\Controllers\DuplicateController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\ObjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('oddeven', [NumberController::class, 'oddEvenNumber']);

Route::get('minmax', [NumberController::class, 'minMax']);

Route::get('object', [ObjectController::class, 'object']);

Route::get('duplicate', [DuplicateController::class, 'duplicate']);