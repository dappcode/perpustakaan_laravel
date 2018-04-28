<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('members.index')); ?>">Members</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($member->name); ?></li>
                    
                </ol>
            </nav>
            <div class="card">
                <div class="card-header text-info"> <?php echo e($member->name); ?> 
                </div>

                <div class="card-body">
                   <h3 clas="text-header">Buku yang sedang di Pinjam:</h3>
                   <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Books Name</th>
                            <th scope="col">Tanggal Peminjaman</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $member->borrowLogs()->borrowed()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th scope="row"> <?php echo e($key+1); ?> </th>
                                <td> <?php echo e($log->book->title); ?> </td>
                                <td> <?php echo e($log->created_at->format('D, d/M/Y')); ?> </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="3" class="alert alert-warning text-center">No Data.</td>
                            </tr>

                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="card-body">
                    <h3 clas="text-header">Buku yang sudah di Kembalikan:</h3>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Books Name</th>
                            <th scope="col">Tanggal Pengembalian</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $member->borrowLogs()->returned()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th scope="row"> <?php echo e($key+1); ?> </th>
                                <td> <?php echo e($log->book->title); ?> </td>
                                <td> <?php echo e($log->updated_at->format('D, d/M/Y')); ?> </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="3" class="alert alert-warning text-center">No Data.</td>
                            </tr>

                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>