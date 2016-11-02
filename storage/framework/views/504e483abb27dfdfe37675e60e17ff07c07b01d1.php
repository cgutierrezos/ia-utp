<?php $__env->startSection('title', 'IA - UTP'); ?>

<?php $__env->startSection('body'); ?>

	<?php echo $__env->make('templates.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


	<div id='main' class='wrapper style1'>
		<div class='container'>						
			<section>
				<h3>Ingreso De Usuarios</h3>
				<form method="post" action="/auth/login">
					<div class="row uniform 50%">
						<div class="12u$">
							<input type="text" name="usuario" id="usuario" value="" placeholder="Usuario">
						</div>
						<div class="12u$">
							<input type="password" name="clave" id="clave" value="" placeholder="Password">
						</div>
						<div class="12u$">
							<a href="/register">No tiene una cuenta? Registrese</a>
						</div>
						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="Guardar" class="special"></li>
							</ul>
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>