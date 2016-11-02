<?php $__env->startSection('content'); ?>

	<header id='<?php echo $id ?>'>
		<h2><?php echo $title ?></h2>
		<p><?php echo $paragraph ?></p>
	</header>
	<span class="image"><img src="<?php echo e(asset('imagenes/ia.jpg')); ?>" alt="" /></span>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scrolly'); ?>

	<a href="<?php echo $aref ?>" class="goto-next scrolly" style='<?php echo $astyle ?>'><?php echo $atitle ?></a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>