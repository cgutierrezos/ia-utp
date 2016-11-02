<?php $__env->startSection('title', 'Verificacion'); ?>

<?php $__env->startSection('body'); ?>

	<?php echo $__env->make('templates.banner_welcome', [
        'id' => 'inicio',
        'title' => 'Verificacion de Correo',
        'paragraph' => 'Gracias por crear tu cuenta.
			            Por favor sigue el link de verificacion de email que a aparece a continuacion 
			            <a HREF="/register/verify.$confirmation_code"> Confirmar</a>',
        'aref' => '',
        'astyle' => 'display:none',
        'atitle' => 'siguiente'
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>