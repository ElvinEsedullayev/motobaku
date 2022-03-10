   <!-- navbar start -->
    <div class="billa-navbar">
        <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#billatrail_main_menu" 
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="index.html"> <img src="{{asset('front')}}/assets/img/logo.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="billatrail_main_menu">
                    <ul class="navbar-nav">
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('front.about')}}">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="trails.html">Trails</a></li>
                                <li><a href="event.html">Event</a></li>
                                <li><a href="signin.html">Sign In</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Ui Elements</a>
                            <ul class="sub-menu">
                                <li><a href="form.html">Form</a>
                                <li><a href="button.html">Button</a>
                                <li><a href="header-style.html">Header Style</a>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="icon.html">Icon</a></li>
                                <li><a href="accordion.html">Accordion</a></li>
                                <li><a href="tables.html">Table</a></li>
                                <li><a href="alert-cookie.html">Alert & Cookie</a></li>
                                <li><a href="countdown-menu.html">Countdown & Menu</a></li>
                                <li><a href="card.html">Card</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="popover-list.html">Popover & List</a></li>
                                <li><a href="footer.html">Footer Style</a></li>
                                <li><a href="pagination-progressbar.html">Pagination & Progressbar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="payment.html">Payment</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-right-content">
                    <ul class="nav-right-menu">
                        <li class="search" id="search">
                            <i class="fa fa-search"></i>
                        </li>
                        <li>
                            <div class="humberger-wrapper d-none d-lg-block">

                                <div role="navigation" class="humberger-menu">
                                    <div id="menuToggle">
                                        <input type="checkbox" />
                                        <span></span>
                                        <span class="second"></span>
                                        <span></span>
                                        
                                        <ul id="menu">
                                             @if (Route::has('login'))
                                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                            <li>
                                            <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline">{{Auth::guard('web')->user()->name}}</a></li>
                                             <li>
                                            <a href="{{ url('/front/logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a></li>
                                            @else
                                            
                                            <li><a href="{{route('login')}}">Sign In</a></li>
                                            @if (Route::has('register'))
                                            <li><a href="{{route('register')}}">Sign Up</a></li>
                                            @endif
                                            @endauth
                                            </div>
                                            @endif
                                            
                                            
                                          
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->