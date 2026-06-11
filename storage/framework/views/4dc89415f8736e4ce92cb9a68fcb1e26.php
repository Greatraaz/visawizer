<?php $__env->startSection('content'); ?>
<style type="text/css">
p.mb-0.mt-1 a {
    background: #eda117;
    border-radius: 50px;
    padding: 5px 15px;
}
</style>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Dashboard</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Welcome to <?php echo e(config('site.siteTitle')); ?> Dashboard</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">White Papers</h5>
                            <h4 class="fw-medium font-size-24"><?php echo e($papers); ?></h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="<?php echo e(url('admin/white-papers')); ?>">View White Paper</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Resources</h5>
                            <h4 class="fw-medium font-size-24"><?php echo e($resources); ?></h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="<?php echo e(url('admin/resources')); ?>">View Download Resources</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Webinars</h5>
                            <h4 class="fw-medium font-size-24"><?php echo e($webinars); ?></h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="<?php echo e(url('admin/webinars')); ?>">View Webinars</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Case Study</h5>
                            <h4 class="fw-medium font-size-24"><?php echo e($caseStudy); ?></h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="<?php echo e(url('admin/dashboard/case-study')); ?>">View Case Study</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Enquiries</h5>
                            <h4 class="fw-medium font-size-24"><?php echo e($enquiries); ?></h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="<?php echo e(url('admin/enquiries')); ?>">View Enquiries</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Testimonials</h5>
                            <h4 class="fw-medium font-size-24"><?php echo e($testimonials); ?></h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="<?php echo e(url('admin/testimonials')); ?>">View Testimonials</a></p>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>

    </div> <!-- container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\visawizer\resources\views/admin/index.blade.php ENDPATH**/ ?>