



<?php $__env->startSection('title', 'Collaborate on Resource'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2 class="mb-3">Collaborate on: <?php echo e($resource->title); ?></h2>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Resource Details</h5>
            <p><strong>Description:</strong> <?php echo e($resource->description ?? 'No description available.'); ?></p>
            <p><strong>Uploaded By:</strong> <?php echo e($resource->user->name ?? 'Anonymous'); ?></p>
            <a href="<?php echo e(asset('storage/' . $resource->file_path)); ?>" class="btn btn-primary" target="_blank">View Resource</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Send a Collaboration Request</h5>

            <form action="#" method="POST">
                <?php echo csrf_field(); ?>
                

                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required placeholder="E.g., I'd love to work together on improving this resource..."></textarea>
                </div>

                <button type="submit" class="btn btn-success">Send Request</button>
                <a href="<?php echo e(route('explore')); ?>" class="btn btn-secondary">Back to Explore</a>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\91779\my-project\resources\views/pages/collaborate.blade.php ENDPATH**/ ?>