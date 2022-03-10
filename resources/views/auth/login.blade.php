{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from zwin.io/html/billatrail/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 02:10:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billa Trail - Biking HTML Template</title>
     <!-- favicon -->
     <link rel=icon href=assets/img/favicon.png sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/magnific-popup.css">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/slick.css" />
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/slick-theme.css" />
    <!-- swiper -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/swiper.min.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/owl.carousel.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/font-awesome.min.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/flaticon.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/responsive.css">
      
</head>
<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <div class="signinup-area">
        <div class="content col-lg-6 col-md-6">
            <div class="login-panel">
                <div class="panel-heading">
                    <a href="index.html"><img src="{{asset('front')}}/assets/img/logo-black.png" alt="logo"></a>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-group">
                            <input class="form-control" placeholder="Email" name="email" type="email" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="action">
                            <div class="action-left">
                                <p>Sign in with <a href="https://www.facebook.com/" class="facebook">Facebook</a></p>
                                <span class="or">Or</span>
                                <p>Sign in with <a href="https://mail.google.com/mail/" class="gmail">Gmail</a></p>
                            </div>
                            <div class="btn-wrapper desktop-right">
                                <button type="submit" href="#" class="btn sm-btn text-white">Sign in</button>
                            </div>
                        </div>
                        <p class="bottom">Don't Have An Account Please <a class="signup" href="signup.html">Sign up </a> Now</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery -->
    <script src="{{asset('front')}}/assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper -->
    <script src="{{asset('front')}}/assets/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="{{asset('front')}}/assets/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="{{asset('front')}}/assets/js/jquery.magnific-popup.js"></script>
    <!-- Slick -->
    <script src="{{asset('front')}}/assets/js/slick.min.js"></script>
    <!-- Slick Animation -->
    <script src="{{asset('front')}}/assets/js/slick-animation.js"></script>
    <!-- swiper -->
    <script src="{{asset('front')}}/assets/js/swiper.min.js"></script>
    <!-- wow -->
    <script src="{{asset('front')}}/assets/js/wow.min.js"></script>
    <!-- nice select -->
    <script src="{{asset('front')}}/assets/js/nice-select.js"></script>
    <!-- owl carousel -->
    <script src="{{asset('front')}}/assets/js/owl.carousel.min.js"></script>
    <!-- waypoint -->
    <script src="{{asset('front')}}/assets/js/waypoints.min.js"></script>
    <!-- counterup -->
    <script src="{{asset('front')}}/assets/js/jquery.counterup.min.js"></script>
    <!-- imageloaded -->
    <script src="{{asset('front')}}/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="{{asset('front')}}/assets/js/isotope.pkgd.min.js"></script>
     <!-- rProgressbar -->
    <script src="{{asset('front')}}/assets/js/jQuery.rProgressbar.min.js"></script>
    <!-- main js -->
    <script src="{{asset('front')}}/assets/js/script.js"></script>
    <script src="{{asset('front')}}/assets/js/main.js"></script>
    
</body>

<!-- Mirrored from zwin.io/html/billatrail/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 02:10:50 GMT -->
</html>
