<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


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

Route::get('/register',[RegistrationController::class,'index'])->name('register');
Route::post('/register-user',[RegistrationController::class,'register'])->name('register-user');


Route::get('create',[CustomerController::class,'create'])->name('create');
Route::post('create',[CustomerController::class,'store'])->name('create');
Route::get('view',[CustomerController::class,'view'])->name('view');
Route::get('destroy/{id}',[CustomerController::class,'destroy'])->name('destroy');
Route::get('edit/{id}',[CustomerController::class,'edit'])->name('edit');
Route::post('update/{id}',[CustomerController::class,'update'])->name('update');
