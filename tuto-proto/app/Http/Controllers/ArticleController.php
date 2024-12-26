<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eager load the related category, tags, and user
        $articles = Article::with(['category', 'tags', 'user'])->get();

        return view('articles.index', compact('articles'));
    }

    public function home()
    {
        // Eager load the related category, tags, and user
        $articles = Article::with(['category', 'tags', 'user'])->get();

        return view('home', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();  // Assuming you have a Category model
        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Create a new article, assign the authenticated user's ID and a category ID
        $article = Article::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'category_id' => $validatedData['category_id'], // You can set this dynamically based on your categories
            'user_id' => auth()->id(),  // Current authenticated user
        ]);

        // Redirect to the articles index page or a success page
        return redirect()->route('articles.index')->with('success', 'Article created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete(); // Deletes the article from the database
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully!');
    }
}