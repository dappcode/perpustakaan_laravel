<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('authors.index')); ?>">Authors</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Author</li>
                    
                </ol>
            </nav>
            <div class="card">
                <div class="card-header"> Add Author 
                </div>

                <div class="card-body">
                    <form class="form-horizontal" action=" <?php echo e(route('authors.store')); ?> " method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('authors._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>