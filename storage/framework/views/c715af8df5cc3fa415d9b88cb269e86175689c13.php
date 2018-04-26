<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <h2 class="text-primary">Dashboard</h2></div>
                <div class="card-body justify-content-center">
                    <h1 class="text-info text-center">The Books you are Borrowing</h1>
                    <hr class="bg-light" width="60%" align="center">
                    <?php if($borrowLogs->count() == 0): ?>
                       <h5 class="text-danger text-center">No Books Borrowed</h5>
                    <?php else: ?>
                    <div class="row">
                        <div class="col col-lg-2">
    
                        </div>
                        <div class="col col col-lg-8">
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"> Book Name</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $borrowLogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th> <?php echo e($key+1); ?> </th>
                                        <th> <?php echo e($log->book->title); ?> </th>
                                        <th> 
                                        <form class="form-inline js-confirm" action=" <?php echo e(route('member.books.return', $log->book->id)); ?> " method="post" data-confirm="Apakah anda Yakin ingin mengembalikan buku <?php echo e($log->book->title); ?>? ">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>

                                        <button type="submit" class="btn btn-warning"> Return's Book</button>
                                        </form>
                                        </th>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col col col-lg-2">
    
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>