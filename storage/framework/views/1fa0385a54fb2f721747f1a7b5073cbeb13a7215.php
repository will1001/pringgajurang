<?php $__env->startSection('content'); ?>
<div class="container-fluid loginregform">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome</div>
                       
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <div class="input-group-prepend">
                                 <span class="input-group-text col-xs-4 col-4 col-sm-4 col-form-label text-md-right"><i class="fas fa-user"></i></span>
                            </div>


                            <div class="col-xs-8 col-6 col-sm-6 col-md-6">
                                <input id="email" type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group-prepend">
                                <span class="input-group-text col-xs-4 col-4 col-sm-4 col-form-label text-md-right"><i class="fas fa-key"></i></span>
                            </div>

                            <div class="col-xs-8 col-6 col-sm-6 col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                      
                     

                        <div class="form-group row mb-0">
                            <div class="col-xs-4 col-8 col-sm-2 col-md-8 offset-xs-8 offset-4 offset-sm-10 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Your Password?')); ?>

                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <?php echo e(session('pesan')); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>