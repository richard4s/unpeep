<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125032466-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125032466-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unpeep Blog - @yield('title')</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/unpeep_logo.png') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('assets/images/unpeep_logo.png') }}" />

    <meta name="author" content="The Unpeep Team" />
    <meta name="description" content="Job board platform for photographers, Share creative designs and Express yourself!" />
    <meta name="keywords" content="Photographer, photography, blockchain, photography startup, events, event organizers, lagos, nigeria, events organizers in lagos, photographers in lagos, stock, photos, gallery, studio, job platform, jobs, gigs, blockchain startup, ethereum blockchain" />
    <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Abel&amp;Open+Sans" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets') }}/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets') }}/css/font-awesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets') }}/css/magnific-popup/magnific-popup.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets') }}/css/ionicons.min.css">
    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets') }}/css/owl-carousel/owl.carousel.css" />
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets') }}/css/animate.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets') }}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets') }}/css/responsive.css">

</head>

<body>
<!-- loading -->
<div id="loading" class="pink-bg">
    <div id="loading-center">
        <div id="loader"></div>
    </div>
</div>
<!-- loading End -->
<!-- Header -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <a href="{{ __('/') }}"><img class="img-fluid" style="height: 85px !important;" src="{{ URL::asset('assets/images/unpeep-logo.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-md-10">
                <nav class="w-100 justify-content-end"> <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>
                    <ul class="menu text-right">
                        <li><a href="{{ __('/') }}">HOME</a></li>

                        <li><a class="active" href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<!-- Banner -->