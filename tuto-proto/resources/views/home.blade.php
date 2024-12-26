@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Articles</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Category</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->category->name ?? 'No Category' }}</td>
                <td>
                    @foreach($article->tags as $tag)
                    <span class="badge badge-info">{{ $tag->name }}</span>
                    @endforeach
                </td>
                <td>{{ $article->user->name ?? 'Unknown Author' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection