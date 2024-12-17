@extends('layouts.app')

@section('content')
    <h1> un Article</h1>
    <form action="/articles/{{$article['id']}}" method="POST">
        @csrf
        @if(isset($article))
            @method('PUT')
        @endif
        <label for="title">Titre :</label>
        <input type="text" name="title" value="{{$article['title']}}" required>
        <label for="content">Contenu :</label>
        <textarea name="content" required>{{$article['content']}}</textarea>
        <button type="submit">Modifier</button>
    </form>
@endsection