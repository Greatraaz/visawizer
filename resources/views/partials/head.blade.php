<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{{ $title ?? 'Study, Work, and Travel Across Australia | Discover endless opportunities in Australia' }}</title>

    <meta name="description" content="{{ $description ?? 'Australia Study is dedicated to supporting international students in reaching their academic and career goals in Australia. Our knowledgeable and friendly team provides tailored assistance throughout your journey — from visa applications and course selection to accommodation arrangements.' }}">
    <meta name="keywords" content="{{ $keywords ?? 'Study visa, Australia, international students' }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/visa_favicon.png') }}"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https/fonts.googleapis_com_4456470.html"/>
    <link rel="preconnect" href="https/fonts.gstatic_com_7536732.html" crossorigin/>
    <link href="https/fontsgoogleapiscom/721022.css" rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-pro/fontawesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/fancybox.css') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/vj.css') }}"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('css')
</head>