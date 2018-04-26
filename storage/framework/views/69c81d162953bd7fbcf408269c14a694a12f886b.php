Klik link berikut untuk melakukan klik pada link berikut : 
<a href=" <?php echo e($link = url('auth/verify', $token). '?email=' . urlencode($user->email)); ?> "> <?php echo e($link); ?> </a>