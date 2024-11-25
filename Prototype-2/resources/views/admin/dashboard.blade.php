<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    </head>

<body>
    <div class="container mt-5">
        <h1>Welcome to the Dashboard</h1>
        <h2>Liste des Articles</h2>
        <button><a href="/articles/create">Créer un nouvel article</a></button>
        <ul>
            @foreach ($articles as $article)
            <x-article-card :article="$article" />
            <li>
                {{$article['id']}}
                <p>
                    {{$article['content']}}
                </p>
                <button><a href="/articles/{{$article['id']}}">Afichier Details</a></button>
            </li>
            @endforeach
            <h1>HELLO</h1>
        </ul>
        <form method="POST" action="{{Route('logout')}}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>

</html>