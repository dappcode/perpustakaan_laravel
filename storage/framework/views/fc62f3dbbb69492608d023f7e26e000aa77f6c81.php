<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('books.index')); ?>">Books</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Books</li>
                    
                </ol>
            </nav>
            <div class="card">
                <div class="card-header"> Add Books 
                </div>

                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="input-tab" data-toggle="tab" href="#input" role="tab" aria-controls="input" aria-selected="true"><i class="fas fa-pencil-alt"></i> Input</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false"><i class="fas fa-download"></i> Upload</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="input" role="tabpanel" aria-labelledby="input-tab">
                            <form class="form-horizontal" action=" <?php echo e(route('books.store')); ?> " method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
        
                                <div class="form-group row">
                                    <label for="text" class="col-sm-2 col-form-label">Book Title :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" id="title" name="title" placeholder="Input Book title..." value="<?php echo e(old('title')); ?>" autofocus>
                                        <?php if($errors->has('title')): ?>
                                            <span class="invalid-feedback">
                                                <strong> <?php echo e($errors->first('title')); ?> </strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="text" class="col-sm-2 col-form-label">Author Name :</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select form-control js-selectize <?php echo e($errors->has('amount') ? ' is-invalid' : ''); ?>" name="author_id" id="inputGroupSelect01">
                                        <option selected>Choose Authors...</option>
                                        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value=" <?php echo e($author->id); ?>"> <?php echo e($author->name); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                        </select>
                                        <?php if($errors->has('author_id')): ?>
                                            <span class="invalid-feedback">
                                                <strong> <?php echo e($errors->first('author_id')); ?> </strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="text" class="col-sm-2 col-form-label">Amounts of Books :</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control<?php echo e($errors->has('amount') ? ' is-invalid' : ''); ?>" id="amount" name="amount" placeholder="Amounts of Books..." value="<?php echo e(old('amount')); ?>" autofocus>
                                        <?php if($errors->has('amount')): ?>
                                            <span class="invalid-feedback">
                                                <strong> <?php echo e($errors->first('amount')); ?> </strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="text" class="col-sm-2 col-form-label">Cover of Book :</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" id="cover" class="custom-file-input" id="cover" name="cover" value="<?php echo e(old('cover')); ?>" autofocus>
                                            <label class="custom-file-label" for="customFile">Choose image</label>
                                        </div>
                                        <?php if($errors->has('cover')): ?>
                                            <span class="invalid-feedback">
                                                <strong> <?php echo e($errors->first('cover')); ?> </strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-2">
                                        <button class="btn btn-primary float-right" type="submit">Save</button>
                                    </div>
                                </div>
        
                                
                            </form>
                        </div>
                        <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                            <form action=" <?php echo e(route('import.books.excel')); ?> " method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                
                                
                                <?php echo $__env->make('books._import', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>