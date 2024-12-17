<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $__env->yieldContent('title', 'Mon Blog Minimaliste'); ?></title>
  <link rel="stylesheet" href="">
</head>

<body>
  <header>
    <h1>Mon Blog</h1>
    <nav>
      <a href="">Accueil</a>
      <a href="">Créer un Article</a>
    </nav>
  </header>

  <main>
    <div class="content">
      <?php echo $__env->yieldContent(section: 'content'); ?>
    </div>
    <aside>
      <?php echo $__env->yieldContent('sidebar'); ?>
    </aside>
  </main>

  <footer>
    <p>&copy; 2024 Mon Blog Minimaliste</p>
  </footer>
</body>

</html><?php /**PATH C:\Users\Solicode\Desktop\NWTutorials\resources\views/layouts/app.blade.php ENDPATH**/ ?>