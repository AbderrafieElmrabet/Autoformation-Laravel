<?php

use App\Models\Article;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/Article', function () {
//     $article = Article::find(4);
//     $article->comments()->create(['content' => 'super article!']);

//     $video = Video::create(['title' => 'my video', 'content' => 'blasphemous', 'user_id' => 1]);
//     $video->comments()->create(['content' => 'Video incroyable!']);
//     dd(['articles' => [$article, $video]]);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/admin', function () {
    return 'Admin Dashboard';
})->middleware('role:admin');

Route::get('/editor', function () {
    return 'Editor Dashboard';
})->middleware('role:editor');