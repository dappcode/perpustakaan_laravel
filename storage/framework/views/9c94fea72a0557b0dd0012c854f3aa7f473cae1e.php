<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header"> Change Password </div>
                <div class="card-body">
                    <form class="form-horizontal" action=" <?php echo e(route('password.update')); ?> " method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Your Password :</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" id="password" name="password" autofocus>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong> <?php echo e($errors->first('password')); ?> </strong>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">New Password:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control<?php echo e($errors->has('new_password') ? ' is-invalid' : ''); ?>" id="new_password" name="new_password" >

                                <?php if($errors->has('new_password')): ?>
                                    <span class="invalid-feedback">
                                        <strong> <?php echo e($errors->first('new_password')); ?> </strong>
                                    </span>
                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="new_password_confirmation" class="col-sm-2 col-form-label">New Password Confirmation :</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control<?php echo e($errors->has('new_password_confirmation') ? ' is-invalid' : ''); ?>" id="new_password_confirmation" name="new_password_confirmation" >

                                <?php if($errors->has('new_password_confirmation')): ?>
                                    <span class="invalid-feedback">
                                        <strong> <?php echo e($errors->first('new_password_confirmation')); ?> </strong>
                                    </span>
                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-2">
                                <button class="btn btn-primary float-right" type="submit">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>