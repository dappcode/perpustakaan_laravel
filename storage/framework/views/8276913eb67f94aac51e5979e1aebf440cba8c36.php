<form action="<?php echo e($delete_url); ?>" class="float-right" method="post" data_confirm="<?php echo e($confirm_message); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
<div class="float-right">
    <a class="btn btn-primary" href="<?php echo e($detail_url); ?>"> <i class="fas fa-eye"></i> Detail </a>
    <a class="btn btn-warning" href="<?php echo e($edit_url); ?>"><i class="fas fa-edit"></i> Edit</a>

    
    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
</div>
</form>
