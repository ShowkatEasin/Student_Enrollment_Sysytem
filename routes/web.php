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
use App\Http\Controllers\ShowDataController;
use App\Http\Controllers\MainController;



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

//student-Dashboard

Route::get('/student', function () {
    return view('student_dashboard');
})->middleware(['auth', 'verified'])->name('student_dashboard');

//Admin-Dashboard

Route::get('/admin', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'verified'])->name('admin_dashboard');


 //Index Index//
Route::get('/index', [MainController::class, 'index'])->name("indexdata");

//Create Students//
Route::get('/create', [MainController::class, 'create'])->name("createdata");

//store Students//
Route::post('/store', [MainController::class, 'store'])->name("storedata");

//Edit Students//
Route::get('/edit/{id}', [MainController::class, 'edit'])->name("editdata");

Route::get('/update/{id}', [MainController::class, 'update'])->name("updatedata");

//Route::delete('/delete', [MainController::class, 'destroy']);

















Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
