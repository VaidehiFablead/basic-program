<?php

use App\Http\Controllers\DuplicateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\SortController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StudentsRegController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Routing\Controllers\Middleware;
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


Route::get('login', [LoginController::class, 'showLogin']);

Route::Post('login', [LoginController::class, 'login'])->name('login.check');

// for display studentlogin form
Route::get('/', [StudentsController::class, 'showForm'])->name('login');

// for login student

Route::post('/students', [StudentsController::class, 'login'])->name('students');

// Route::middleware('studentauth')->group(function(){
//     Route::get('/studentDashboard',function(){
//         return view('stu dentdashboard');
//     });
// });


// Logout
Route::get('/logout', [StudentsController::class, 'logout']);

Route::post('/students/login', [StudentsController::class, 'login'])->name('students.login');


// Route::middleware('auth:student')->group(function () {
//     Route::get('/studentDashboard', function () {
//         return response()->json(['message' => 'Welcome to dashboard']);
//     });
// });


Route::middleware('auth:student')->group(function () {
    Route::get('/studentDashboard', function () {
        return view('studentdashboard');
    });
});
    