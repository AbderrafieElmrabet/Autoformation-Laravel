<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/Article', function () {
//     $article = Article::find(4);
//     $article->comments()->create(['content' => 'super article!']);

//     $video = Video::create(['title' => 'my video', 'content' => 'blasphemous', 'user_id' => 1]);
//     $video->comments()->create(['content' => 'Video incroyable!']);
//     dd(['articles' => [$article, $video]]);
// });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth');

// Route::get('/adminlte', function () {
//     return view('adminlte::page');
// });

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->name('dashboard');

// Route::get('/articles', [ArticleController::class, 'index'])->name('article.index')->middleware('role:admin');
// routes/web.php

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::resource('articles', controller: ArticleController::class);
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
Route::get('/home', [ArticleController::class, 'home'])->name('home');