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


    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('assets/images/logox.png') }}" />
    <title>{{ config('app.name', 'Unpeep Stock') }} &#8211; Unpeep</title>


    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />

    <meta name="author" content="The Unpeep Team" />
    <meta name="description" content="Job board platform for photographers, Share creative designs and Express yourself!" />
    <meta name="keywords" content="Photographer, photography, blockchain, photography startup, events, event organizers, lagos, nigeria, events organizers in lagos, photographers in lagos,
                                    stock, photos, gallery, studio, job platform, jobs, gigs, blockchain startup, ethereum blockchain" />
    <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />

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

    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1522989260498 {
            background-image: url({{ URL::asset('assets/wp-content/uploads/2018/04/timeline-bg99d0.jpg') }}) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1520833451315 {
            background-image: url({{ URL::asset('assets/wp-content/uploads/2018/03/clients.jpg') }}) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1521177159621 {
            background-color: #050f1f !important;
        }

        .vc_custom_1521177172928 {
            background-image: url({{ URL::asset('assets/wp-content/uploads/2018/01/lights-bg.jpg') }}) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1521470543439 {
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1526520643672 {
            background-image: url({{ URL::asset('assets/wp-content/uploads/2018/04/background-2.jpg') }}) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1516612901194 {
            margin-top: 40px !important;
            margin-bottom: 40px !important;
        }

        .vc_custom_1520849852367 {
            margin-top: 50px !important;
            border-bottom-width: 50px !important;
        }

        .vc_custom_1520849859700 {
            margin-top: 50px !important;
            margin-bottom: 50px !important;
            padding-bottom: 30px !important;
        }

        .vc_custom_1520705840728 {
            padding-bottom: 30px !important;
            background-color: #1f2034 !important;
        }

        .vc_custom_1520705848219 {
            padding-bottom: 30px !important;
            background-color: #1f2034 !important;
        }

        .vc_custom_1520705855048 {
            padding-bottom: 30px !important;
            background-color: #1f2034 !important;
        }

        .vc_custom_1520706051846 {
            padding-bottom: 30px !important;
            background-color: #1f2034 !important;
        }

        .vc_custom_1520705863552 {
            padding-bottom: 30px !important;
            background-color: #1f2034 !important;
        }

        .vc_custom_1520705870025 {
            padding-bottom: 30px !important;
            background-color: #1f2034 !important;
        }

        .vc_custom_1520706058644 {
            padding-bottom: 30px !important;
            background-color: #1f2034 !important;
        }

        .vc_custom_1520705885841 {
            padding-bottom: 30px !important;
            background-color: #1f2034 !important;
        }

        .vc_custom_1518589233076 {
            background-color: #1f2034 !important;
        }

        .vc_custom_1516612934750 {
            margin-top: 40px !important;
            margin-bottom: 40px !important;
        }

        .vc_custom_1520849366982 {
            margin-bottom: 50px !important;
        }

        .vc_custom_1516632657056 {
            margin-top: 40px !important;
            margin-bottom: 40px !important;
        }

        .vc_custom_1520849355201 {
            margin-bottom: 50px !important;
        }

        .vc_custom_1520267713771 {
            margin-bottom: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267732522 {
            margin-bottom: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267755029 {
            margin-bottom: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267763067 {
            margin-bottom: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267803192 {
            margin-top: 25px !important;
            margin-bottom: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267809454 {
            margin-top: 25px !important;
            margin-bottom: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267816792 {
            margin-top: 25px !important;
            margin-bottom: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267867194 {
            margin-top: 25px !important;
            margin-bottom: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267827229 {
            margin-top: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267832882 {
            margin-top: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267842518 {
            margin-top: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1520267848486 {
            margin-top: 25px !important;
            background-color: rgba(8, 11, 25, 0.72) !important;
            *background-color: rgb(8, 11, 25) !important;
        }

        .vc_custom_1516613105221 {
            margin-top: 40px !important;
            margin-bottom: 40px !important;
        }

        .vc_custom_1520849320655 {
            margin-bottom: 50px !important;
        }

        .vc_custom_1520780118275 {
            margin-top: 40px !important;
            margin-bottom: 40px !important;
        }

        .vc_custom_1520780811756 {
            margin-bottom: 50px !important;
        }

        .vc_custom_1520775611139 {
            background-color: #181929 !important;
            border-radius: 5px !important;
        }

        .vc_custom_1520775624098 {
            background-color: #1e1f33 !important;
            border-radius: 5px !important;
        }

        .vc_custom_1520775632023 {
            background-color: #24253d !important;
            border-radius: 5px !important;
        }

        .vc_custom_1516613593326 {
            margin-top: 40px !important;
            margin-bottom: 40px !important;
        }

        .vc_custom_1516613116869 {
            margin-top: 40px !important;
            margin-bottom: 40px !important;
        }

        .vc_custom_1520678443792 {
            margin-bottom: 50px !important;
        }

        .vc_custom_1520750294825 {
            margin-bottom: 40px !important;
        }

        .vc_custom_1518589645085 {
            padding-top: 100px !important;
            padding-right: 50px !important;
            padding-bottom: 65px !important;
            padding-left: 50px !important;
            background-color: #0a203a !important;
        }

        .vc_custom_1517412359442 {
            padding-top: 100px !important;
            padding-right: 50px !important;
            padding-bottom: 65px !important;
            padding-left: 50px !important;
            background-color: #06172b !important;
        }

        .vc_custom_1517412328856 {
            padding-top: 100px !important;
            padding-right: 50px !important;
            padding-bottom: 65px !important;
            padding-left: 50px !important;
            background-color: #0a203a !important;
        }

        .vc_custom_1517026634333 {
            margin-bottom: 20px !important;
        }

        .vc_custom_1517026645337 {
            margin-bottom: 20px !important;
        }

        .vc_custom_1517024085178 {
            margin-bottom: 20px !important;
        }

        .vc_custom_1517412366160 {
            padding-top: 100px !important;
            padding-right: 50px !important;
            padding-bottom: 65px !important;
            padding-left: 50px !important;
            background-color: #06172b !important;
        }

        .vc_custom_1517412335977 {
            padding-top: 100px !important;
            padding-right: 50px !important;
            padding-bottom: 65px !important;
            padding-left: 50px !important;
            background-color: #0a203a !important;
        }

        .vc_custom_1517412374001 {
            padding-top: 100px !important;
            padding-right: 50px !important;
            padding-bottom: 65px !important;
            padding-left: 50px !important;
            background-color: #06172b !important;
        }

        .vc_custom_1517024091507 {
            margin-bottom: 20px !important;
        }

        .vc_custom_1517020861758 {
            margin-bottom: 20px !important;
        }

        .vc_custom_1517020886265 {
            margin-bottom: 20px !important;
        }

        .vc_custom_1516613504784 {
            margin-top: 40px !important;
            margin-bottom: 40px !important;
        }

        .vc_custom_1520849399849 {
            margin-bottom: 50px !important;
        }

        .vc_custom_1516613548706 {
            margin-top: 40px !important;
            margin-bottom: 40px !important;
        }

        .vc_custom_1529374155472 {
            margin-bottom: 50px !important;
        }

        .vc_custom_1516613593326 {
            margin-top: 40px !important;
            margin-bottom: 40px !important;
        }

        .vc_custom_1520849031230 {
            padding-right: 100px !important;
            padding-left: 100px !important;
        }
    </style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript> </head>

<body class="page-template page-template-template-homepage page-template-template-homepage-php page page-id-50 woocommerce-no-js surge-dark woocommerce-active wpb-js-composer js-comp-ver-5.5.2 vc_responsive">
<!-- PRE LOADER -->
<div class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</div>
<div id="page" class="site">
    <header id="masthead" class="site-header">

        <div class="menu-logo-wrapper ">
            <div class="menu-logo">
                <a href="{{ __('/') }}" rel="home">
                    <img src='{{ URL::asset('assets/images/unpeep-stock.png') }}' alt='Unpeep Stock'/>               </a>
            </div>
        </div>
        <div class="menu-toogle-wrapper ">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="navigation-wrapper full-page-menu">
            <div id="menuToggle">
                <div class="primary-menu">
                    <ul id="primary-menu" class="menu">
                        <li id="menu-item-3828" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-3828"><a href="#">HOME</a></li>
                        <li id="menu-item-3876" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3876"><a href="{{ route('about') }}">ABOUT</a></li>
                        <li id="menu-item-3874" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3874"><a href="{{ route('stock') }}">UNPEEP STOCK</a></li>
                        <li id="menu-item-3871" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3871"><a href="{{ route('book-photographer') }}">BOOK NOW</a></li>
                        <li id="menu-item-3872" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3872"><a href="{{ route('contact') }}">CONTACT</a></li>
                        <li id="menu-item-3875" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3875"><a href="#">BLOG</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--  END MENU  -->

    </header>
    <!-- #masthead -->