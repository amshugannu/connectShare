

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="dashboard">
    
    <?php if(auth()->guard()->check()): ?>
        <h2>Welcome, <?php echo e(Auth::user()->name); ?></h2>
    <?php else: ?>
        <h2>Welcome, Guest</h2>
    <?php endif; ?>

    <p>Manage your shared resources here.</p>

    <?php if(session('success')): ?>
        <div id="flash-message" class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="resource-list">
        <?php if($resources->isEmpty()): ?>
            <p>You have no shared resources yet. Start by sharing a resource!</p>
        <?php else: ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $resources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($resource->title); ?></td>
                        <td><?php echo e($resource->description); ?></td>
                        <td>
                            <a href="<?php echo e(route('resource.edit', $resource->id)); ?>" class="btn btn-warning">Edit</a>
                            
                            
                            <a href="<?php echo e(route('resource.collaborate', $resource->id)); ?>" class="btn btn-info">Collaborate</a>

                            
                            <form action="<?php echo e(route('resource.destroy', $resource->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this resource?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const flashMessage = document.getElementById('flash-message');
        
        if (flashMessage) {
            setTimeout(function() {
                flashMessage.classList.add('hidden'); // fade-out class
                setTimeout(function() {
                    flashMessage.style.display = 'none';
                }, 400);
            }, 3000); // show for 3 seconds
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\91779\my-project\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>