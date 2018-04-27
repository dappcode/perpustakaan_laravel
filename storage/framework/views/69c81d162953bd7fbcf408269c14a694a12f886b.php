<?php $__env->startComponent('mail::message'); ?>
# Halo <?php echo e($user->name); ?>


Klik button untuk verifikasi acount anda!

<?php $__env->startComponent('mail::button', ['url' => url('auth/verify', $user->verification_token) . '?email=' . urlencode($user->email)]); ?>

Verifikasi
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
