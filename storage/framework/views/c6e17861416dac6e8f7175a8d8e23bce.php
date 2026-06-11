<!DOCTYPE html>
<html lang="en">
    <?php echo $__env->make('admin.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body data-sidebar="dark">
	<!-- Begin page -->
    <div id="layout-wrapper">
	    <?php echo $__env->make('admin.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	    <?php echo $__env->make('admin.partials.left-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-content">    
	        <?php echo $__env->yieldContent('content'); ?>
	        <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <?php echo $__env->make('admin.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH F:\xampp\htdocs\visawizer\resources\views/layouts/admin.blade.php ENDPATH**/ ?>