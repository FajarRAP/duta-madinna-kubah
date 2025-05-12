<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', fn() => view('dashboard'))
    ->middleware('auth')->name('dashboard');

Route::get('/auth/login', fn() => view('auth.login'))
    ->name('login');

Route::post('/auth/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/auth/logout', [AuthController::class, 'logout'])
    ->middleware('auth')->name('logout');
