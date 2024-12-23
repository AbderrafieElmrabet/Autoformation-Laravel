@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Welcome, {{ Auth::user()->name ?? 'Guest' }}</h1> <!-- Display user's name or 'Guest' -->

    @php
    if (Auth::check()) {
    echo "Utilisateur connecté";
    }
    @endphp

    <p>Explorez les fonctionnalités de notre application.</p>
</div>
@endsection