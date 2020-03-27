 @include('frontlayouts.header')
    <!-- header-start -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="{{url('/')}}/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block text-center">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">{{trans('site.h3')}}</a></li>
                                        <li><a href="service.html">{{trans('site.h4')}}</a></li>
                                        <li><a href="#">{{trans('site.h5')}} <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="portfolio_details.html">{{trans('site.h6')}}</a></li>
                                                <li><a href="about.html">{{trans('site.h7')}}</a></li>
                                                <li><a href="elements.html">{{trans('site.h8')}}</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">{{trans('site.h9')}} </a>
                                           
                                        </li>
                                         <li><a href="#">{{trans('site.h10')}} <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
            <li><a href="{{ url('lang/ar') }}"><i class="fa fa-flag"></i> عربى</a></li>
            <li><a href="{{ url('lang/en') }}"><i class="fa fa-flag"></i> English</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">{{trans('site.h11')}}</a></li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-2 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-end">
                                <a href="#" data-scroll-nav="0" class="say_hi">{{trans('site.h12')}}</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-lg-10 col-md-10">
                        <div class="slider_text">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                {{trans('site.h1')}}
                            </h3>
                            <a class="boxed-btn3 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".2s" href="portfolio.html">{{trans('site.h2')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-70">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" > {{trans('site.h4')}}</span>
                        <h3 style="text-align: center;" class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s"> {{trans('site.h13')}}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="{{url('/')}}/img/svg_icon/1.svg" alt="">
                        </div>
                        <h3> {{trans('site.h14')}}</h3>
                        <p> {{trans('site.h15')}}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="{{url('/')}}/img/svg_icon/2.svg" alt="">
                        </div>
                        <h3> {{trans('site.h16')}}</h3>
                        <p> {{trans('site.h15')}}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="{{url('/')}}/img/svg_icon/3.svg" alt="">
                        </div>
                        <h3> {{trans('site.h18')}}</h3>
                        <p> {{trans('site.h15')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->

 @include('frontlayouts.footer')