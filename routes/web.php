<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('home');

Route::get('/dashboard', fn() => view('dashboard'))
    ->middleware('auth')->name('dashboard');
Route::get('/dashboard/information', [InformationController::class, 'index'])
    ->middleware('auth')->name('information');
Route::post('dashboard/information', [InformationController::class, 'store'])
    ->middleware('auth')->name('information.store');
Route::delete('dashboard/information/{information}', [InformationController::class, 'destroy'])
    ->middleware('auth')->name('information.destroy');
Route::get('/dashboard/portfolio', fn() => view('portfolio'))
    ->middleware('auth')->name('portfolio');


Route::get('/auth/login', fn() => view('auth.login'))
    ->name('login');

Route::post('/auth/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/auth/logout', [AuthController::class, 'logout'])
    ->middleware('auth')->name('logout');
