@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


    <!-- #masthead -->
    <div class="container-fluid">
        <div class="page-title-full-wrapper">
            <header class="entry-header single-page-title top-bar">
                <div class="container">
                    <h1 class="page-headline">ABOUT UNPEEP</h1> </div>
                <hr class="page-hr">
            </header>
        </div>
    </div>
    </div>

    <div id="content" class="site-content">
        <!-- particles.js container -->

        <div id="primary" class="content-area">
            <div class="container">
                <div class="site-main" id="main">
                    <article id="post-12" class="post-12 page type-page status-publish hentry">
                        <div class="entry-content">

                            <section data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" class="vc_section vc_custom_1518802848617 vc_section-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                <div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <!-- vc_grid start -->
                                                <div class="vc_grid-container-wrapper vc_clearfix">
                                                    <div class="vc_grid-container vc_clearfix wpb_content_element vc_masonry_grid" data-initial-loading-animation="zoomIn" data-vc-grid-settings="{&quot;page_id&quot;:12,&quot;style&quot;:&quot;all-masonry&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1524455317693-c57350db-c25e-0&quot;,&quot;tag&quot;:&quot;vc_masonry_grid&quot;}"
                                                         data-vc-request="https://app.ergo7.net/surge/wp-admin/admin-ajax.php" data-vc-post-id="12" data-vc-public-nonce="c6d711857a">
                                                    </div>
                                                </div>
                                                <!-- vc_grid end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section class="vc_section vc_custom_1524455400509">
                                <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="schedule-image-box wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1500" height="1000" src="{{ URL::asset('assets/wp-content/uploads/2018/02/conference-middle.jpg') }}" class="vc_single_image-img attachment-full" alt="" srcset="https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle.jpg 1500w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-300x200.jpg 300w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-768x512.jpg 768w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-1024x683.jpg 1024w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-600x400.jpg 600w"
                                                                                                                       sizes="(max-width: 1500px) 100vw, 1500px" /></div>
                                                    </figure>
                                                </div>
                                                <h3 style="text-align: left" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn">ABOUT US</h3></div>
                                        </div>
                                    </div>
                                    <div class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <h2 style="text-align: center" class="vc_custom_heading">THE SPIRIT OF HAPPINESS</h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College
                                                            in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>

                                                    </div>
                                                </div>

                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                    <figure class="wpb_wrapper vc_figure">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="vc_section vc_custom_1524455400509">
                                <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="schedule-image-box wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                            <img width="1500" height="1000" src="{{ URL::asset('assets/wp-content/uploads/2018/02/conference-middle.jpg') }}" class="vc_single_image-img attachment-full" alt="" srcset="https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle.jpg 1500w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-300x200.jpg 300w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-768x512.jpg 768w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-1024x683.jpg 1024w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-600x400.jpg 600w"
                                                                                                                       sizes="(max-width: 1500px) 100vw, 1500px" /></div>
                                                    </figure>
                                                </div>
                                                <h3 style="text-align: left" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn">THE MISSION</h3></div>
                                        </div>
                                    </div>
                                    <div class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <h2 style="text-align: center" class="vc_custom_heading">THE SPIRIT OF HAPPINESS</h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College
                                                            in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>

                                                    </div>
                                                </div>

                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                    <figure class="wpb_wrapper vc_figure">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="vc_section vc_custom_1524455400509">
                                <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="schedule-image-box wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1500" height="1000" src="{{ URL::asset('assets/wp-content/uploads/2018/02/conference-middle.jpg') }}" class="vc_single_image-img attachment-full" alt="" srcset="https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle.jpg 1500w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-300x200.jpg 300w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-768x512.jpg 768w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-1024x683.jpg 1024w, https://app.ergo7.net/surge/wp-content/uploads/2018/02/conference-middle-600x400.jpg 600w"
                                                                                                                       sizes="(max-width: 1500px) 100vw, 1500px" /></div>
                                                    </figure>
                                                </div>
                                                <h3 style="text-align: left" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn">THE VISION</h3></div>
                                        </div>
                                    </div>
                                    <div class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <h2 style="text-align: center" class="vc_custom_heading">THE SPIRIT OF HAPPINESS</h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College
                                                            in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>

                                                    </div>
                                                </div>

                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                    <figure class="wpb_wrapper vc_figure">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                        <!-- .entry-content -->
                    </article>
                    <!-- #post-12 -->
                </div>
                <!-- #main -->
            </div>
        </div>
        <!-- #primary -->
    </div>
    <!-- #content -->

@endsection