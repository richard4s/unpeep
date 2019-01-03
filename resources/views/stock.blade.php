@extends('layouts.stock')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif



        <div id="content" class="site-content">

            <!-- particles.js container -->

            <div id="primary" class="content-area home-page">
                <div class="container">
                    <main id="main" class="site-main">
                        <article id="post-50" class="post-50 page type-page status-publish hentry">
                            <div class="entry-content">

                                <section id="background" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section scene layer flash-bg vc_row-o-full-height vc_section-o-content-middle vc_section-flex">
                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid layer home-parallax-bg vc_custom_1526520643672 vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-middle vc_row-o-content-middle vc_row-flex">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn  layer home_title">

                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element  layer title_content">
                                                        <div class="wpb_wrapper">
                                                            <h2>COMING SOON</h2>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                </section>
                                <div class="vc_row-full-width vc_clearfix"></div>

                                <section id="credit-section" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="https://app.ergo7.net/surge/wp-content/uploads/2018/01/stage.jpg" class="vc_section vc_custom_1521470543439 vc_section-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1516613593326">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center" class="vc_custom_heading single-page-header">???</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom">

                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid fs-credit wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_row-o-equal-height vc_row-flex">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="footer-text">
                                                                <p><span class="top-head">Unpeep Stock </span> is a<br />
                                                                    <span class="top-head">User-Generated Provider of a </span> diverse array of high quality<br />
                                                                    <span class="top-head">Copyright Licensed digital assets or images ,<br />
</span> for commercial<span class="top-head"> , creative personal </span><br /> and <span class="top-head">business use.</span>       #unpeepstock</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom vc_custom_1520849031230">

                                    </div>
                                </section>
                                <div class="vc_row-full-width vc_clearfix"></div>

                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-50 -->
                    </main>
                    <!-- #main -->
                </div>
            </div>
            <!-- #primary -->
        </div>
        <a class="scrollup"><i class="fa fa-angle-up"></i></a>
        <!-- #colophon -->
    </div>


@endsection