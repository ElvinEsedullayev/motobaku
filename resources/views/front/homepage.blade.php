@extends('front.layouts.master')
@section('title','HomePage')
@section('content')
   <!-- home-about start -->
    <div class="home-about" id="about-area">
        <div class="floating-icon" id="service_info_item">
            <div class="floating-icon__is floating-icon-info">
                <i class="flaticon-phone"></i>
            </div>
            <!--floating-icon-is-->
            <div class="floating-icon__is floating-icon-location">
                <i class="flaticon-pin"></i>
            </div>
            <!--floating-icon-is-->
            <div class="floating-icon__is floating-icon-message">
                <i class="flaticon-mail"></i>
            </div>
            <!--floating-icon-is-->
        </div>
        <!--floating-icon-->
        {{--
        <div class="container">
            <div class="row">
                <div class="about-title about-title-1">About Us</div>
            </div>
        </div>
        --}}
       <div class="home-rolling">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="rolling-content">
                        <div class="rolling-title">About<br>us</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet dignissim augue, nec posuere augue pharetra sed. Pellentesque consequat ornare ornare. Aliquam erat volutpat. Nullam posuere porttitor lectus, ut efficitur nisi tincidunt posuere.</p>
                        <a href="#" class="btn btn-style-2">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="home-rolling-slider">
                        <div class="single-item">
                            <img src="{{asset('front')}}/assets/img/home1/rolling-slider1.png" alt="">
                        </div>
                    </div>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="ceramic animated slideRotateFromRight">Ceramic Speed</div>
    </div>
    </div>
    <!-- home-about end -->



    <!-- package-area start -->
    <div class="package-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="top-text">
                        <span>Based on your skills</span>
                        <h1>tailored<br>Packages</h1>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="row">
                <div class="swiper-slider swiper-container two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide image-overlay">
                            <div class="slider-image">
                                <img src="{{asset('front')}}/assets/img/home1/src1.png" alt="slider image">
                            </div>
                            <div class="slider-content">
                                <div class="btn-icon">
                                    <a href="#" class="btn icon">
                                        <i class="flaticon-settings"></i>
                                    </a>
                                </div>
                                <span>Expert</span>
                                <a href="#" class="btn btn-style-2">See offer</a>
                            </div>
                        </div>
                        <div class="swiper-slide image-overlay">
                            <div class="slider-image">
                                <img src="{{asset('front')}}/assets/img/home1/src2.png" alt="slider image">
                            </div>
                            <div class="slider-content">
                                <div class="btn-icon">
                                    <a href="#" class="btn icon">
                                        <i class="flaticon-baseball-cap"></i>
                                    </a>
                                </div>
                                <span>Intermidiate</span>
                                <a href="#" class="btn btn-style-2">See offer</a>
                            </div>
                        </div>
                        <div class="swiper-slide image-overlay">
                            <div class="slider-image">
                                <img src="{{asset('front')}}/assets/img/home1/src3.png" alt="slider image">
                            </div>
                            <div class="slider-content">
                                <div class="btn-icon">
                                    <a href="#" class="btn icon">
                                        <i class="flaticon-brain"></i>
                                    </a>
                                </div>
                                <span>Beginner</span>
                                <a href="#" class="btn btn-style-2">See offer</a>
                            </div>
                        </div>
                        
                        <div class="swiper-slide image-overlay">
                            <div class="slider-image">
                                <img src="{{asset('front')}}/assets/img/home1/src4.png" alt="slider image">
                            </div>
                            <div class="slider-content">
                                <div class="btn-icon">
                                    <a href="#" class="btn icon">
                                        <i class="flaticon-expert-route"></i>
                                    </a>
                                </div>
                                <span>Advance</span>
                                <a href="#" class="btn btn-style-2">See offer</a>
                            </div>
                        </div>
                        <div class="swiper-slide image-overlay">
                            <div class="slider-image">
                                <img src="{{asset('front')}}/assets/img/home1/src2.png" alt="slider image">
                            </div>
                            <div class="slider-content">
                                <div class="btn-icon">
                                    <a href="#" class="btn icon">
                                        <i class="flaticon-star"></i>
                                    </a>
                                </div>
                                <span>Standard</span>
                                <a href="#" class="btn btn-style-2">See offer</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- package-area start -->

    <!-- home-blog start -->
    <div class="home-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-wrapper">
                        <div class="portfolio-blog">
                            <div class="blog-item width-33">
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/blog1.png">
                                <div class="content bottom-0">
                                    <span>Event Review, xtrmstudio, art</span>
                                    <h1>Nothing Can Stop You</h1>
                                </div>
                            </div>
                    
                            <div class="blog-item width-33 top-100">
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/blog2.png">
                                <div class="content top-0">
                                    <span>Event Review, xtrmstudio, art</span>
                                    <h1>World domination</h1>
                                </div>
                            </div>
                    
                            <div class="blog-item width-33">
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/blog3.png">
                                <div class="content bottom-0">
                                    <span>Event Review, xtrmstudio, art</span>
                                    <h1>Nothing Can Stop You</h1>
                                </div>
                            </div>
                                
                            <div class="blog-item width-33">
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/blog4.png">
                                <div class="content bottom-0">
                                    <span>Event Review, xtrmstudio, art</span>
                                    <h1>Nothing Can Stop You</h1>
                                </div>
                            </div>
                                
                            <div class="blog-item width-33 top-100">
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/blog5.png">
                                <div class="content top-0">
                                    <span>Event Review, xtrmstudio, art</span>
                                    <h1>Nothing Can Stop You</h1>
                                </div>
                            </div>
                                
                            <div class="blog-item width-33">
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/blog6.png">
                                <div class="content bottom-0">
                                    <span>Event Review, xtrmstudio, art</span>
                                    <h1>Nothing Can Stop You</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home-blog end -->

    <!-- discovery start -->
    <div class="discovery-area padding-bottom-88">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-right discovery-title">
                    <p class="title">A Place of</p>
                    <h1 class="text-uppercase">Disc<span>0</span>very</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5">
                    <div class="discovery-video margin-bottom-25">
                        <div class="video-content">
                            <div class="btn-wrapper desktop-center">
                                <a href="#" class="btn video-btn"><i class="fa fa-play text-left"></i></a>
                            </div>
                        </div>
                        <h1 class="page-title">Rock Rider</h1>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="billa-discover-item">
                                <h3>Best Routes</h3>
                                <a href="#" class="btn icon text-left">
                                    <i class="flaticon-pump-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="billa-discover-item">
                                <h3>Body Protection</h3>
                                <a href="#" class="btn icon text-left">
                                    <i class="flaticon-brain"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="billa-discover-item">
                                <h3>Accessories</h3>
                                <a href="#" class="btn icon text-left">
                                    <i class="flaticon-pedal"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="billa-discover-item">
                                <h3>Maintance</h3>
                                <a href="#" class="btn icon text-left">
                                    <i class="flaticon-pump"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- discovery end -->

    <!-- shopping start -->
    <div class="shopping-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shopping-text">
                        <span class="subtitle">This is Official Site for Shopping</span>
                        <h1>Let's <span>Go</span> Shopping</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-masonry-wrapper">
                        <ul class="portfolio-menu">
                            <li class="active" data-filter="*">Top Trends</li>
                            <li data-filter=".new">New Arrival</li>
                            <li data-filter=".best">Best Seller</li>
                        </ul>
                        <div class="portfolio-masonry grid">
                            <div class="masonry-item new grid-item width-25">
                                <h1 class="top-text">KEY RING <span>Clyde Court Men’s</span></h1>
                                <ul class="cart-menu">
                                    <li><a href="#">$120</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/shop1.png">
                                <span class="bottom-text">For Men, Made in China, 2017</span>
                            </div>
                    
                            <div class="masonry-item best grid-item width-50">
                                <h1 class="top-text">KEY RING <span>Clyde Court Men’s</span></h1>
                                <ul class="cart-menu">
                                    <li><a href="#">$120</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/shop2.png">
                                <span class="bottom-text">For Men, Made in China, 2017</span>
                            </div>
                    
                            <div class="masonry-item new best grid-item width-25">
                                <h1 class="top-text">KEY RING <span>Clyde Court Men’s</span></h1>
                                <ul class="cart-menu">
                                    <li><a href="#">$120</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/shop3.png">
                                <span class="bottom-text">For Men, Made in China, 2017</span>
                            </div>
                                
                            <div class="masonry-item best grid-item width-25">
                                <h1 class="top-text">KEY RING <span>Clyde Court Men’s</span></h1>
                                <ul class="cart-menu">
                                    <li><a href="#">$120</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/shop4.png">
                                <span class="bottom-text">For Men, Made in China, 2017</span>
                            </div>
                                
                            <div class="masonry-item new grid-item width-25">
                                <h1 class="top-text">KEY RING <span>Clyde Court Men’s</span></h1>
                                <ul class="cart-menu">
                                    <li><a href="#">$120</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/shop6.png">
                                <span class="bottom-text">For Men, Made in China, 2017</span>
                            </div>
                                
                            <div class="masonry-item new grid-item width-50">
                                <h1 class="top-text">KEY RING <span>Clyde Court Men’s</span></h1>
                                <ul class="cart-menu">
                                    <li><a href="#">$120</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <img class="masonry-image" alt="masonry" src="{{asset('front')}}/assets/img/home1/shop5.png">
                                <span class="bottom-text">For Men, Made in China, 2017</span>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapper desktop-center margin-top-40">
                        <a href="#" class="btn sm-btn btn-style-2">Load More +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shopping end -->

    <!-- discount start -->
    <div class="discount-area margin-top-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 position-relative">
                    <div class="discount-left">
                        <div class="content">
                            <span class="top-text">Reserve Your Bike Online</span>
                            <h1><span class="save">Save</span><span class="percent">30%</span></h1>
                            <a href="#" class="btn">Book now <span>→</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="discount-right">
                        <img class="discount-img" src="{{asset('front')}}/assets/img/home1/discount.png" alt="discount">
                        <div class="circle">
                            <span class="circle1"></span>
                            <span class="circle2"></span>
                            <span class="circle3"></span>
                        </div>
                        <div class="line">
                            <img src="{{asset('front')}}/assets/img/home1/line1.png" alt="line1" class="line1">
                            <img src="{{asset('front')}}/assets/img/home1/line2.png" alt="line2" class="line2">
                        </div>
                        <div class="hotspot">
                            <div class="hotspot-area">
                                <div class="hotspot1 lg-hotspot-button">+</div>
                                <div class="lg-hotspot-label">
                                    <p>This is some text that goes in the label. It describes the item.</p>
                                </div>
                            </div>
                            <div class="hotspot-area2">
                                <div class="hotspot2 lg-hotspot-button">+</div>
                                <div class="lg-hotspot-label">
                                    <p>This is some text2 that goes in the label. It describes the item.</p>
                                </div>
                            </div>
                            <span class="hotspot3"></span>
                            <span class="hotspot4"></span>
                            <span class="hotspot5"></span>
                            <span class="hotspot6"></span>
                        </div>
                        <div class="price animated slideRotateFromRight">
                            <span>Price : $250.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- discount end -->

    <!-- pricing start -->
    <div class="pricing-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <h1>POPULAR PRICING PACKAGES</h1>
                        <span>It is a long established fact that a reader will be distracted by</span>
                    </div>
                </div>
            </div>
            <div class="row no-gutter">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="content-bottom">
                        <h1>Free</h1>
                        <ul>
                            <li>24 Hours Support</li>
                            <li> All Over the World</li>
                            <li>Customer Managment</li>
                            <li>Business & Financ Analysing</li>
                            <li>Unlimited Tires</li>
                            <li>$<span>00</span>/Month</li>
                        </ul>
                        <div class="btn-wrapper desktop-center">
                            <a href="#" class="btn btn-style-2">Select Plan <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="content-bottom active">
                        <h1>Basic</h1>
                        <ul>
                            <li>24 Hours Support</li>
                            <li> All Over the World</li>
                            <li>Customer Managment</li>
                            <li>Business & Financ Analysing</li>
                            <li>Unlimited Tires</li>
                            <li>$<span>90</span>/Month</li>
                        </ul>
                        <div class="btn-wrapper desktop-center">
                            <a href="#" class="btn btn-style-2">Select Plan <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="content-bottom">
                        <h1>Standard</h1>
                        <ul>
                            <li>24 Hours Support</li>
                            <li> All Over the World</li>
                            <li>Customer Managment</li>
                            <li>Business & Financ Analysing</li>
                            <li>Unlimited Tires</li>
                            <li>$<span>30</span>/Month</li>
                        </ul>
                        <div class="btn-wrapper desktop-center">
                            <a href="#" class="btn btn-style-2">Select Plan <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="content-bottom">
                        <h1>Premium</h1>
                        <ul>
                            <li>24 Hours Support</li>
                            <li> All Over the World</li>
                            <li>Customer Managment</li>
                            <li>Business & Financ Analysing</li>
                            <li>Unlimited Tires</li>
                            <li>$<span>20</span>/Month</li>
                        </ul>
                        <div class="btn-wrapper desktop-center">
                            <a href="#" class="btn btn-style-2">Select Plan <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing end -->

    <!-- tour start -->
    <div class="tour-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <h1>Featured Tours</h1>
                        <span>It is a long established fact that a reader will be distracted by</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 margin-bottom-30">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{asset('front')}}/assets/img/home1/tour1.png" alt="tour">
                        </div>
                        <div class="col-lg-6">
                            <div class="content-bottom">
                                <h1 class="title">Walking (photo) Tour</h1>
                                <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 margin-bottom-30">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{asset('front')}}/assets/img/home1/tour2.png" alt="tour">
                        </div>
                        <div class="col-lg-6">
                            <div class="content-bottom">
                                <h1 class="title">Go for Hike</h1>
                                <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 margin-bottom-30">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="content-bottom">
                                <h1 class="title">Lost in Small Streets</h1>
                                <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus.</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('front')}}/assets/img/home1/tour3.png" alt="tour">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 margin-bottom-30">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="content-bottom">
                                <h1 class="title">Eat & Drink Like a Local</h1>
                                <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus.</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('front')}}/assets/img/home1/tour4.png" alt="tour">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tour end -->

    <!-- customer start -->
    <div class="customer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="content">
                        <h1>What's <span>customer</span> say</h1>
                        <ul class="quote-image-menu d-none d-lg-block">
                            <li><img src="{{asset('front')}}/assets/img/quote/1.png" alt="Quote image"></li>
                            <li><img src="{{asset('front')}}/assets/img/quote/2.jpg" alt="Quote image"></li>
                            <li><img src="{{asset('front')}}/assets/img/quote/3.jpg" alt="Quote image"></li>
                            <li><img src="{{asset('front')}}/assets/img/quote/4.jpg" alt="Quote image"></li>
                            <li><img src="{{asset('front')}}/assets/img/quote/5.jpg" alt="Quote image"></li>
                            <li><img src="{{asset('front')}}/assets/img/quote/6.jpg" alt="Quote image"></li>
                            <li><img src="{{asset('front')}}/assets/img/quote/7.jpg" alt="Quote image"></li>
                            <li><img src="{{asset('front')}}/assets/img/quote/8.jpg" alt="Quote image"></li>
                            <li><img src="{{asset('front')}}/assets/img/quote/9.jpg" alt="Quote image"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="quote-slider quote-slider1">
                        <div class="single-item">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="image">
                                <img src="{{asset('front')}}/assets/img/quote/1.png" alt="quote">
                            </div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat distinctio voluptates nam autem et, corrupti voluptas at qui id, a eligendi placeat sed quia dolorum, laborum ipsam dolores maiores magnam rerum soluta optio voluptatum. Cumque praesentium consectetur architecto </p>
                                <span class="quote-name">Jhon Due</span>
                                <p class="quote-pos">Managing Director</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="image"><img src="{{asset('front')}}/assets/img/quote/2.jpg" alt="quote"></div>
                            <div class="content">
                                <p>Quidem sequi labore nesciunt recusandae nihil odit, laudantium officia natus maxime enim porro vitae ex ea eos temporibus at asperiores. Similique totam et soluta, expedita sint blanditiis quae culpa harum iusto porro atque voluptatibus ratione quam, eveniet placeat sit</p>
                                <span class="quote-name">Surunjit Kumar</span>
                                <p class="quote-pos">Project Manager</p>
                            </div>
                        </div>
                        
                        <div class="single-item">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="image"><img src="{{asset('front')}}/assets/img/quote/3.jpg" alt="quote"></div>
                            <div class="content">
                                <p>Impedit tempore. Quo hic eum in amet quae aspernatur laudantium neque aliquid! Eligendi itaque molestiae ipsum, sed fugiat omnis nostrum vero. Velit, aspernatur?, impedit tempore. Quo hic eum in amet quae aspernatur laudantium neque aliquid! Eligendi itaque molestiae ipsum, sed fugiat omnis nostrum vero. Velit, aspernatur?</p>
                                <span class="quote-name">Sirajul Islam</span>
                                <p class="quote-pos">Team Leader</p>
                            </div>
                        </div>

                        <div class="single-item">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="image"><img src="{{asset('front')}}/assets/img/quote/4.jpg" alt="quote"></div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat distinctio voluptates nam autem et, corrupti voluptas at qui id, a eligendi placeat sed quia dolorum, laborum ipsam dolores maiores magnam rerum soluta optio voluptatum. Cumque praesentium consectetur architecto </p>
                                <span class="quote-name">Janice Mcreaken</span>
                                <p class="quote-pos">Founder</p>
                            </div>
                        </div>

                        <div class="single-item">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="image"><img src="{{asset('front')}}/assets/img/quote/5.jpg" alt="quote"></div>
                            <div class="content">
                                <p>Quidem sequi labore nesciunt recusandae nihil odit, laudantium officia natus maxime enim porro vitae ex ea eos temporibus at asperiores. Similique totam et soluta, expedita sint blanditiis quae culpa harum iusto porro atque voluptatibus ratione quam, eveniet placeat sit</p>
                                <span class="quote-name">Jane Smith</span>
                                <p class="quote-pos">Managing Director</p>
                            </div>
                        </div>

                        <div class="single-item">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="image"><img src="{{asset('front')}}/assets/img/quote/6.jpg" alt="quote"></div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                <span class="quote-name">Alex Smith</span>
                                <p class="quote-pos">Managing Director</p>
                            </div>
                        </div>

                        <div class="single-item">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="image"><img src="{{asset('front')}}/assets/img/quote/7.jpg" alt="quote"></div>
                            <div class="content">
                                <p>Impedit tempore. Quo hic eum in amet quae aspernatur laudantium neque aliquid! Eligendi itaque molestiae ipsum, sed fugiat omnis nostrum vero. Velit, aspernatur?, impedit tempore. Quo hic eum in amet quae aspernatur laudantium neque aliquid! Eligendi itaque molestiae ipsum, sed fugiat omnis nostrum vero. Velit, aspernatur?</p>
                                <span class="quote-name">Jhon Due</span>
                                <p class="quote-pos">Managing Director</p>
                            </div>
                        </div>

                        <div class="single-item">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="image"><img src="{{asset('front')}}/assets/img/quote/8.jpg" alt="quote"></div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                <span class="quote-name">Rahul Biswas</span>
                                <p class="quote-pos">Assistant Director</p>
                            </div>
                        </div>

                        <div class="single-item">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="image"><img src="{{asset('front')}}/assets/img/quote/9.jpg" alt="quote"></div>
                            <div class="content">
                                <p>Impedit tempore. Quo hic eum in amet quae aspernatur laudantium neque aliquid! Eligendi itaque molestiae ipsum, sed fugiat omnis nostrum vero. Velit, aspernatur?, impedit tempore. Quo hic eum in amet quae aspernatur laudantium neque aliquid! Eligendi itaque molestiae ipsum, sed fugiat omnis nostrum vero. Velit, aspernatur?</p>
                                <span class="quote-name">Rohit sharma</span>
                                <p class="quote-pos">Managing Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customer end -->

    <!-- home-contact start -->
    <div class="home-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="contact-title">
                        <h1>Get In Touch</h1>
                    </div>
                </div>
            </div>
            <div class="row contact-row">
                <div class="col-lg-5">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/">elementor review</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-right">
                        <div class="form-group">
                            <form class="contact-form form" action="#" name="registration">
                                <div class="form-field margin-top-30 margin-bottom-30">
                                    <input name="firstname" id="name" type="text" placeholder="Your name" class="input-form"/>
                                </div>
                                <div class="form-field margin-top-30 margin-bottom-30">
                                    <input id="email" type="email" placeholder="santa@gmail.com" class="input-form" data-required="text" data-required-email="email" name="email"/>
                                </div>
                                <div class="form-field margin-top-30 margin-bottom-30">
                                    <input name="subject" id="subject" type="text" placeholder="Subject" class="input-form"/>
                                </div>
                                <div class="form-field margin-top-30 margin-bottom-30">
                                    <textarea name="message" id="thought" cols="30" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="btn-wrapper desktop-right">
                                    <button type="submit" class="btn sm-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home-contact end -->

    <!-- brand-area start -->
   
    <!-- brand-area end -->
    @endsection