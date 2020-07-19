@extends('layouts.main')

@section('title')
    Services
@endsection

@section('contents')
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="text-uppercase text-white mrb-10">Services</h2>
                    <ul class="mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item" style="color: #3d9bef;">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section Start -->
    <section class="service-section bg-light-pink pdt-110 pdt-lg-105 pdb-80">
        <div class="section-title text-center wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-8 col-xl-6">
                        <div class="section-title-block">
                            <h5 class="text-primary-color anim-box-objects text-underline mrb-15">Services We Offer</h5>
                            <h2>We Provide Best Service For Your Business</h2>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="features-item">
                            <i class="webexflaticon flaticon-analysis-2"></i>
                            <h4 class="feature-title"><a href="">Crypto Currency</a></h4>
                            <p class="mrb-0">Trade with a broad range of investments, such as stocks.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="features-item">
                            <i class="webexflaticon flaticon-presentation"></i>
                            <h4 class="feature-title"><a href="#">Forex</a></h4>
                            <p class="mrb-0">Options for investing cash including certificates of deposit and the money market funds. With CDs.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="features-item">
                            <i class="webexflaticon flaticon-profits"></i>
                            <h4 class="feature-title"><a href="#">Options Trading</a></h4>
                            <p class="mrb-0">We offer the best forex and options trading services operating closely with an expert team</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="features-item">
                            <i class="webexflaticon flaticon-analysis-2"></i>
                            <h4 class="feature-title"><a href="#">Assets Management</a></h4>
                            <p class="mrb-0">We manage assets for ROI on important projects, construction, contracts, and ect.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="features-item">
                            <i class="webexflaticon flaticon-presentation"></i>
                            <h4 class="feature-title"><a href="#">Commodities</a></h4>
                            <p class="mrb-0">A commodity is a basic of good used in commerce that is interchangeable with other commodities of same.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="features-item">
                            <i class="webexflaticon flaticon-profits"></i>
                            <h4 class="feature-title"><a href="">Funds Management</a></h4>
                            <p class="mrb-0">This offer includes the forex, crypto and options market, equity, fixed income, real estate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Request a Call Back Section Start -->
    <section class="pdt-110 pdb-110 pdb-lg-90 pdb-md-110" data-background="{{ asset('images/bg/5.jpg') }}" data-overlay-dark="4">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h6 class="text-primary-color text-underline title-shape mrb-30 text-white">Request a Call Back</h6>
                        <h2 class="text-white mrb-30">Let’s Talk About Business Consulting Service</h2>
                    </div>
                    <div class="col-lg-7 align-self-center wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="request-a-call-back-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mrb-30">
                                            <input type="text" placeholder="Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mrb-30">
                                            <input type="text" placeholder="Phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mrb-30">
                                            <input type="email" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mrb-30">
                                            <select name="categories" class="custom-select-categories" required>
                                                <option value="">Visa For</option>
                                                <option>Australia</option>
                                                <option>Canada</option>
                                                <option>United Kingdom</option>
                                                <option>USA</option>
                                                <option>Singapore</option>
                                                <option>Netherlands</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mrb-0">
                                            <button type="submit" class="cs-btn-one btn-primary-color btn-md">Request Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Request a Call Back Section End -->

@endsection
