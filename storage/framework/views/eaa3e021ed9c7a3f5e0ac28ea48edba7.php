<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href=" <?php echo e(asset('asset')); ?>/css/bootstrap.css ">

    <title>Document</title>
</head>
<body>

    <?php echo $__env->make('website.includs.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldContent('body'); ?>


    <?php echo $__env->make('website.includs.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src=" <?php echo e(asset('asset')); ?>/js/bootstrap.bundle.min.js "></script>

</body>
</html>
<?php /**PATH D:\server-3\htdocs\complete-crud\resources\views/website/master.blade.php ENDPATH**/ ?>