<head>    
    <meta charset="utf-8">
    <title>Dashboard | {{ config('site.siteTitle') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ config('site.siteTitle') }}" name="description">
    <meta content="{{ config('site.siteTitle') }}" name="author">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />
    <link href="{{ asset('assets/admin/libs/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" >
    <link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/admin/css/app.min.css') }}" id="app-style" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <link href="{{ asset('assets/admin/css/multistyle.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/admin/libs/@fullcalendar/core/main.min.css') }}" rel="stylesheet"  />
    <link href="{{ asset('assets/admin/libs/@fullcalendar/daygrid/main.min.css') }}" rel="stylesheet"  />
    <link href="{{ asset('assets/admin/libs/@fullcalendar/bootstrap/main.min.css') }}" rel="stylesheet"  />
    <link href="{{ asset('assets/admin/libs/@fullcalendar/timegrid/main.min.css') }}" rel="stylesheet"  />
    <link href="{{ asset('assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" >  
    <link href="{{ asset('assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/admin/css/vijay_custom.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/admin/css/raj_custom.css') }}" rel="stylesheet" >
    <script src="{{ asset('assets/admin/libs/jquery/jquery.min.js') }}"></script>
@stack('css')
</head>

