<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('profile')); ?>">Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header"> Edit Profile </div>
                <div class="card-body">
                    <form class="form-horizontal" action=" <?php echo e(route('profile.update')); ?> " method="post">
                        <?php echo csrf_field(); ?>
                        
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" id="name" name="name" value=" <?php echo e(auth()->user()->name); ?> "  autofocus>
                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong> <?php echo e($errors->first('name')); ?> </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Alamat Email :</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" id="email" name="email" value=" <?php echo e(auth()->user()->email); ?> ">
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong> <?php echo e($errors->first('email')); ?> </strong>
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