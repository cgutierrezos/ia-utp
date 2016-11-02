<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width" user-scalable="no" initial-scale="1.0" maximum-scale="1.0" minimum-scale="1.0">
        <title> <?php echo $__env->yieldContent('title'); ?> </title>
        
    </head>
    <body id="body">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.css')); ?>">
        <script src=" <?php echo e(asset('plugins/jquery/js/jquery-3.1.1.js')); ?>"></script>
        <script src=" <?php echo e(asset('plugins/bootstrap/js/bootstrap.js')); ?>"></script>
        <?php echo $__env->make('templates.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <p>
            
        </p>
        <?php echo $__env->yieldContent('body'); ?>
    </body>
</html>
