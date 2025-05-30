<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('home');

Route::get('/dashboard', fn() => view('dashboard'))
    ->middleware('auth')->name('dashboard');
Route::resource('dashboard/information', InformationController::class)
    ->middleware('auth')
    ->names([
        'index' => 'information',
        'store' => 'information.store',
        'update' => 'information.update',
        'destroy' => 'information.destroy'
    ]);
Route::resource('dashboard/portfolio', PortfolioController::class)
    ->middleware('auth')
    ->names([
        'index' => 'portfolio',
        'store' => 'portfolio.store',
        'update' => 'portfolio.update',
        'destroy' => 'portfolio.destroy'
    ]);

Route::get('/auth/login', fn() => view('auth.login'))->name('login');
Route::post('/auth/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/auth/logout', [AuthController::class, 'logout'])
    ->middleware('auth')->name('logout');
