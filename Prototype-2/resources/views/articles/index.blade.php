@extends('layouts.app')


@section( 'title', 'Liste des Articles')

@section('sidebar')
<h3>Catégories</h3>
<ul>
    <li>Laravel</li>
    <li>PHP</li>
    <li>Programmation Web</li>
</ul>
@endsection

@section('content')
<h1>Liste des Articles</h1>
<!-- <button><a href="/articles/create">Créer un nouvel article</a></button> -->
<ul>
    @foreach ($articles as $article)
    <x-article-card :article="$article" />
    <li>
        {{$article['id']}}
        <p>
            {{$article['content']}}
        </p>
        <!-- <button><a href="/articles/{{$article['id']}}">Afichier Details</a></button> -->
    </li>
    @endforeach
</ul>
@include('partials.flash-message')
@endsection