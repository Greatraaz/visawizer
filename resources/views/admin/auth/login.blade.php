<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Admin Login | {{ config('site.siteTitle') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/auth/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/auth/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/auth/fonts/flaticon/font/flaticon.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.webp') }}" type="image/x-icon">  
    <link href="https/fontsgoogleapiscom/3539057.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/auth/css/style.css') }}">
<style type="text/css">
.login-31 {
    background-image: url({{ asset('img/bg.png') }});
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
                            <form action="{{ route('admin-login') }}" method="POST">
                    			@csrf
                                <div class="form-group form-box">
                                    <input name="email" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" required autofocus>
		                            @error('email')
						                <div class="invalid-feedback text-white">{{ $message }}</div>
						            @enderror
                                </div>
                                <div class="form-group form-box">
                                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" autocomplete="current-password" required>
						            @error('password')
						                <div class="invalid-feedback text-white">{{ $message }}</div>
						            @enderror
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
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/visa_favicon.png') }}" alt="logo" class="logo" width="100">
                        </a>
                        <h3 class="animate-charcter">{{ config('site.siteTitle') }}</h3>
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
