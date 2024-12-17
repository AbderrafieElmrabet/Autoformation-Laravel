<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::resource('/articles', ArticleController::class);
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth.middleware')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
});

Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');