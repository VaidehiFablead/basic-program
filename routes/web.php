<?php

use App\Http\Controllers\DuplicateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\SortController;
use App\Http\Controllers\StudentController;
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



Route::get('oddeven', [NumberController::class, 'oddEvenNumber']);

Route::get('minmax', [NumberController::class, 'minMax']);

Route::get('object', [ObjectController::class, 'object']);

Route::get('duplicate', [DuplicateController::class, 'duplicate']);

Route::get('sort', [SortController::class, 'arraySort']);

Route::get('student', [StudentController::class, 'studentMarks']);


// Route::get('/login',function(){
//     return view('login');
// });

// Route::get('/dashboard',function(){
//     return "Welcome back";
// })->middleware('auth');

// Route::middleware(['check.age'])->group(function () {
//     Route::get('/welcome', function () {
//         return 'Welcome Admin!';
//     });
// });


Route::get('login', [LoginController::class, 'showLogin']);

Route::Post('login', [LoginController::class, 'login'])->name('login.check');


// Route::get('welcome', function () {
//     return view('welcome');
// })->middleware('login');

Route::get('/', function () {
    return view('login');
})->middleware('auth');

Route::get('/profile', function () {
    return "User welcome";
})->middleware('ensure.user');

Route::get('/login', function () {
    return view('login');
});
