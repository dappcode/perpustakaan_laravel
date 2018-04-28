<?php $__env->startComponent('mail::message'); ?>
# Assalamualaikum <?php echo e($member->name); ?>


Admin telah mendaftarkan email anda (<?php echo e($member->email); ?>) ke Aplikasi Perpustakaan Online. untuk Login, silahkan kunjungi link berikut : 

<?php $__env->startComponent('mail::button', ['url' => url('login')]); ?>
Login
<?php echo $__env->renderComponent(); ?>

Login dengan email Anda dan password <strong> <?php echo e($password); ?> </strong>

Syukran, Jazakallahu khairan<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
