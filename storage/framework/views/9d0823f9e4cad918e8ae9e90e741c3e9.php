<!doctype html>
<html lang="en">
    <?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<body>
	    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	    <?php echo $__env->yieldContent('content'); ?>
	    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
</html>
<?php /**PATH F:\xampp\htdocs\visawizer\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>