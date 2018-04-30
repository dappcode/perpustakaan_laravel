<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header row"> 
                    <div class="col-6">
                        <h2 class="float-left"> Books List </h2>  
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