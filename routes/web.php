<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddStudentsController;
use App\Http\Controllers\CseController;
use App\Http\Controllers\BbaController;
use App\Http\Controllers\llbController;
use App\Http\Controllers\EteController;
use App\Http\Controllers\EeeController;
use App\Http\Controllers\TutionFeeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\AllStudentsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SaveStudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/student', function () {
    return view('student_dashboard');
})->middleware(['auth', 'verified'])->name('student_dashboard');

//Admin-Dashboard

Route::get('/admin', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'verified'])->name('admin_dashboard');



//Add Students//
Route::get('/addstudent', [AddStudentsController::class, 'addstudent']);

//Save Students//
Route::post('/savestudent', [SaveStudentController::class, 'savestudent']);

//cse//
Route::get('/cse', [CseController::class, 'cse']);

//bba//
Route::get('/bba', [BbaController::class, 'bba']);

//llb//
Route::get('/llb', [llbController::class, 'llb']);

//ete//
Route::get('/ete', [EteController::class, 'ete']);

//eee//
Route::get('/eee', [EeeController::class, 'eee']);

//tution fee//
Route::get('/tutionfee', [TutionFeeController::class, 'tutionfee']);

//Result//
Route::get('/result', [ResultController::class, 'result']);

//Result//
Route::get('/allstudent', [AllStudentsController::class, 'allstudent']);

//Result//
Route::get('/teachers', [TeacherController::class, 'teachers']);







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
