<!DOCTYPE HTML>
<!--
    Landed by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/landed/css/main.css')); ?>" />
        <!--link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.css')); ?>" -->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body id='body' class="landing">

        <?php echo $__env->make('templates.nav2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('body'); ?>
        
        <!-- Scripts -->
        <script src="<?php echo e(asset('plugins/landed/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/landed/js/jquery.scrolly.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/landed/js/jquery.dropotron.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/landed/js/jquery.scrollex.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/landed/js/skel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/landed/js/util.js')); ?>"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js'"></script><![endif]-->
        <script src="<?php echo e(asset('plugins/landed/js/main.js')); ?>"></script>

    </body>
</html>