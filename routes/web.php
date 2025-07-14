<?php

use App\Http\Controllers\DisplayEmpController;
use App\Http\Controllers\DuplicateController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\EmpLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MultiStepFormController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SortController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StudentsRegController;
use App\Models\Emp;
use App\Models\Salary;
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



// Route::get('oddeven', [NumberController::class, 'oddEvenNumber']);

// Route::get('minmax', [NumberController::class, 'minMax']);

// Route::get('object', [Objec/tController::class, 'object']);

// Route::get('duplicate', [DuplicateController::class, 'duplicate']);

// Route::get('sort', [SortController::class, 'arraySort']);

// Route::get('student', [StudentController::class, 'studentMarks']);


// Route::get('login', [LoginController::class, 'showLogin']);

// Route::Post('login', [LoginController::class, 'login'])->name('login.check');

// for display studentlogin form
// Route::get('/', [StudentsController::class, 'showForm'])->name('login');

// for login student

// Route::post('/students', [StudentsController::class, 'login'])->name('students');

// Route::middleware('studentauth')->group(function(){
//     Route::get('/studentDashboard',function(){
//         return view('stu dentdashboard');
//     });
// });


// Logout
// Route::get('/logout', [StudentsController::class, 'logout']);

// Route::post('/students/login', [StudentsController::class, 'login'])->name('students.login');


// Route::middleware('auth:student')->group(function () {
//     Route::get('/studentDashboard', function () {
//         return response()->json(['message' => 'Welcome to dashboard']);
//     });
// });


// Route::middleware('auth:student')->group(function () {
//     Route::get('/studentDashboard', function () {
//         return view('studentdashboard');
//     });
// });




// Emp
Route::get('/', [EmpController::class, 'showForm']); // shows the form
Route::post('/insert', [EmpController::class, 'store'])->name('emp.store');

// Salary
Route::get('/salary', [SalaryController::class, 'showForm']); // shows the form
// Route::post('/insert', [SalaryController::class, 'store'])->name('salary.store');
Route::get('/salary', [SalaryController::class, 'createSalaryForm']);
Route::post('/salary/store', [SalaryController::class, 'store'])->name('salary.store');


// display emp
Route::get('/displayEmp', [DisplayEmpController::class, 'display'])->name('displayEmp');
Route::get('/displayEmp', [DisplayEmpController::class, 'showSalaryTable']);


// edit
Route::get('/emp/edit/{id}', [DisplayEmpController::class, 'edit'])->name('emp.edit');
Route::post('/emp/update/{id}', [DisplayEmpController::class, 'update'])->name('emp.update');



// emplogin
// Route::get('/empLogin', [EmpLoginController::class, 'showLogin']); // shows the form

// Route::post('/empLogin', [EmpLoginController::class, 'login'])->name('empLogin.submit');


// Route::post('/display-emp', [EmpController::class, 'display'])->name('displayEmp');


// Show login page
Route::get('/empLogin', [EmpLoginController::class, 'showLogin'])->name('empLogin');

// Handle login form submission
Route::post('/empLogin', [EmpLoginController::class, 'login'])->name('empLogin.submit');

// Show displayEmp page after login
Route::get('/displayEmp', [DisplayEmpController::class, 'showSalaryTable'])->name('displayEmp');

Route::get('/swipper', function () {
    return view('swipper');  // Looks for resources/views/about.blade.php
});



// multistep form
Route::get('/step1', [MultiStepFormController::class, 'step1'])->name('form.step1');
Route::post('/step1', [MultiStepFormController::class, 'postStep1']);

Route::get('/step2', [MultiStepFormController::class, 'step2'])->name('form.step2');
Route::post('/step2', [MultiStepFormController::class, 'postStep2']);

Route::get('/step3', [MultiStepFormController::class, 'step3'])->name('form.step3');
Route::post('/submit', [MultiStepFormController::class, 'submit'])->name('form.submit');
