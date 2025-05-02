










<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/upload.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Share a New Resource</h1>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    
    <form action="<?php echo e(route('resource.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label>Title:</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Description (optional):</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Upload File:</label>
        <input type="file" name="file" class="form-control" required>
    </div>

    <button type="submit" class="btn">Share Resource</button>
</form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\91779\my-project\resources\views/pages/share.blade.php ENDPATH**/ ?>