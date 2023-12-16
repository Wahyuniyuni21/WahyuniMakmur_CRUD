<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'index'])->name('auth.login');

Route::get('/', function () {
    return redirect(route('auth.login'));
});


Route::get('home', [HomeController::class, 'home']);
Route::get('about', [HomeController::class, 'about']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('tabel', [HomeController::class, 'produk']);
Route::resource('mahasiswa',HomeController::class);
Route::resource("student", StudentController::class);     


