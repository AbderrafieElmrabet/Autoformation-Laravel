@extends('adminlte::page')

@section('title', 'Add New Article')

@section('content_header')
<h1>Add New Article</h1>
@endsection

@section('content')
<form action="{{ route('articles.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" required>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" placeholder="Enter content" required></textarea>
    </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Save Article</button>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection