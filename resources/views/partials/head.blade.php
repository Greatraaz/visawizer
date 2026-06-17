<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QYY1211L1Q"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-QYY1211L1Q');
    </script>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{{ $title ?? 'Migration Agency Melbourne | Migration Support Services' }}</title>

    <meta name="description" content="{{ $description ?? 'Trusted Melbourne migration agency offering expert visa support for student, work, partner, PR, and business visas across Australia.' }}">
    <meta name="keywords" content="{{ $keywords ?? 'migration agency Melbourne, certified Melbourne migration agent, visa services Melbourne, Australia migration consultant, work visa Australia, business visa consultant, migration advice Melbourne, visa application assistance' }}">
    <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}">

    @if (!empty($ogTitle))
        <meta property="og:type" content="{{ $ogType ?? 'website' }}">
        <meta property="og:url" content="{{ $canonicalUrl ?? url()->current() }}">
        <meta property="og:title" content="{{ $ogTitle }}">
        <meta property="og:description" content="{{ $ogDescription ?? $description ?? '' }}">
        @if (!empty($ogImage))
            <meta property="og:image" content="{{ $ogImage }}">
        @endif
        <meta property="og:site_name" content="Visawizer">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $ogTitle }}">
        <meta name="twitter:description" content="{{ $ogDescription ?? $description ?? '' }}">
        @if (!empty($ogImage))
            <meta name="twitter:image" content="{{ $ogImage }}">
        @endif
    @endif

    @stack('head-meta')

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
    <style>
        .f-logos img {
            background: #fff;
            border-radius: 10px;
            width: 160px;
            margin: 0 10px 0px;
        }
        .marn{
            display: inline-block;background: #fff;border-radius: 8px;height: 133px;width: 160px;align-items: center;    transform: translateY(34px);margin-right: 10px;
        }
        .marn p{
            background: #3f4198;
            color: #fff;
            border-radius: 7px 7px 0 0;
            padding: 9px;
        }
        @media only screen and (max-width: 768px) {
            .f-logos img {
                border-radius: 5px;
                width: 150px;
                margin: 6px 4px 0px;
            }

            .marn{
                height: 126px;
                width: 150px;
                transform: translateY(48px);
                margin-right: 0px;
            }
            .marn p{
                margin-bottom: 0;
            }
        }
    </style>
</head>