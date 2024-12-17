<?php
use App\Http\Controllers\ArticleController;
use Illuminate\Routing\Route;

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');