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
    <link rel="stylesheet" href="{{ URL::asset('assets') }}/plugins/chartist/css/chartist.min.css">
    <link href="{{ URL::asset('assets') }}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets') }}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets') }}/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets') }}/plugins/summernote/summernote-bs4.css">
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('assets') }}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets') }}/admin_css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets') }}/admin_css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets') }}/admin_css/style.css" rel="stylesheet" type="text/css">
</head>
<body><!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid"><!-- Logo container-->
            <div class="logo"><a href="{{ route('dashboard') }}" class="logo"><img src="{{ URL::asset('assets/images/unpeep-plain-logo.png') }}" alt=""
                                                                     class="logo-small"> <img
                            src="{{ URL::asset('assets/images/unpeep-plain-logo.png') }}" alt="" class="logo-large"></a></div>
            <!-- End Logo container-->
            <div class="menu-extras topbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <li class="dropdown notification-list d-none d-sm-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0"><input type="text" class="form-control" placeholder="Search..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li><!-- language-->
                    <li class="dropdown notification-list d-none d-md-block"><a
                                class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false"><img
                                    src="assets/images/flags/us_flag.jpg" class="mr-2" height="12" alt=""> English <span
                                    class="mdi mdi-chevron-down"></span></a>
                        <div class="dropdown-menu dropdown-menu-right language-switch"><a class="dropdown-item"
                                                                                          href="#"><img
                                        src="assets/images/flags/germany_flag.jpg" alt=""
                                        height="16"><span>German </span></a><a class="dropdown-item" href="#"><img
                                        src="assets/images/flags/italy_flag.jpg" alt=""
                                        height="16"><span>Italian </span></a><a class="dropdown-item" href="#"><img
                                        src="assets/images/flags/french_flag.jpg" alt=""
                                        height="16"><span>French </span></a><a class="dropdown-item" href="#"><img
                                        src="assets/images/flags/spain_flag.jpg" alt=""
                                        height="16"><span>Spanish </span></a><a class="dropdown-item" href="#"><img
                                        src="assets/images/flags/russia_flag.jpg" alt=""
                                        height="16"><span>Russian</span></a></div>
                    </li><!-- full screen -->
                    <li class="dropdown notification-list d-none d-md-block"><a class="nav-link" href="#"
                                                                                id="btn-fullscreen"><i
                                    class="mdi mdi-fullscreen noti-icon"></i></a></li><!-- notification -->
                    <li class="dropdown notification-list"><a class="nav-link dropdown-toggle arrow-none"
                                                              data-toggle="dropdown" href="#" role="button"
                                                              aria-haspopup="false" aria-expanded="false"><i
                                    class="mdi mdi-bell-outline noti-icon"></i> <span
                                    class="badge badge-pill badge-danger noti-icon-badge">3</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg"><!-- item--><h6
                                    class="dropdown-item-text">Notifications (258)</h6>
                            <div class="slimscroll notification-item-list"><!-- item--> <a href="javascript:void(0);"
                                                                                           class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                    </p></a><!-- item--> <a href="javascript:void(0);"
                                                            class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message-text-outline"></i>
                                    </div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span>
                                    </p></a><!-- item--> <a href="javascript:void(0);"
                                                            class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span>
                                    </p></a><!-- item--> <a href="javascript:void(0);"
                                                            class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                    </p></a><!-- item--> <a href="javascript:void(0);"
                                                            class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i>
                                    </div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span>
                                    </p></a></div><!-- All--> <a href="javascript:void(0);"
                                                                 class="dropdown-item text-center text-primary">View all
                                <i class="fi-arrow-right"></i></a></div>
                    </li>
                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list"><a class="dropdown-toggle nav-link arrow-none nav-user"
                                                                   data-toggle="dropdown" href="#" role="button"
                                                                   aria-haspopup="false" aria-expanded="false"><img
                                        src="{{ URL::asset('assets') }}/images/users/user-4.jpg" alt="user" class="rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown"><!-- item--> <a
                                        class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i>
                                    Profile</a> <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i>
                                    My Wallet</a> <a class="dropdown-item d-block" href="#"><span
                                            class="badge badge-success float-right">11</span><i
                                            class="mdi mdi-settings m-r-5"></i> Settings</a> <a class="dropdown-item"
                                                                                                href="#"><i
                                            class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger"  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-power text-danger"></i> {{ __('Logout') }}
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        </div>
                    </li>
                    <li class="menu-item list-inline-item"><!-- Mobile menu toggle--> <a class="navbar-toggle nav-link">
                            <div class="lines"><span></span> <span></span> <span></span></div>
                        </a><!-- End mobile menu toggle--></li>
                </ul>
            </div><!-- end menu-extras -->
            <div class="clearfix"></div>
        </div><!-- end container --></div><!-- end topbar-main --><!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation"><!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu"><a href="{{ route('dashboard') }}"><i class="ti-home"></i>Dashboard</a></li>
                    <li class="has-submenu"><a href="{{ route('blog-posts') }}"><i class="ti-pencil"></i>Blog Posts</a></li>
                </ul><!-- End navigation menu --></div><!-- end #navigation --></div><!-- end container --></div>
    <!-- end navbar-custom --></header><!-- End Navigation Bar--><!-- page wrapper start -->