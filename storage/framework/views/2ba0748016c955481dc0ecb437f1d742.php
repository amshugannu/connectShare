

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/resource_detail.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="resource-detail-card">
    <div class="resource-detail">
        <h2><?php echo e($resource->title); ?></h2>
        <p><?php echo e($resource->description); ?></p>
        
        <!-- If the resource file is an image, display it -->
        <?php if(in_array(pathinfo($resource->file_path, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])): ?>
            <img src="<?php echo e(asset('storage/' . $resource->file_path)); ?>" alt="<?php echo e($resource->title); ?>" class="resource-image">
        <?php else: ?>
            <!-- Display a generic file icon or something for non-image files -->
            <div class="file-icon">
                <i class="fas fa-file"></i> <!-- FontAwesome file icon -->
            </div>
        <?php endif; ?>

        <a href="<?php echo e(asset('storage/' . $resource->file_path)); ?>" target="_blank" class="btn">Download/View File</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\91779\my-project\resources\views/pages/resource_detail.blade.php ENDPATH**/ ?>