<?php $__env->startSection('body'); ?>

    <div id='main' class='wrapper style1'>
        <div class='container'>                     
            <section>
                <h3>Ingreso De Usuarios</h3>
                <form method="post" action="/login">
                    <div class="row uniform 50%">
                        <div class="12u$">
                            <input type="email" name="email" id="email" value="" placeholder="Email">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="12u$">
                            <input type="password" name="password" id="password" value="" placeholder="Password">
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="12u$">
                            <a href="/password/reset">Olvido su clave?</a>
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

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>