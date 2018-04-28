<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Authors</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header row"> 
                    <div class="col-6">
                        <h2 class="float-left"> Authors </h2>  
                    </div>
                    <div class="col-6">
                        <a class="btn btn-primary float-right" href="<?php echo e(route('authors.create')); ?>"><i class="fas fa-plus-circle"></i> Add Authors </a>
                    </div>                    
                </div>
                <div class="card-body">
                <?php echo $html->table([ 'class' => 'table-striped ']); ?>

                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $html->scripts(); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>