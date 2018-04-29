<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('books.index')); ?>">Books</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Export Book</li>
                    
                </ol>
            </nav>
            <div class="card">
                <div class="card-header"> Export Book </div>

                <div class="card-body">
                    <form class="form-horizontal" action=" <?php echo e(route('export.books.post')); ?> " method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="text" class="col-sm-2 col-form-label">Author Name :</label>
                            <div class="col-sm-10">
                                <select class="custom-select form-control js-selectize <?php echo e($errors->has('author_id') ? ' is-invalid' : ''); ?>" name="author_id[]" multiple placeholder="Choose Authors..." autofocus>
                                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value=" <?php echo e($key); ?>"> <?php echo e($author); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                </select>
                                <?php if($errors->has('author_id')): ?>
                                    <span class="invalid-feedback">
                                        <strong> <?php echo e($errors->first('author_id')); ?> </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-2">
                                <button class="btn btn-primary float-right" type="submit"><i class="fas fa-upload"></i> Export</button>
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