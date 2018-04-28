<div class="modal modal-danger fade in" id="exampleModal" >
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-danger text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data 
                    
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are You Sure to Delete ?
            </div>
            <div class="modal-footer">
                <form action="<?php echo e($delete_url); ?>" class="float-right" method="post" data-confirm="<?php echo e($confirm_message); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Cancel</button>
                    <button type="submit" class="btn btn-warning"><i class="fas fa-trash-alt"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>