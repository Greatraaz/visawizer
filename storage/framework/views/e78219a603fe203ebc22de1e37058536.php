    <section class="section loader-section">
        <div class="loader">
            <img src="<?php echo e(asset('assets/admin/images/loader.gif')); ?>" alt="Loader">
        </div>
    </section>
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="<?php echo e(url('admin/dashboard')); ?>" class="logo logo-light" style="padding-top: 25px;">
                        <span class="logo-lg">
                            <img src="<?php echo e(asset('img/logo.svg')); ?>" style="width: 100%;background: #fff;object-fit: contain;padding: 15px 10px;border-radius: 10px;">
                        </span>
                    </a>
                </div>

            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="https://themesbrand.com/veltrix/layouts/assets/images/users/user-4.jpg"
                            alt="Header Avatar" style=" object-fit: contain;">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
<!--                         <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle me-1"></i> My Wallet</a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> Lock screen</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="<?php echo e(url('admin/logout')); ?>"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header><?php /**PATH F:\xampp\htdocs\visawizer\resources\views/admin/partials/topbar.blade.php ENDPATH**/ ?>