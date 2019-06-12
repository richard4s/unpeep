<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Form Elements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <script src="../../../../cdn-cgi/apps/head/vAzQ3pO_LVF9Y_-CSxLP87NslSA.js"></script><link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ URL::asset('') }}assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('') }}assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('') }}assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('') }}assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ URL::asset('') }}assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ URL::asset('') }}assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('') }}assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('') }}assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('') }}assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ URL::asset('') }}assets/plugins/summernote/css/summernote.css" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ URL::asset('') }}assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ URL::asset('') }}assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ URL::asset('') }}assets/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{ URL::asset('') }}assets/pages/css/themes/modern.css" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-header horizontal-menu horizontal-app-menu ">

<div class="header p-r-0 bg-primary">
    <div class="header-inner header-md-height">
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu text-white" data-toggle="horizontal-menu"></a>
        <div class="">
            <div class="brand inline no-border hidden-xs-down">
                <img src="assets/img/logo_white.png" alt="logo" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
            </div>

            <ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-l b-r no-style p-l-30 p-r-20">
                <li class="p-r-10 inline">
                    <div class="dropdown">
                        <a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
                            <span class="bubble"></span>
                        </a>

                        <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">

                            <div class="notification-panel">

                                <div class="notification-body scrollable">

                                    <div class="notification-item unread clearfix">

                                        <div class="heading open">
                                            <a href="#" class="text-complete pull-left">
                                                <i class="pg-map fs-16 m-r-10"></i>
                                                <span class="bold">Carrot Design</span>
                                                <span class="fs-12 m-l-10">David Nester</span>
                                            </a>
                                            <div class="pull-right">
                                                <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                                    <div><i class="fa fa-angle-left"></i>
                                                    </div>
                                                </div>
                                                <span class=" time">few sec ago</span>
                                            </div>
                                            <div class="more-details">
                                                <div class="more-details-inner">
                                                    <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                                        distinguishes between <br>
                                                        A leader and a follower.”</h5>
                                                    <p class="small hint-text">
                                                        Commented on john Smiths wall.
                                                        <br> via pages framework.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                            <a href="#" class="mark"></a>
                                        </div>

                                    </div>


                                    <div class="notification-item  clearfix">
                                        <div class="heading">
                                            <a href="#" class="text-danger pull-left">
                                                <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                <span class="bold">98% Server Load</span>
                                                <span class="fs-12 m-l-10">Take Action</span>
                                            </a>
                                            <span class="pull-right time">2 mins ago</span>
                                        </div>

                                        <div class="option">
                                            <a href="#" class="mark"></a>
                                        </div>

                                    </div>


                                    <div class="notification-item  clearfix">
                                        <div class="heading">
                                            <a href="#" class="text-warning-dark pull-left">
                                                <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                <span class="bold">Warning Notification</span>
                                                <span class="fs-12 m-l-10">Buy Now</span>
                                            </a>
                                            <span class="pull-right time">yesterday</span>
                                        </div>

                                        <div class="option">
                                            <a href="#" class="mark"></a>
                                        </div>

                                    </div>


                                    <div class="notification-item unread clearfix">
                                        <div class="heading">
                                            <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                                                <img width="30" height="30" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg">
                                            </div>
                                            <a href="#" class="text-complete pull-left">
                                                <span class="bold">Revox Design Labs</span>
                                                <span class="fs-12 m-l-10">Owners</span>
                                            </a>
                                            <span class="pull-right time">11:00pm</span>
                                        </div>

                                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                            <a href="#" class="mark"></a>
                                        </div>

                                    </div>

                                </div>


                                <div class="notification-footer text-center">
                                    <a href="#" class="">Read all notifications</a>
                                    <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                                        <i class="pg-refresh_new"></i>
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>
                </li>
                <li class="p-r-10 inline">
                    <a href="#" class="header-icon pg pg-link"></a>
                </li>
                <li class="p-r-10 inline">
                    <a href="#" class="header-icon pg pg-thumbs"></a>
                </li>
            </ul>

            <a href="#" class="search-link hidden-md-down" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
        </div>
        <div class="d-flex align-items-center">

            <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down text-white">
                <span class="semi-bold">David</span> <span class="">Nest</span>
            </div>
            <div class="dropdown pull-right">
                <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="thumbnail-wrapper d32 circular inline sm-m-r-5">
<img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                    <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
                    <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
                    <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
                    <a href="#" class="clearfix bg-master-lighter dropdown-item">
                        <span class="pull-left">Logout</span>
                        <span class="pull-right"><i class="pg-power"></i></span>
                    </a>
                </div>
            </div>

            <a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
        </div>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
                <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-close" data-toggle="horizontal-menu">
                </a>
                <ul>
                    <li>
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li>
                        <a href="social.html"><span class="title">Social</span></a>
                    </li>
                </ul>
                <a href="#" class="search-link d-flex justify-content-between align-items-center hidden-lg-up" data-toggle="search">Tap here to search <i class="pg-search float-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="page-container ">

    <div class="page-content-wrapper ">



            <div class=" container    container-fixed-lg">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="card card-default">
                            <div class="card-header ">
                                <div class="card-title">
                                    Option #one
                                </div>
                            </div>
                            <div class="card-block">
                                <h5>
                                    Pages default style
                                </h5>
                                <form class="" role="form">
                                    <div class="form-group form-group-default required ">
                                        <label>Project</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default required">
                                                <label>First name</label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Last name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-default required">
                                        <label>Password</label>
                                        <input type="password" class="form-control" required>
                                    </div>

                                    <div class="form-group  form-group-default required">
                                        <label>Placeholder</label>
                                        <input type="email" class="form-control" placeholder="ex: some@example.com" required>
                                    </div>
                                    <div class="form-group form-group-default required ">
                                        <label>Tags</label>
                                        <input class="tagsinput custom-tag-input" type="text" value="hello World, quotes, inspiration" />
                                    </div>



                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class=" container    container-fixed-lg m-t-20">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="card card-default">
                            <div class="card-header ">
                                <div class="card-title">
                                    Drag n' drop uploader
                                </div>
                                <div class="tools">
                                    <a class="collapse" href="javascript:;"></a>
                                    <a class="config" data-toggle="modal" href="#grid-config"></a>
                                    <a class="reload" href="javascript:;"></a>
                                    <a class="remove" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-block no-scroll no-padding">
                                <form action="http://pages.revox.io/file-upload" class="dropzone no-margin">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>




        <div class=" container   container-fixed-lg footer">
            <div class="copyright sm-text-center">
                <p class="small no-margin pull-left sm-pull-reset">
                    <span class="hint-text">Copyright &copy; 2017 </span>
                    <span class="font-montserrat">REVOX</span>.
                    <span class="hint-text">All rights reserved. </span>
                    <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
                </p>
                <p class="small no-margin pull-right sm-pull-reset">
                    Hand-crafted <span class="hint-text">&amp; made with Love</span>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>

</div>


<script data-cfasync="false" src="../../../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script>

<script src="{{ URL::asset('') }}assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="{{ URL::asset('') }}assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('') }}assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('') }}assets/plugins/classie/classie.js"></script>
<script src="{{ URL::asset('') }}assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('') }}assets/plugins/jquery-autonumeric/autoNumeric.js"></script>
<script type="text/javascript" src="{{ URL::asset('') }}assets/plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('') }}assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('') }}assets/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
<script src="{{ URL::asset('') }}assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/plugins/moment/moment.min.js"></script>
<script src="{{ URL::asset('') }}assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{ URL::asset('') }}assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="{{ URL::asset('') }}assets/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
<script src="{{ URL::asset('') }}assets/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
<script src="{{ URL::asset('') }}assets/plugins/handlebars/handlebars-v4.0.5.js"></script>


<script src="{{ URL::asset('') }}assets/pages/js/pages.min.js"></script>


<script src="{{ URL::asset('') }}assets/pages/js/form_elements.js" type="text/javascript"></script>
<script src="{{ URL::asset('') }}assets/pages/js/scripts.js" type="text/javascript"></script>

</body>
</html>
