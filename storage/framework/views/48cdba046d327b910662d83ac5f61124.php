<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Admin Login | <?php echo e(config('site.siteTitle')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/admin/auth/css/bootstrap.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/admin/auth/fonts/font-awesome/css/font-awesome.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/admin/auth/fonts/flaticon/font/flaticon.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.webp')); ?>" type="image/x-icon">  
    <link href="https/fontsgoogleapiscom/3539057.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/admin/auth/css/style.css')); ?>">
<style type="text/css">
.login-31 {
    background-image: url(<?php echo e(asset('img/bg.png')); ?>);
    background-size: cover;
    background-position: center;
}
</style>
</head>
<body id="top">
<div class="page_loader"></div>

<div class="login-31">
    <div class="container">
        <div class="col-md-12 pad-0">
            <div class="row login-box-9">
                <div class="col-lg-6 col-sm-12 col-pad-0 align-self-center">
                    <div class="login-inner-form">
                        <div class="details">
                            <h3>Sign Into Your Account</h3>
                            <form action="<?php echo e(route('admin-login')); ?>" method="POST">
                    			<?php echo csrf_field(); ?>
                                <div class="form-group form-box">
                                    <input name="email" type="email" value="<?php echo e(old('email')); ?>" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email Address" required autofocus>
		                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						                <div class="invalid-feedback text-white"><?php echo e($message); ?></div>
						            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group form-box">
                                    <input name="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" aria-label="Password" autocomplete="current-password" required>
						            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						                <div class="invalid-feedback text-white"><?php echo e($message); ?></div>
						            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-md btn-theme w-100">Login</button>
                                </div>
                            </form>
                            <p>All Rights Reserved | Made With <i class="fa fa-heart text-danger"></i> By Mirashka</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-pad-0 bg-img align-self-center">
                    <div class="inner">
                        <a href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(asset('assets/images/visa_favicon.png')); ?>" alt="logo" class="logo" width="100">
                        </a>
                        <h3 class="animate-charcter"><?php echo e(config('site.siteTitle')); ?></h3>
                        <p class="mb-0">Visawizeris your partner in creating transparent, responsible and culture-driven organizations.</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
<?php /**PATH F:\xampp\htdocs\visawizer\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>