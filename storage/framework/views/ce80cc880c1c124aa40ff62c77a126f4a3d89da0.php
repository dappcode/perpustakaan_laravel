<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="detail" style="padding: 50px 0 0 0">
            <div class="card text-center">
                <div class="card-header">
                    <h1 class="text-center" style="padding: 30px 0 0 0;"><?php echo e($book->title); ?> Books</h1>
                </div>
                <div class="card-body">
                <?php if($book->cover): ?>
                <img src="<?php echo e(asset('cover/'.$book->cover)); ?>" class="card-img-top" alt="<?php echo e($book->title); ?> image" height="500px">
                <?php else: ?>
                        <img src="/cover/default-image.png"  alt="Dont Have a Image">   
                <?php endif; ?>
                    <h5 class="card-title"> 
                        <?php echo e($book->author->name); ?>

                    </h5>
                    <p class="card-text"> Amounts of book : <?php echo e($book->amount); ?> </p>
                </div>
                <div class="card-footer text-muted">
                    <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger" type="submit"> Deleted </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>