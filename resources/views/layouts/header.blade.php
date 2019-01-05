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

    <title>{{ config('app.name', 'Unpeep') }} &#8211; Just Re:imagine Creativity</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('assets/images/logox.png') }}" />

    <meta name="author" content="The Unpeep Team" />
    <meta name="description" content="Job board platform for photographers, Share creative designs and Express yourself!" />
    <meta name="keywords" content="Photographer, photography, blockchain, photography startup, events, event organizers, lagos, nigeria, events organizers in lagos, photographers in lagos,
                                    stock, photos, gallery, studio, job platform, jobs, gigs, blockchain startup, ethereum blockchain" />
    <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />


    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />

    <link rel='stylesheet' id='contact-form-7-css' href='{{ URL::asset('assets/wp-content/plugins/contact-form-7/includes/css/stylesaead.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='{{ URL::asset('assets/wp-content/plugins/woocommerce/assets/css/woocommerce-layout4c8b.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='{{ URL::asset('assets/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen4c8b.css') }}' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='{{ URL::asset('assets/wp-content/plugins/woocommerce/assets/css/woocommerce4c8b.css') }}' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='bootstrap-css' href='{{ URL::asset('assets/wp-content/themes/surge/assets/css/bootstrap.min55fe.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='{{ URL::asset('assets/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min4245.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='fullPage-css' href='{{ URL::asset('assets/wp-content/themes/surge/assets/css/jquery.fullPage55fe.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='surge-main-style-css' href='{{ URL::asset('assets/wp-content/themes/surge/assets/css/main-style55fe.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='surge-style-css' href='{{ URL::asset('assets/wp-content/themes/surge/style55fe.css') }}' type='text/css' media='all' />
    <style id='surge-style-inline-css' type='text/css'>
        .page-headline,
        .blog-headline {
            color: #ffffff;
        }

        .vc_custom_heading,
        .effect-artist-title {
            color: #ffffff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        .color-scheme-1 h1,
        .color-scheme-1 h2,
        .color-scheme-1 h3,
        .color-scheme-1 h4,
        .color-scheme-1 h5,
        .color-scheme-1 h6,
        .color-scheme-1 p,
        .surge-light h1,
        .surge-light h2,
        .surge-light h3,
        .surge-light h4,
        .surge-light h5,
        .surge-light h6,
        .surge-light p {
            color: #ffffff;
        }

        .dotted-bg-pattern {
            background: linear-gradient(90deg, #071324 38px, rgba(255, 255, 255, 0) 1%) 50%, linear-gradient(#071324 38px, rgba(255, 255, 255, 0) 1%) 50%, rgba(10, 35, 62, 0.97);
            background-size: 40px 40px;
        }

        .surge-light .dotted-bg-pattern {
            background: linear-gradient(90deg, #071324 38px, rgba(255, 255, 255, 0) 1%) 50%, linear-gradient( #071324 38px, rgba(255, 255, 255, 0) 1%) 50%, rgba(0, 0, 0, .16);
            background-size: 40px 40px;
        }

        .preloader,
        body,
        html body.custom-background,
        .color-scheme-1 .preloader,
        body.color-scheme-1,
        html body.color-scheme-1.custom-background,
        .surge-light .preloader,
        body.surge-light,
        html body.surge-light.custom-background {
            background-color: #071324;
            color: #ffffff;
        }

        .spinner:before,
        .color-scheme-1 .spinner:before,
        .surge-light .spinner:before {
            border: 2px solid #cb3742;
            border-top-color: #071324;
        }


        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .surge-light h1,
        .surge-light h2,
        .surge-light h3,
        .surge-light h4,
        .surge-light h5,
        .surge-light h6 {
            color: #ffffff;
        }

        a:link,
        a:visited {
            color: #ffffff;
        }

        button,
        input[type='button'],
        input[type='reset'],
        input[type='submit'],
        body.woocommerce div.product form.cart .button,
        body.color-scheme-1.woocommerce div.product form.cart .button,
        .effect-artist-title h2,
        .scrollup,
        .album-cover-single h2,
        .music-side-bar .bar-single-text,
        .album-cover-title h2,
        .music-side-bar .bar-text-big:after,
        .schedule-image-box h3,
        .wpcf7 input[type=submit],
        body.woocommerce a.button.add_to_cart_button.product_type_simple:after,
        body .woocommerce a.button.add_to_cart_button.product_type_simple:after,
        body .woocommerce #respond input#submit.alt,
        body .woocommerce a.button.alt,
        body .woocommerce button.button.alt,
        body .woocommerce input.button.alt .effect-artist-title h2,
        .schedule-table .schedule-time,
        .home-head-subtag .home-about h2,
        .surge-light .schedule-image-box h3,
        body .mini-cart .cart-button .mini-cart-icon:after,
        .single-post .comment .comment-reply-link,
        .page .comment .comment-reply-link,
        .color-scheme-1 .menu-toogle-wrapper.close span,
        .color-scheme-2 .menu-toogle-wrapper.close span,
        body .radio-post-title h2,
        .mini-cart .cart-button .mini-cart-icon:after {
            background-color: #cb3742;

        }

        body .woocommerce-info {
            border-top: 1px solid #cb3742;
        }

        .schedule-head {
            border-bottom: 1px solid #cb3742;
        }

        .artist-head-title {
            border-bottom: 2px solid #cb3742;
        }

        .surge-light .schedule-table .schedule-time {
            background: #cb3742;
            border-left: 5px solid #cb3742;

        }

        .music-box-play-list li.playing a,
        body.woocommerce ul.products li.product .price,
        body.color-scheme-1 .woocommerce ul.products li.product .price,
        body.woocommerce div.product p.price,
        body.color-scheme-1.woocommerce div.product p.price,
        body.woocommerce div.product span.price,
        body.color-scheme-1.woocommerce div.product span.price,
        .color-scheme-1 .full-page-menu #primary-menu .dropdown-toggle,
        .color-scheme-2 .full-page-menu #primary-menu .dropdown-toggle,
        .projnav li h2,
        blockquote.quetext::after,
        .music-side-bar .bar-text-big,
        .color-scheme-1 .menu-list li a:link,
        .color-scheme-1 .menu-list li a:active,
        .color-scheme-1 .menu-list li a:visited,
        .color-scheme-2 .menu-list li a:link,
        .color-scheme-2 .menu-list li a:active,
        .color-scheme-2 .menu-list li a:visited,
        .projnav li a {
            color: #cb3742;
        }

        .sidebar .widget-title,
        .wpb_widgetised_column .widget-title {
            border-left: 5px solid #cb3742;
        }

        blockquote.side-line {
            border-left: 4px solid #cb3742;
        }

        .surge-dark .entry-meta {
            border-left: 4px solid #cb3742;
        }

        .audiojs .pause:hover:before,
        .audiojs .play:hover:before {
            color: #cb3742;
            text-shadow: 0 -1px 0 #000, 0 0 30px #cb3742;
        ,
        0 0 50px #cb3742;
        }

        .home-red-button .vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern {
            background-color: #cb3742;
            border-color: #cb3742;
        }

        .schedule-table .schedule-desc,
        .schedule-table .schedule-desc,
        .fs-ask-us .ask-us-content h2 {
            background-color: #cb3742;
            box-shadow: 0.45em 0 0 #cb3742, -0.45em 0 0 #cb3742;

        }

        select,
        textarea,
        input[type='text'],
        input[type='password'],
        input[type='datetime'],
        input[type='datetime-local'],
        input[type='date'],
        input[type='month'],
        input[type='time'],
        input[type='week'],
        input[type='number'],
        input[type='email'],
        input[type='url'],
        input[type='tel'],
        input[type='color'] .comment-form input[type='text'],
        #add_payment_method #payment,
        .woocommerce-cart #payment,
        .woocommerce-checkout #payment,
        .woocommerce table.shop_table,
        .single-post .entry-footer,
        .single-post .comment>div,
        .page .comment>div,
        footer.site-footer,
        .color-scheme-1 footer.site-footer,
        .surge-light footer.site-footer {
            background: #08182b;
        }

        .site-footer .site-info {
            color: #ffffff;
        }

        .navigation .sub-menu a,
        .download-btn .vc_btn3 {
            font-family: Montserrat, sans-serif;
        }

        .copyright,
        .header-tilte {
            background-color: #08182b;
        }

        @media only screen and (max-width: 768px) {
            h1 {
                font-size: 28.8px;
            }

            h2 {
                font-size: 25.2px;
            }

            .single-page-header {
                font-size: 42px;
            }

            h3 {
                font-size: 16.2px;
            }

            h4 {
                font-size: 14.4px;
            }

            h5 {
                font-size: 13.5px;
            }
        }

        @media only screen and (max-width: 480px) {
            h1 {
                font-size: 25.6px;
            }

            h2 {
                font-size: 22.4px;
            }

            .single-page-header {
                font-size: 33.6px;
            }

            h3 {
                font-size: 14.4px;
            }

            h4 {
                font-size: 12.8px;
            }

            h5 {
                font-size: 12px;
            }
        }
    </style>
    <link rel='stylesheet' id='google-fonts-css' href='http://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700,900%7CRaleway;subset=latin-ex%7CMontserrat:300i,400,400i,600,700%7CLibre+Baskerville:400i%7CRoboto:300,400,700' type='text/css' media='all'
    />
    <link rel='stylesheet' id='dashicons-css' href='{{ URL::asset('assets/wp-includes/css/dashicons.min55fe.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='surge-woocommerce-style-css' href='{{ URL::asset('assets/wp-content/themes/surge/woocommerce55fe.css') }}' type='text/css' media='all' />
    <style id='surge-woocommerce-style-inline-css' type='text/css'>
        @font-face {
            font-family: "star";
            src: url("{{ URL::asset('assets/fonts/star.eot') }}");
            src: url("{{ URL::asset('assets/fonts/stard41d.eot') }}") format("embedded-opentype"),
            url("{{ URL::asset('assets/fonts/star.woff') }}") format("woff"),
            url("{{ URL::asset('assets/fonts/star.ttf') }}") format("truetype"),
            url("{{ URL::asset('assets/fonts/star.svg') }}") format("svg");
            font-weight: normal;
            font-style: normal;
        }
    </style>
    <link rel='stylesheet' id='js_composer_front-css' href='{{ URL::asset('assets/wp-content/plugins/js_composer/assets/css/js_composer.min4245.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='kirki-styles-global-css' href='{{ URL::asset('assets/wp-content/plugins/kirki/assets/css/kirki-styles4877.css') }}' type='text/css' media='all' />
    <style id='kirki-styles-global-inline-css' type='text/css'>
        body {
            color: #ffffff;
        }

        body.surge-light {
            color: #000000;
        }

        body.color-scheme-1 {
            color: #777171;
        }

        body.color-scheme-2 {
            color: #777171;
        }

        .copyright {
            color: #ffffff;
        }

        .copyright a {
            color: #ffffff;
        }

        .copyright a:hover {
            color: #cb2342;
        }

        body,
        input,
        select,
        textarea,
        p {
            font-family: Roboto, Helvetica, Arial, sans-serif;
        }

        .surge-light body,
        .surge-light input,
        .surge-light select,
        .surge-light textarea,
        .surge-light p {
            font-family: Montserrat, Helvetica, Arial, sans-serif;
        }

        .color-scheme-1 body,
        .color-scheme-1 input,
        .color-scheme-1 select,
        .color-scheme-1 textarea,
        .color-scheme-1 p {
            font-family: Oswald, Helvetica, Arial, sans-serif;
        }

        .color-scheme-2 body,
        .color-scheme-2 input,
        .color-scheme-2 select,
        .color-scheme-2 textarea,
        .color-scheme-2 p {
            font-family: Oswald, Helvetica, Arial, sans-serif;
        }

        body,
        [class*="col-"],
        .footer .menu li {
            font-size: 15px;
        }

        .surge-light h1,
        .surge-light h2,
        .surge-light h3,
        .surge-light h4,
        .surge-light h5 {
            font-family: Montserrat, Helvetica, Arial, sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: Oswald, Helvetica, Arial, sans-serif;
        }

        .color-scheme-2 h1,
        .color-scheme-2 h2,
        .color-scheme-2 h3,
        .color-scheme-2 h4,
        .color-scheme-2 h5 {
            font-family: Oswald, Helvetica, Arial, sans-serif;
        }

        h1 {
            font-size: 32px;
        }

        h2 {
            font-size: 28px;
        }

        h3 {
            font-size: 18px;
        }

        h4 {
            font-size: 16px;
        }

        h5 {
            font-size: 15px;
        }

        h6 {
            font-size: 12px;
        }
    </style>
    <script type='text/javascript' src='{{ URL::asset('assets/wp-includes/js/jquery/jqueryb8ff.js') }}'></script>
    <script type='text/javascript' src='{{ URL::asset('assets/wp-includes/js/jquery/jquery-migrate.min330a.js') }}'></script>
    <script type='text/javascript' src='{{ URL::asset('assets/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min4c8b.js') }}'></script>
    <script type='text/javascript' src='{{ URL::asset('assets/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart4245.js') }}'></script>
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1525105880420 {
            background-image: url({{ URL::asset('assets/wp-content/uploads/2018/04/main-hero50fa.jpg') }}) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }



        .vc_custom_1524621452525 {
            padding-top: 70px !important;
            padding-right: 50px !important;
            padding-bottom: 70px !important;
            padding-left: 50px !important;
            background-color: #06172b !important;
        }

        .vc_custom_1524621480522 {
            padding-top: 70px !important;
            padding-right: 50px !important;
            padding-bottom: 70px !important;
            padding-left: 50px !important;
            background-color: #0a203a !important;
        }



        .vc_custom_1525106105730 {
            background-image: url(https://app.ergo7.net/surge/wp-content/uploads/2018/04/timeline-bg.jpg?id=2210) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1526302651494 {
            padding-top: 70px !important;
            background-color: #071325 !important;
        }

        .vc_custom_1524028006641 {
            padding-top: 70px !important;
            padding-bottom: 70px !important;
            background-image: url(http://app.ergo7.net/surge/wp-content/uploads/2018/01/stage.jpg?id=280) !important;
        }

        .vc_custom_1524027927567 {
            padding-top: 70px !important;
        }

        .vc_custom_1524027908988 {
            margin-top: 35px !important;
        }

        .vc_custom_1517126846120 {
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1524124825438 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1523637628494 {
            margin-top: 70px !important;
            margin-bottom: 70px !important;
            background-color: rgba(8, 28, 49, 0.53) !important;
            *background-color: rgb(8, 28, 49) !important;
        }

        .vc_custom_1523638960396 {
            margin-top: 70px !important;
            margin-right: 30px !important;
            margin-bottom: 30px !important;
            margin-left: 30px !important;
        }

        .vc_custom_1524027223690 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1524031260599 {
            padding-top: 35px !important;
        }

        .vc_custom_1524027206762 {
            margin-bottom: 40px !important;
        }

        .vc_custom_1521223290604 {
            margin-top: 20px !important;
        }

        .vc_custom_1521223290604 {
            margin-top: 20px !important;
        }

        .vc_custom_1521223290604 {
            margin-top: 20px !important;
        }

        .vc_custom_1522940717735 {
            margin-top: 0px !important;
            padding-top: 0px !important;
        }

        .vc_custom_1522940713357 {
            margin-top: 0px !important;
            padding-top: 0px !important;
        }

        .vc_custom_1522940708787 {
            margin-top: 0px !important;
            padding-top: 0px !important;
        }

        .vc_custom_1520835672519 {
            padding-top: 70px !important;
            padding-right: 50px !important;
            padding-bottom: 35px !important;
            padding-left: 50px !important;
            background-color: #0a203a !important;
        }

        .vc_custom_1520835709287 {
            padding-top: 70px !important;
            padding-right: 50px !important;
            padding-bottom: 35px !important;
            padding-left: 50px !important;
            background-color: #06172b !important;
        }

        .vc_custom_1520835718559 {
            padding-top: 70px !important;
            padding-right: 50px !important;
            padding-bottom: 35px !important;
            padding-left: 50px !important;
            background-color: #0a203a !important;
        }

        .vc_custom_1520835731460 {
            padding-top: 70px !important;
            padding-right: 50px !important;
            padding-bottom: 35px !important;
            padding-left: 50px !important;
            background-color: #06172b !important;
        }

        .vc_custom_1520835742299 {
            padding-top: 70px !important;
            padding-right: 50px !important;
            padding-bottom: 35px !important;
            padding-left: 50px !important;
            background-color: #0a203a !important;
        }

        .vc_custom_1520835753874 {
            padding-top: 70px !important;
            padding-right: 50px !important;
            padding-bottom: 35px !important;
            padding-left: 50px !important;
            background-color: #06172b !important;
        }
    </style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
</head>
<body class="home page-template page-template-template-homepage page-template-template-homepage-php page page-id-418 woocommerce-no-js surge-dark woocommerce-active wpb-js-composer js-comp-ver-5.5.2 vc_responsive">
<!-- PRE LOADER -->
<div class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</div>
<div id="page" class="site">
    <header id="masthead" class="site-header">


        <div class="classic-menu container home-menu  ">
            <div class="menu-logo">
                <a href="{{ __('/') }}" rel="home">
                    <img src='{{ URL::asset('assets/images/logox.png') }}' alt='logo2'/>               </a>
            </div>
            <div class="menu-wrapper">
                <nav id="normal-menu">
                    <div>
                        <div class="primary-menu">
                            <ul id="primary-menu" class="menu">
                                <li id="menu-item-3828" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-3828"><a href="{{ __('/') }}">HOME</a>

                                </li>
                                <li id="menu-item-3827" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3827"><a href="{{ route('about') }}">ABOUT</a>

                                </li>
                                <li id="menu-item-3867" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3867"><a href="{{ route('stock') }}">UNPEEP STOCK</a></li>
                                <li id="menu-item-3867" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3867"><a href="{{ route('book-photographer') }}">BOOK NOW</a></li>
                                <li id="menu-item-3868" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3868"><a href="{{ route('contact') }}">CONTACT</a></li>
                                <li id="menu-item-3875" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3875"><a href="#">BLOG</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--  END MENU  -->
    </header>
    <!-- #masthead -->
