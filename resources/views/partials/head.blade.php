<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-65KXEF6Q6C"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-65KXEF6Q6C');
    </script>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{{ $title ?? 'Ethics4Work' }}</title>

    <meta name="description" content="{{ $description ?? 'Ethics4Work' }}">
    <meta name="keywords" content="{{ $keywords ?? 'Ethics4Work' }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg') }}"/>

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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('css')
</head>