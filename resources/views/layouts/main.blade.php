<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Avitore">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Binary Traders Forum">
    <meta name="keywords" content="Binary Traders Forum" />

    <title>@yield('title') | Binary Traders Forum</title>

    <link href="{{ asset('binary_traders_forum_favicon.png') }}" rel="shortcut icon" type="image/png">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    @yield('top-assets')

</head>

<body>
<!-- Preloader Start -->
<div class="preloader"></div>
<!-- Preloader End -->

<!-- header Start -->
<header class="header-style-two">
    <div class="header-wrapper">
        <div class="header-top-area bg-primary-color d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 header-top-left-part">
                        <span class="address"><i class="webexflaticon flaticon-placeholder-1"></i> No.17 Addison Ave,Palo Alto, California</span>
                        <span class="phone"><i class="webexflaticon flaticon-send"></i> info@binarytradersforum.com</span>
                    </div>
                    <div class="col-lg-6 header-top-right-part text-right">
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="language">
                            <a class="language-btn" href="#"><i class="webexflaticon flaticon-internet"></i> English</a>
                            <ul class="language-dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Bangla</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">Arabic</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-between">
                        <a class="navbar-brand logo" href="{{ url('/') }}">
                            <img id="logo-image" class="img-center" src="{{ asset('binary_traders_forum_logo.png') }}" alt="">
                        </a>
                        <div class="topbar-info-area d-none d-sm-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center mr-3">
                                <i class="webexflaticon flaticon-mail-1 text-primary-color"></i>
                                <div>
                                    <h6>Email Us</h6>
                                    <a class="text-gray" href="mailto:info@binarytradersforum.com">info@binarytradersforum.com</a>
                                </div>
                            </div>
                            <div class="d-none d-md-flex align-items-center">
                                <i class="webexflaticon flaticon-phone-1 text-primary-color"></i>
                                <div>
                                    <h6>Call Us</h6>
                                    <a class="text-gray" href="tel:+8801234567899"> +88-01234-567899</a>
                                </div>
                            </div>
                            <div class="d-none d-lg-flex align-items-center ml-4">
                                <a href="{{ route('register') }}" class="cs-btn-one btn-primary-color mr-2">Sign Up</a>
                                <a href="{{ route('login') }}" class="cs-btn-one btn-primary-color">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-navigation-area three-layers-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('investment') }}">Investment Plans</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('services') }}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('about') }}">About us</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('contact') }}">Contact</a>
                                    </li>
                                    <li>
                                        <a style="color: #0972C9;" href="{{ route('register') }}">Register</a>
                                    </li>
                                    <li>
                                        <a style="color: #0972C9;" href="{{ route('login') }}">Login</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="side-panel-content">
                            <div class="close-icon">
                                <button><i class="webex-icon-cross"></i></button>
                            </div>
                            <div class="side-panel-logo mrb-30">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('binary_traders_forum_logo.png') }}" alt="" />
                                </a>
                            </div>
                            <div class="side-info mrb-30">
                                <div class="side-panel-element mrb-25">
                                    <h4 class="mrb-10">Office Address</h4>
                                    <ul class="list-items">
                                        <li><span class="fa fa-map-marker mrr-10 text-primary-color"></span>
                                            No.17 Addison Ave,Palo Alto, California</li>
                                        <li><span class="fa fa-envelope mrr-10 text-primary-color"></span>
                                            info@binarytradersforum.com</li>
                                        <li><span class="fa fa-phone mrr-10 text-primary-color"></span>
                                            (00) 2500-123-4567</li>
                                    </ul>
                                </div>

                            </div>
                            <h4 class="mrb-15">Social List</h4>
                            <ul class="social-list">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header End -->

@yield('contents')

<!-- Footer Area Start -->
<footer class="footer">
    <div class="footer-main-area" data-background="images/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="widget footer-widget">
                        <img src="{{ asset('binary_traders_forum_logo.png') }}" alt="" class="mrb-20">
                        <address class="mrb-25">
                            <p class="text-light-gray">No.17 Addison Ave,Palo Alto, California</p>
                            <div class="display-inline-block mrb-5"><a href="#" class="text-light-gray"><i class="fa fa-phone mrr-10"></i>+088 234 432 15565</a></div>
                            <div class="display-inline-block mrb-5"><a href="#" class="text-light-gray"><i class="fa fa-envelope mrr-10"></i>info@binarytradersforum.com</a></div>
                        </address>
                        <ul class="social-list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="widget footer-widget">
                        <h5 class="widget-title text-white mrb-30">Recent News</h5>
                        <div class="single-post media mrb-20">
                            <div class="post-image mrr-20">
                                <img src="{{ asset('images/footer/recent-post_01.png') }}" alt="">
                            </div>
                            <div class="post-content media-body align-self-center">
                                <h5 class="text-light-gray mrb-10"><a href="#">Business Solution</a></h5>
                                <h6 class="text-dark-light f-weight-500"><i class="fa fa-clock-o mrr-5"></i>26 April, 2020</h6>
                            </div>
                        </div>
                        <div class="single-post media mrb-20">
                            <div class="post-image mrr-20">
                                <img src="{{ asset('images/footer/recent-post_02.png') }}" alt="">
                            </div>
                            <div class="post-content media-body align-self-center">
                                <h5 class="text-light-gray mrb-10"><a href="#">Business Solution</a></h5>
                                <h6 class="text-dark-light f-weight-500"><i class="fa fa-clock-o mrr-5"></i>26 April, 2020</h6>
                            </div>
                        </div>
                        <div class="single-post media">
                            <div class="post-image mrr-20">
                                <img src="{{ asset('images/footer/recent-post_03.png') }}" alt="">
                            </div>
                            <div class="post-content media-body align-self-center">
                                <h5 class="text-light-gray mrb-10"><a href="#">Business Solution</a></h5>
                                <h6 class="text-dark-light f-weight-500"><i class="fa fa-clock-o mrr-5"></i>26 April, 2020</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6">
                    <div class="widget footer-widget">
                        <h5 class="widget-title text-white mrb-30">Useful Links</h5>
                        <ul class="footer-widget-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('investment') }}">Investment Plans</a></li>
                            <li><a href="{{ url('services') }}">Services</a></li>
                            <li><a href="{{ url('about') }}">About us</a></li>
                            <li><a href="{{ url('contact') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="widget footer-widget">
                        <h5 class="widget-title text-white mrb-30">Newsletter</h5>
                        <input type="text" class="form-control" placeholder="Enter Your Email">
                        <a href="#" class="cs-btn-one btn-primary-color btn-sm has-icon mrt-20"><i class="webexflaticon flaticon-send"></i>Submit Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <span class="text-light-gray">Copyright © {{ date('Y') }} | All rights reserved </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- Footer Area End -->

<!-- BACK TO TOP SECTION -->
<div class="back-to-top bg-primary-color">
    <i class="fab fa-angle-up"></i>
</div>

<!-- Integrated important scripts here -->
<script src="{{ asset('js/jquery.v1.12.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-core-plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/slider_v1.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
</body>

</html>
