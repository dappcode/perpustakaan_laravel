<div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Author Name :</label>
    <div class="col-sm-10">
        <input type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" id="name" name="name" placeholder="Input Author Name..." value="<?php if(Route::is('authors.edit')): ?><?php echo e($author->name); ?> <?php else: ?> <?php echo e(old('name')); ?> <?php endif; ?>" autofocus>
        <?php if($errors->has('name')): ?>
            <span class="invalid-feedback">
                <strong> <?php echo e($errors->first('name')); ?> </strong>
            </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group">
    <div class="col-md-12 col-md-offset-2">
        <button class="btn btn-primary float-right" type="submit">Save</button>
    </div>
</div>