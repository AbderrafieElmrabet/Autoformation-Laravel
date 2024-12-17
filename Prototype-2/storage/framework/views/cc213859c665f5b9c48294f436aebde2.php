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
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginalc197a308f8f389d8eec7ce56253b9544 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc197a308f8f389d8eec7ce56253b9544 = $attributes; } ?>
<?php $component = App\View\Components\ArticleCard::resolve(['article' => $article] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ArticleCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc197a308f8f389d8eec7ce56253b9544)): ?>
<?php $attributes = $__attributesOriginalc197a308f8f389d8eec7ce56253b9544; ?>
<?php unset($__attributesOriginalc197a308f8f389d8eec7ce56253b9544); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc197a308f8f389d8eec7ce56253b9544)): ?>
<?php $component = $__componentOriginalc197a308f8f389d8eec7ce56253b9544; ?>
<?php unset($__componentOriginalc197a308f8f389d8eec7ce56253b9544); ?>
<?php endif; ?>
            <li>
                <?php echo e($article['id']); ?>

                <p>
                    <?php echo e($article['content']); ?>

                </p>
                <button><a href="/articles/<?php echo e($article['id']); ?>">Afichier Details</a></button>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <h1>HELLO</h1>
        </ul>
        <form method="POST" action="<?php echo e(Route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit">Logout</button>
        </form>
    </div>
</body>

</html><?php /**PATH C:\Users\Solicode\Desktop\Login\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>