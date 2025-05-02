<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectShare</title>
    
    
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

    
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>

<nav class="navbar">
    <div class="logo">ConnectShare</div>
    <ul class="nav-links">
        <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Home</a></li>
        <li><a href="<?php echo e(route('explore')); ?>" class="<?php echo e(request()->routeIs('explore') ? 'active' : ''); ?>">Explore</a></li>
        <li><a href="<?php echo e(route('share')); ?>" class="<?php echo e(request()->routeIs('share') ? 'active' : ''); ?>">Share Resource</a></li>

        
        <?php if(auth()->guard()->check()): ?>
            <li><a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">Dashboard</a></li>
        <?php endif; ?>

        
        <?php if(auth()->guard()->guest()): ?>
            <li><a href="<?php echo e(route('login')); ?>" class="<?php echo e(request()->routeIs('login') ? 'active' : ''); ?>">Login</a></li>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn">Logout</button>
            </form>
        <?php endif; ?>
    </ul>
</nav>


<?php if(session('status')): ?>
    <div id="flash-message" class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<div class="content">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<footer class="footer">
    <p>made by k22kg class group</p>
</footer>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const flashMessage = document.getElementById('flash-message');
        
        if (flashMessage) {
            setTimeout(function() {
                flashMessage.style.transition = "opacity 1s"; // Smooth transition for fade-out effect
                flashMessage.style.opacity = '0'; // Fade out effect
                setTimeout(function() {
                    flashMessage.style.display = 'none'; // Remove the element after fade-out
                }, 1000); // Wait for the fade-out transition to finish
            }, 3000); // 3 seconds delay
        }
    });
</script>

</body>
</html>
<?php /**PATH C:\Users\91779\my-project\resources\views/layouts/app.blade.php ENDPATH**/ ?>