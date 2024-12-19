<?php

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Article', function () {
    // Find the article by ID, if it exists
    $article = Article::find(2);

    // Check if the article exists
    if (!$article) {
        return response()->json(['error' => 'Article not found!'], 404);
    }

    // Create tags if they don't exist
    $tag1 = Tag::firstOrCreate(['name' => 'PHP']);
    $tag2 = Tag::firstOrCreate(['name' => 'Laravel']);

    // Attach tags to the article
    $article->tags()->attach([$tag1->id, $tag2->id]);

    // Display the article with attached tags
    dd($article);
});
