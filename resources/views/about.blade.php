@extends('layouts.main')

@section('title')
    About
@endsection

@section('contents')
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="text-uppercase text-white mrb-10">About Us</h2>
                    <ul class="mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item" style="color: #3d9bef;">About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section pdt-110 pdb-110 pdb-md-40" data-background="{{ asset('images/bg/abs-bg7.png') }}">
        <div class="container">
            <div class="row mrb-80 mrb-lg-70">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="features-item">
                        <i class="webexflaticon flaticon-analysis-2"></i>
                        <h4 class="feature-title"><a href="">Investment & Planning</a></h4>
                        <p class="mrb-0">A wide selection of investment product which include forex, crypto and stock options, to help build diversified portfolio.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="features-item">
                        <i class="webexflaticon flaticon-presentation"></i>
                        <h4 class="feature-title"><a href="">Trading</a></h4>
                        <p class="mrb-0">Powerful trading tools, resources and support.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="features-item">
                        <i class="webexflaticon flaticon-profits"></i>
                        <h4 class="feature-title"><a href="">Advisor Network</a></h4>
                        <p class="mrb-0">Specialized guidance from independent local advisor for high-net-worth investors.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="about-image">
                        <img class="image-link mrb-lg-50 mrt-5" src="{{ asset('images/about/1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <h5 class="mrb-15 text-primary-color">Who We Are?</h5>
                    <h2 class="title-under-line mrb-70">We have 25+ Years Business Experiences</h2>
                    <p class="mrb-50">
                        Binary Traders Forum is a fund management company aimed at making maximum profits for our clients. We know the games brokers play. Being fund managers, we have created this framework of impeccable standards with complete transparency and the latest in trading technology.
                    </p>
                    <p class="mrb-50">Our market depth and knowledge are attributed to our acquired experience on trading floors of many exchanges. With over $5.3 Trillion traded daily in the foreign exchange market and over $200 billion traded in the cryptospace, we are dedicated to giving our clients their own share of the profits regularly.</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                            <div class="about-icon-box mrb-md-70 mrb-md-40">
                                <div class="icon">
                                    <span class="webexflaticon flaticon-wallet"></span>
                                </div>
                                <h5 class="title">Low Cost</h5>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                            <div class="about-icon-box mrb-md-70 mrb-md-40">
                                <div class="icon">
                                    <span class="webexflaticon flaticon-diamond"></span>
                                </div>
                                <h5 class="title">Quality Work</h5>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                            <div class="about-icon-box mrb-md-70">
                                <div class="icon">
                                    <span class="webexflaticon flaticon-rocket"></span>
                                </div>
                                <h5 class="title">Fast Delivery</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- divider Section Start -->
    <section class="bg-silver-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-6 bg-cover popup-video-block video-popup text-center" data-background="images/bg/vid.jpg">
                    <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="popup-video popup-youtube">
                        <i class="icon webex-icon-Play" aria-hidden="true"></i>
                        <span class="pulse-animation"></span>
                    </a>
                </div>
                <div class="col-lg-12 col-xl-6 p-0">
                    <div class="divider-gap">
                        <h2 class="mrb-25">Why Choose Binary Traders Forum for Consulting Service.</h2>
                        <div class="icon-box-two mrb-40">
                            <div class="icon bg-primary-color f-left">
                                <span class="webexflaticon flaticon-target-1"></span>
                            </div>
                            <div class="icon-details ">
                                <h4 class="icon-box-title mrb-10">We are Committed to Quality</h4>
                            </div>
                        </div>
                        <div class="icon-box-two mrb-40">
                            <div class="icon bg-primary-color f-left">
                                <span class="webexflaticon flaticon-plan"></span>
                            </div>
                            <div class="icon-details ">
                                <h4 class="icon-box-title mrb-10">We Care About Your Business</h4>
                            </div>
                        </div>
                        <div class="icon-box-two">
                            <div class="icon bg-primary-color f-left">
                                <span class="webexflaticon flaticon-guarantee"></span>
                            </div>
                            <div class="icon-details ">
                                <h4 class="icon-box-title mrb-10">100% Satisfaction Guarantee</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider Section End -->

    <!-- Funfact Section Start -->
    <section class="pdt-110 pdb-40" data-background="{{ asset('images/bg/5.jpg') }}" data-overlay-dark="4">
        <div class="section-content section-white-typo text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                        <div class="funfact mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-briefcase-1"></span>
                            </div>
                            <h2 class="counter">1450</h2>
                            <h5 class="title">Projects Succeed</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                        <div class="funfact mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-like-3"></span>
                            </div>
                            <h2 class="counter">1864</h2>
                            <h5 class="title">Peoples Likes</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                        <div class="funfact mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-trophy-1"></span>
                            </div>
                            <h2 class="counter">1280</h2>
                            <h5 class="title">Awards Achieved</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
                        <div class="funfact mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-employee-2"></span>
                            </div>
                            <h2 class="counter">678</h2>
                            <h5 class="title">Team Members</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Funfact Section End -->

@endsection
