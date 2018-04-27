<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header row"> 
                    <div class="col-3">
                        <h2 class="float-left"> Profile </h2>  
                    </div>
                </div>
                <div class="card-body">
                    <div class="col">
                      <table class="table">
                          <tbody>
                                <tr>
                                    <th class="text-muted"> Nama</th>
                                    <td> <?php echo e(auth()->user()->name); ?>  </td>
                                </tr>
                                <tr>
                                    <th class="text-muted"> Email </th>
                                    <td> <?php echo e(auth()->user()->email); ?>  </td>
                                </tr>
                          </tbody>
                      </table>
                      <a href=" <?php echo e(route('profile.edit')); ?> " class="btn btn-warning float-right"> Edit </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>