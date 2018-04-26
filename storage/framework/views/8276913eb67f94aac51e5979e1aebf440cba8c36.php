
<div class="float-right">
    <a class="btn btn-primary" href="<?php echo e($detail_url); ?>"> <i class="fas fa-eye"></i> Detail </a>
    <a class="btn btn-warning" href="<?php echo e($edit_url); ?>"><i class="fas fa-edit"></i> Edit</a>
    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
    
</div>

<?php echo $__env->make('datatable._modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>