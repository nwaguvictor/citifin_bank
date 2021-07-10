<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }} - Citifin Bank</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/favicon.ico') }}">

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Nice-select css -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- magnific css -->
    <link rel="stylesheet" href="{{ asset('css/magnific.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- modernizr css -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>

    <div id="preloader"></div>
    <!-- Start Header Area -->
    <header class="header-one">
        <!-- Start header top bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row">
                    <div class=" col-md-6 col-sm-6 col-xs-12">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@bultifor.com</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> Live support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="topbar-right">
                            <ul>
                                <li><a href="#"><img src="{{ asset('img/icon/w1.png') }}" alt="">ENG</a>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('img/icon/w2.png') }}" alt="">DEU</a>
                                        <li><a href="#"><img src="{{ asset('img/icon/w3.png') }}" alt="">ESP</a>
                                        <li><a href="#"><img src="{{ asset('img/icon/w4.png') }}" alt="">FRA</a>
                                        <li><a href="#"><img src="{{ asset('img/icon/w5.png') }}" alt="">KSA</a>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End header top bar -->
        <!-- Start header menu area -->
        <div id="sticker" class="header-area hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <!-- logo start -->
                            <div class="col-md-3 col-sm-3">
                                <div class="logo">
                                    <!-- Brand -->
                                    <a class="navbar-brand page-scroll" href="{{ route('frontend.index') }}">
                                        <img src="{{ asset('img/logo/logo2.png') }}" alt="site logo">
                                    </a>
                                </div>
                                <!-- logo end -->
                            </div>
                            <div class="col-md-9 col-sm-9">
                                @if (Auth::user())
                                <div class="header-right-link">
                                    <!-- search option end -->
                                    <a class="s-menu" style="background-color: brown; border-color: brown" href="#">Logout</a>
                                </div>
                                @else
                                <div class="header-right-link">
                                    <!-- search option end -->
                                    <a class="s-menu" href="{{ route('frontend.register') }}">Register</a>
                                </div>
                                @endif
                                <!-- mainmenu start -->
                                <nav class="navbar navbar-default">
                                    <div class="collapse navbar-collapse" id="navbar-example">
                                        <div class="main-menu">
                                            <ul class="nav navbar-nav navbar-right">
                                                @if (!Auth::user())
                                                <li><a class="pages" href="{{ route('frontend.index') }}">Home</a></li>
                                                <li><a href="{{ route('frontend.about') }}">About us</a></li>
                                                <li><a href="{{ route('frontend.contact') }}">Contact us</a></li>
                                                @else
                                                <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!-- mainmenu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End header menu area -->
        <!-- Start mobile menu area -->
        <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <div class="logo">
                                <a href="{{ route('frontend.index') }}"><img src="{{ asset('img/logo/logo2.png') }}" alt="" /></a>
                            </div>
                            <nav id="dropdown">
                                <ul>
                                    <li><a class="pages" href="{{ route('frontend.index') }}">Home</a></li>
                                    <li><a href="{{ route('frontend.about') }}">About us</a></li>
                                    <li><a href="{{ route('frontend.contact') }}">Contact us</a></li>
                                    <a class="s-menu" href="{{ route('frontend.register') }}">Register</a>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End mobile menu area -->
    </header>
    <!--  End Header Area -->

    {{-- Content --}}
    @yield('content')

    <!-- Start footer area -->
    <footer class="footer-1">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                   <!-- Start column-->
                   <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-content logo-footer">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <a class="footer-black-logo" href="{{ route('frontend.index') }}"><img src="{{ asset('img/logo/logo2.png') }}" alt="site logo"></a>
                                </div>
                                <p>
                                    Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create. Replacing a  maintains the amount of lines.
                                </p>
                                <div class="subs-feilds">
                                    <div class="suscribe-input">
                                        <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                        <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End column-->
                    <!-- Start column-->
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Products</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Bank Card</a></li>
                                    <li><a href="#">Deposit Skim</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Software</a></li>
                                    <li><a href="#">Branding </a></li>
                                    <li><a href="#">Promotion </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End column-->
                    <!-- Start column-->
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Payments</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Send Mony</a></li>
                                    <li><a href="#">Receive Money </a></li>
                                    <li><a href="#">Shopping</a></li>
                                    <li><a href="#">Online payment</a></li>
                                    <li><a href="#">pay a Friend </a></li>
                                    <li><a href="#">pay a bill </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End column-->
                    <!-- Start column-->
                    <div class="col-md-2 hidden-sm col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Company</h4>
                                <ul class="footer-list">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Services </a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Promotion</a></li>
                                    <li><a href="#">Transition</a></li>
                                    <li><a href="#">Social Media</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End column-->
                    <!-- Start column-->
                    <div class="col-md-2 hidden-sm col-xs-12">
                         <div class="footer-content last-content">
                            <div class="footer-head">
                                <h4>Support</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Customer Care</a></li>
                                    <li><a href="#">Live chat</a></li>
                                    <li><a href="#">Notification</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                    <li><a href="#">Contact us </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End column-->
                </div>
            </div>
        </div>
        <!-- Start footer bottom area -->
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright">
                            <p>
                                Copyright © 2020
                                <a href="#">Bultifore</a> All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End footer bottom area -->
    </footer>
    <!-- End footer area -->

    <!-- all js here -->

    <!-- jquery latest version -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- stellar js -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <!-- magnific js -->
    <script src="{{ asset('js/magnific.min.js') }}"></script>
    <!-- Nice-select js -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- Form validator js -->
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
