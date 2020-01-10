<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(isset($title) ? $title : 'Sistema de Locação'); ?></title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <?php echo $__env->yieldPushContent('stylesheets'); ?>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <?php echo $__env->make('layouts.content.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>

        <main class="py-4">
            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('javascript'); ?>
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/exercicio-toniato/resources/views/layouts/app.blade.php ENDPATH**/ ?>