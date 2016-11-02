<?php $__env->startSection('title', 'IA - UTP'); ?>

<?php $__env->startSection('body'); ?>

	<div id="page-wrapper">

		<!-- Header -->
		<?php echo $__env->make('templates.nav2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<!-- Banner -->
		<?php echo $__env->make('templates.banner_welcome', [
			'title' => 'Ruta mas corta', 
			'paragraph' => 'Acorta caminos', 
			'style' => 'display: none', 
			'atitle' => 'siguiente'
		], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




		<!-- Four -->
		<?php echo $__env->make('templates.wrapper_fade_up', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<!-- Five -->
		<?php echo $__env->make('templates.wrapper_fade', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<!-- Footer -->
		<?php echo $__env->make('templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>