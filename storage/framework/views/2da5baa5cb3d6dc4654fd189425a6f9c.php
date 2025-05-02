

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/explore.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="explore">
    <h2>Explore Resources</h2>
    <div class="resource-grid">
        <?php $__currentLoopData = $resources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="resource-card">
                <h3><?php echo e($resource->title); ?></h3>
                <p><?php echo e($resource->description); ?></p>
                <a href="<?php echo e(route('resource.detail', $resource->id)); ?>" class="btn">View Details</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\91779\my-project\resources\views/pages/explore.blade.php ENDPATH**/ ?>