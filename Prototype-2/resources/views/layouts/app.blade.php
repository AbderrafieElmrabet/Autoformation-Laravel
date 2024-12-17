<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Mon Blog Minimaliste')</title>
  <link rel="stylesheet" href="">
</head>

<body>
  <header>
    <h1>Mon Blog</h1>
    <nav>
      <a href="/login">Login</a>
    </nav>
  </header>

  <main>
    <div class="content">
      @yield(section: 'content')
    </div>
    <aside>
      @yield('sidebar')
    </aside>
  </main>

  <footer>
    <p>&copy; 2024 Mon Blog Minimaliste</p>
  </footer>
</body>

</html>