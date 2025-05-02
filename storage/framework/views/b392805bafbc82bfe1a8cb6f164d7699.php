


<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="home">
    <h1>Welcome to ConnectShare</h1>
    <p>Seamless resource sharing for individuals and organizations.</p>
    <a href="<?php echo e(route('explore')); ?>" class="btn">Explore Resources</a>
    <a href="<?php echo e(route('share')); ?>" class="btn">Share a Resource</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\91779\my-project\resources\views/pages/home.blade.php ENDPATH**/ ?>