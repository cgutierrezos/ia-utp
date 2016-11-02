<?php $__env->startSection('body'); ?>


    <?php echo $__env->make('templates.nav2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <div id='main' class='wrapper style1'>
        <div class='container'>                     
            <section>
                <h3>Registro De Usuarios</h3>
                <form method="post" action="/auth/register">
                    <div class="row uniform 50%">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="username" id="username" value="" placeholder="Nombre Usuario">
                            <?php if($errors->has('username')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('username')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <input type="text" name="email" id="email" value="" placeholder="E-Mail">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="12u$">
                            <input type="password" name="password" id="password" value="" placeholder="Clave">
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="12u$">
                            <input type="password" name="password_confirmation" id="password_confirmation" value="" placeholder="Confirme la Clave">
                            <?php if($errors->has('password_confirmation')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                </span>
                            <?php endif; ?>
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