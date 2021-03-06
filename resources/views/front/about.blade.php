@extends('front.layouts.master')
@section('title','about')
@section('content')
   <div class="breadcrumb-style-01">
        <div class="breadcrumb-inner">
            <h1 class="page-title">About Us</h1>
            <ul class="page-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
    </div>

    <div class="experience-area text-center padding-top-100 padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-experience">
                        <div class="icon">
                            <i class="fa fa-black-tie"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">We are professional</h4>
                        </div>
                    </div>
                </div>                            
                <div class="col-lg-3 col-md-6">
                    <div class="single-experience">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Client Love Us</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-experience">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">12 Years Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-experience">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Great 24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-video">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 d-flex align-self-center">
                    <div class="about-video-text">
                        <h3>Yes, we can do it!</h3>
                        <h6>When Billa Trail is Your Life</h6>
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus</span><br> orci luctus et ultrices posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet dignissim augue, nec posuere augue pharetra sed. Pellentesque consequat ornare ornare. Aliquam erat volutpat. Nullam posuere porttitor lectus, ut efficitur nisi tincidunt posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet dignissim augue, nec posuere augue pharetra sed. Pellentesque consequat ornare ornare. Aliquam erat volutpat. Nullam posuere porttitor lectus, ut efficitur nisi tincidunt posuere.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                    <div class="about-video-img">
                        <img src="{{asset('front')}}/assets/img/about-page/video.png" alt="">
                        <h4>Get on and go!</h4>
                    </div>
                </div>
                <div class="about-video-btn d-none d-lg-block">
                    <a href="#"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="explore-area">
        <div class="container-fluid">  
            <div class="row"> 
                <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                    <div class="row">
                        <div class="explore_left">
                            <img src="{{asset('front')}}/assets/img/about-page/explore.png" alt="Explore">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-12 offset-xl-1 d-flex align-self-center">
                    <div class="row">
                        <div class="explore_right">
                            <h1>Bundle & save</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet dignissim augue, nec posuere augue pharetra sed. Pellentesque consequat ornare ornare. Aliquam erat volutpat. Nullam posuere porttitor lectus, ut efficitur nisi tincidunt posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet dignissim augue, nec posuere augue pharetra sed. Pellentesque consequat ornare ornare. Aliquam erat volutpat. Nullam posuere porttitor lectus, ut efficitur nisi tincidunt posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida</p>
                            <div class="btn-wrapper desktop-left padding-bottom-10">
                                <a class="button-explore" href="#">Explore Packages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-facts margin-top-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fun-title">
                        <h1>Some Fun Facts About Us</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="row">
                        <div class="fun-content">
                            <img src="{{asset('front')}}/assets/img/about-page/fun1.png" alt="fun">
                            <div class="fun-text">
                                <h4>Some Fun</h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="row">
                        <div class="fun-content">
                            <img src="{{asset('front')}}/assets/img/about-page/fun2.png" alt="fun">
                            <div class="fun-text">
                                <h4>Some Fun</h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="row">
                        <div class="fun-content">
                            <img src="{{asset('front')}}/assets/img/about-page/fun3.png" alt="fun">
                            <div class="fun-text">
                                <h4>Some Fun</h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="row">
                        <div class="fun-content">
                            <img src="{{asset('front')}}/assets/img/about-page/fun4.png" alt="fun">
                            <div class="fun-text">
                                <h4>Some Fun</h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="row">
                        <div class="fun-content">
                            <img src="{{asset('front')}}/assets/img/about-page/fun5.png" alt="fun">
                            <div class="fun-text">
                                <h4>Some Fun</h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="row">
                        <div class="fun-content">
                            <img src="{{asset('front')}}/assets/img/about-page/fun6.png" alt="fun">
                            <div class="fun-text">
                                <h4>Some Fun</h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="row">
                        <div class="fun-content">
                            <img src="{{asset('front')}}/assets/img/about-page/fun7.png" alt="fun">
                            <div class="fun-text">
                                <h4>Some Fun</h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="row">
                        <div class="fun-content">
                            <img src="{{asset('front')}}/assets/img/about-page/fun8.png" alt="fun">
                            <div class="fun-text">
                                <h4>Some Fun</h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection