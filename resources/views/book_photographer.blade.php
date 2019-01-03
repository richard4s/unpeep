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

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ URL::asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
</head>
<body>

<div class="main">

    <div class="container">
        <form method="POST" id="signup-form" class="signup-form" action="#">
            <div>
                <h3></h3>
                <fieldset>
                    <input type="text" name="first_name" id="first_name" />
                    <label for="first_name" class="form-label">01 . What is your first name ?</label>
                </fieldset>

                <h3></h3>
                <fieldset>
                    <input type="text" name="last_name" id="last_name" />
                    <label for="last_name" class="form-label">02 . What is your last name ?</label>
                </fieldset>

                <h3></h3>
                <fieldset>
                    <input type="email" name="email" id="email" />
                    <label for="email" class="form-label">03 . What is your Email ?</label>
                </fieldset>

                <h3></h3>
                <fieldset>
                    <input type="text" name="password" id="password" />
                    <label for="password" class="form-label">04 . Create your password</label>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </fieldset>

                <h3></h3>
                <fieldset>
                    <input type="text" name="re_password" id="re_password" />
                    <label for="re_password" class="form-label">05 . Repeat your password </label>
                    <span toggle="#re_password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </fieldset>
            </div>
        </form>
    </div>

</div>

<!-- JS -->
<script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/jquery-validation/dist/additional-methods.min.js') }}v"></script>
<script src="{{ URL::asset('assets/vendor/jquery-steps/jquery.steps.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/main.js') }}"></script>
<!-- Hotjar Tracking Code for www.unpeep.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1143508,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</body>
</html>