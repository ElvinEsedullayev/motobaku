<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from zwin.io/html/billatrail/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 02:04:50 GMT -->
<head>
    @include('front.layouts.partials.head')
      
</head>
<body>

    <!--  GECIKDIRIR
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
        -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="http://zwin.io/html/billatrail/index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->
    {{--
    <div class="info-popup">
        <div class="info-popup-content">
            <button type="button" class="info-popup-content_close">X</button>
            <div class="row no-gutters">
                <div class="col-xl-7 col-12 col-sm-6">
                    <div class="info-popup-content__img info-popup-content__img--one"></div>
                </div>
                <div class="col-xl-5 col-12 col-sm-6">
                    <div class="info-popup-content__text">
                        <div class="info-popup-content__text-header">
                            <h3 class="info-popup-content__title">Opening Hours</h3>
                        </div>
                        <div class="info-popup-content__text-body">
                            <span class="info-popup-content__text-is">monday - sunday</span>
                            <span class="info-popup-content__text-is">8.00 am - 9.00 pm</span>
                        </div>
                        <div class="info-popup-content__text-footer">
                            <span class="info-popup-content__text-is">+880 046 292 02</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--info-popup-->

    <div class="location-popup">
        <div class="location-popup-content">
            <button type="button" class="message-popup-content_close">X</button>
            <div class="row no-gutters">
                <div class="col-lg-7 col-12 col-sm-6">
                    <div class="mapouter2">
                        <div class="gmap_canvas2">
                            <iframe width="100%" height="100%" id="gmap_canvas2" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/">elementor review</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 col-sm-6">
                    <div class="location-popup-content__text">
                        <div class="location-popup-content__text-header">
                            <h3 class="location-popup-content__title">Address</h3>
                        </div>
                        <div class="location-popup-content__text-body">
                            <span class="location-popup-content__text-is">
                                2, Ave Manchester, Lorem <br />
                                ipsum St, Rio Danubin
                            </span>
                        </div>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-element btn-normal btn-gray">Open in maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--location-popup-->

    <div class="message-popup">
        <div class="message-popup-content">
            <button type="button" class="message-popup-content_close">X</button>
            <div class="row no-gutters">
                <div class="col-lg-7 col-12 col-sm-6">
                    <div class="message-popup-content__text text-left pl-5">
                        <div class="message-popup-content__text-header">
                            <h3 class="message-popup-content__title mb-3">
                                You have a question for us?
                            </h3>
                        </div>
                        <div class="message-popup-content__text-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-12 margin-top-20">
                                        <input type="text" placeholder="Email address" class="contact-form__input"/>
                                    </div>
                                    <div class="col-12 margin-top-20">
                                        <textarea name="Message" placeholder="Message" class="contact-form__textarea" cols="30" rows="2" ></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="btn-wrapper desktop-center margin-top-30">
                                            <a href="#" class="btn btn-element btn-lg btn-red">Send</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 col-sm-6">
                    <div class="message-popup-content__img message-popup-content__img--three"></div>
                </div>
            </div>
        </div>
    </div><!--message-popup-->

    --}}
@if(Route::is('front.home'))
 @include('front.layouts.partials.navbar')
  @include('front.layouts.partials.slider')
  @else
  @include('front.layouts.partials.navbar-black')
  @endif

    @yield('content')
   @include('front.layouts.partials.brend')     
    <div class="bottom-bg"></div>

   @include('front.layouts.partials.footer')
    
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    @include('front.layouts.partials.script')
  
    
</body>

<!-- Mirrored from zwin.io/html/billatrail/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 02:06:12 GMT -->
</html>