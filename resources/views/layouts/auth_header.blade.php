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
    <link href="{{ URL::asset('assets') }}/admin_css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets') }}/admin_css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets') }}/admin_css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="pb-0">
<div class="home-btn d-none d-sm-block"><a href="{{ __('/') }}" class="text-white"><i class="fas fa-home h2"></i></a></div>