<?php $__env->startSection('title', 'home'); ?>

<?php $__env->startSection('body'); ?>

    <?php echo $__env->make('templates.banner_welcome', [
        'id' => 'inicio',
        'title' => 'Inteligencia Artificial',
        'paragraph' => 'la inteligencia exhibida por máquinas',
        'aref' => '',
        'astyle' => 'display:none',
        'atitle' => 'siguiente'
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>