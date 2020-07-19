@extends('layouts.main')

@section('title')
Home
@endsection

@section('contents')
    <!-- START REVOLUTION SLIDER 5.4.2 -->
    <div id="banner-container" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
        <div id="banner-slide" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
            <div class="slotholder"></div>
            <ul>
                <!-- SLIDE  -->
                <!-- SLIDE 1 -->
                <li data-index="rs-01" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/bg/slide1.jpg') }}" alt="" data-bgposition="center 30%" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption title-slide color-white" id="slide-01-layer-1" data-x="['left','left','left','left']" data-hoffset="['39','39','39','39']" data-y="['middle','middle','middle','middle']" data-voffset="['-95','-65','-77','-90']" data-fontsize="['55','52','45','35']" data-lineheight="['60','57','50','40']" data-fontweight="['800','800','800','800']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0" data-paddingleft="[0,0,0,0]" style="z-index: 16; white-space: nowrap;">Make a Good Plan &<br> Grow Your Business
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sub-title color-white" id="slide-01-layer-4" data-x="['left','left','left','left']" data-hoffset="['37','37','37','37']" data-y="['middle','middle','middle','middle']" data-voffset="['30','30','30','0']" data-fontsize="['20',18','18','18']" data-lineheight="['30','30','30','28']" data-fontweight="['400','400','400','400']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":700,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17; white-space: nowrap;">We have almost 35+ years of experience for <br>providing consulting services solutions
                    </div>
                    <a href="{{ route('register') }}" target="_self" class="tp-caption cs-btn-one btn-primary-color" data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-x="['left','left','left','left']" data-hoffset="['36','36','36','36']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','120','80']" data-fontsize="['14','14','14','14']" data-width="['auto']" data-height="['auto']">Sign Up
                    </a>
                    <!-- END LAYER LINK -->
                    <a href="{{ url('contact') }}" target="_self" class="tp-caption cs-btn-one border btn-transparent" data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-x="['left','left','left','left']" data-hoffset="['250','250','250','245']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','120','80']" data-fontsize="['14','14','14','14']" data-width="['auto']" data-height="['auto']">Contact Us
                    </a>
                </li>
                <!-- SLIDE 2 -->
                <li data-index="rs-02" data-transition="random-static" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="HTML5 Video" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/bg/slide5.jpg') }}" alt="img3" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption title-slide color-white" id="slide-02-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-120','-33','-90','-90']" data-fontsize="['58','55','45','38']" data-lineheight="['65','57','55','45']" data-fontweight="['800','800','800','800']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0" data-paddingleft="[0,0,0,0]" style="z-index: 16; white-space: nowrap;">A Good Planning is <br> Key of Success
                    </div>

                    <a href="{{ url('investment') }}" target="_self" class="tp-caption cs-btn-one btn-primary-color" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['100','80','90','90']" data-fontsize="['14',14','14','14']" data-width="['auto']" data-height="['auto']">Investment Plans
                    </a><!-- END LAYER LINK -->
                </li>
                <!-- SLIDE 3 -->
                <li data-index="rs-03" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/bg/slide3.jpg') }}" alt="" data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption title-slide color-white" id="slide-03-layer-1" data-x="['left','left','left','left']" data-hoffset="['39','39','39','39']" data-y="['middle','middle','middle','middle']" data-voffset="['-95','-65','-77','-90']" data-fontsize="['55','52','45','35']" data-lineheight="['60','57','50','40']" data-fontweight="['800','800','800','800']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0" data-paddingleft="[0,0,0,0]" style="z-index: 16; white-space: nowrap;">Let us Manage<br> Your Financial Portfolio</div>

                    <a href="{{ route('register') }}" target="_self" class="tp-caption cs-btn-one btn-primary-color" data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-x="['left','left','left','left']" data-hoffset="['36','36','36','36']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','120','80']" data-fontsize="['14','14','14','14']" data-width="['auto']" data-height="['auto']">Sign up
                    </a>
                    <!-- END LAYER LINK -->
                    <a href="{{ url('contact') }}" target="_self" class="tp-caption cs-btn-one border btn-transparent" data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-x="['left','left','left','left']" data-hoffset="['250','250','250','245']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','120','80']" data-fontsize="['14','14','14','14']" data-width="['auto']" data-height="['auto']">Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <!-- About Section Start -->
    <section class="about-section pdt-110 pdb-110 pdb-md-40" data-background="{{ asset('images/bg/abs-bg7.png') }}">
        <div class="container">
            <div class="row mrb-80 mrb-lg-70">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="features-item">
                        <i class="webexflaticon flaticon-analysis-2"></i>
                        <h4 class="feature-title"><a href="#">Investment & Planning</a></h4>
                        <p class="mrb-0">Lorem Ipsum is simply dummy text of the printing and typesetting indstry. lpsum has been the</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="features-item">
                        <i class="webexflaticon flaticon-presentation"></i>
                        <h4 class="feature-title"><a href="#">Finance & Management</a></h4>
                        <p class="mrb-0">Lorem Ipsum is simply dummy text of the printing and typesetting indstry. lpsum has been the</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="features-item">
                        <i class="webexflaticon flaticon-profits"></i>
                        <h4 class="feature-title"><a href="#">Business Maintanance</a></h4>
                        <p class="mrb-0">Lorem Ipsum is simply dummy text of the printing and typesetting indstry. lpsum has been the</p>
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
                    <p class="mrb-25">Business applications through revolutionary catalysts for procedures whereas processes. Development optimal alignments for intuitive.</p>
                    <p class="mrb-50">Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary catalysts for chang the Seamlessly optimal testing procedures whereas processes. Synerg stically evolve 2.0 technologies rather than just in web & apps development optimal alignments for intuitive.</p>
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
    <!-- Case Study Section Start -->
    <section class="case-study-section bg-silver-light pdt-105 pdb-80">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-8 col-xl-6">
                        <div class="section-title-block">
                            <h5 class="text-primary-color anim-box-objects text-underline mrb-15">Our Case Study</h5>
                            <h2>Let's Have a Look All Our Latest Case Study.</h2>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item mrb-30">
                            <div class="case-study-thumb">
                                <img class="img-full" src="{{ asset('images/case-study/case-study_01.jpg') }}" alt="">
                                <div class="case-study-link-icon">
                                    <a href=""><i class="webex-icon-attachment1"></i></a>
                                </div>
                                <div class="case-study-details p-4 bg-white">
                                    <h6 class="case-study-category text-primary-color mrb-5">Consulting</h6>
                                    <h4 class="case-study-title">Business Solution</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item mrb-30">
                            <div class="case-study-thumb">
                                <img class="img-full" src="{{ asset('images/case-study/case-study_02.jpg') }}" alt="">
                                <div class="case-study-link-icon">
                                    <a href=""><i class="webex-icon-attachment1"></i></a>
                                </div>
                                <div class="case-study-details p-4 bg-white">
                                    <h6 class="case-study-category text-primary-color mrb-5">Consulting</h6>
                                    <h4 class="case-study-title">Business Solution</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item mrb-30">
                            <div class="case-study-thumb">
                                <img class="img-full" src="{{ asset('images/case-study/case-study_03.jpg') }}" alt="">
                                <div class="case-study-link-icon">
                                    <a href=""><i class="webex-icon-attachment1"></i></a>
                                </div>
                                <div class="case-study-details p-4 bg-white">
                                    <h6 class="case-study-category text-primary-color mrb-5">Consulting</h6>
                                    <h4 class="case-study-title">Business Solution</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item mrb-30">
                            <div class="case-study-thumb">
                                <img class="img-full" src="{{ asset('images/case-study/case-study_04.jpg') }}" alt="">
                                <div class="case-study-link-icon">
                                    <a href=""><i class="webex-icon-attachment1"></i></a>
                                </div>
                                <div class="case-study-details p-4 bg-white">
                                    <h6 class="case-study-category text-primary-color mrb-5">Consulting</h6>
                                    <h4 class="case-study-title">Business Solution</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item mrb-30">
                            <div class="case-study-thumb">
                                <img class="img-full" src="{{ asset('images/case-study/case-study_05.jpg') }}" alt="">
                                <div class="case-study-link-icon">
                                    <a href=""><i class="webex-icon-attachment1"></i></a>
                                </div>
                                <div class="case-study-details p-4 bg-white">
                                    <h6 class="case-study-category text-primary-color mrb-5">Consulting</h6>
                                    <h4 class="case-study-title">Business Solution</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item mrb-30">
                            <div class="case-study-thumb">
                                <img class="img-full" src="{{ asset('images/case-study/case-study_06.jpg') }}" alt="">
                                <div class="case-study-link-icon">
                                    <a href=""><i class="webex-icon-attachment1"></i></a>
                                </div>
                                <div class="case-study-details p-4 bg-white">
                                    <h6 class="case-study-category text-primary-color mrb-5">Consulting</h6>
                                    <h4 class="case-study-title">Business Solution</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- case-study Section End -->

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
                        <h2 class="mrb-25">Why You Choose Enexus for Consulting Service.</h2>
                        <p class="mrb-40 mrb-sm-60">Lorem ipsum dolor quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat superior collaboration and idea.</p>
                        <div class="icon-box-two mrb-40">
                            <div class="icon bg-primary-color f-left">
                                <span class="webexflaticon flaticon-target-1"></span>
                            </div>
                            <div class="icon-details ">
                                <h4 class="icon-box-title mrb-10">We are Committed to Quality</h4>
                                <p>Seamlessly visualize quality intellectual capital without superior collaboration and idea sharing listically</p>
                            </div>
                        </div>
                        <div class="icon-box-two mrb-40">
                            <div class="icon bg-primary-color f-left">
                                <span class="webexflaticon flaticon-plan"></span>
                            </div>
                            <div class="icon-details ">
                                <h4 class="icon-box-title mrb-10">We Care About Your Business</h4>
                                <p>Seamlessly visualize quality intellectual capital without superior collaboration and idea sharing listically</p>
                            </div>
                        </div>
                        <div class="icon-box-two">
                            <div class="icon bg-primary-color f-left">
                                <span class="webexflaticon flaticon-guarantee"></span>
                            </div>
                            <div class="icon-details ">
                                <h4 class="icon-box-title mrb-10">100% Satisfaction Guarantee</h4>
                                <p>Seamlessly visualize quality intellectual capital without superior collaboration and idea sharing listically</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider Section End -->

    <!-- Funfact Section Start -->
    <section class="pdt-110 pdb-40" data-background="images/bg/5.jpg" data-overlay-dark="4">
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

    <!-- News Section Start -->
    <section class="pdt-105 pdb-85 pdb-lg-75 pdb-md-83" data-background="{{ asset('images/bg/abs-bg6.png') }}">
        <div class="section-title mrb-30 mrb-md-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h5 class="text-primary-color text-underline mrb-15">News And Updates</h5>
                        <h2 class="mrb-30">Let's Checkout our All Latest News</h2>
                    </div>
                    <div class="col-lg-4 col-xl-6 align-self-center text-left text-lg-right">
                        <a href="#" class="cs-btn-one btn-primary-color btn-md">All News</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="news-wrapper mrb-30 mrb-sm-40">
                            <div class="news-thumb">
                                <img class="img-full" src="{{ asset('images/news/01.jpg') }}" alt="">
                                <div class="news-top-meta">
                                    <span class="entry-category">Business</span>
                                </div>
                            </div>
                            <div class="news-details pdt-25">
                                <div class="news-description mb-20">
                                    <div class="news-bottom-meta mrb-15">
                                        <span class="entry-author mrr-20"><i class="fa fa-user-o mrr-10 text-primary-color"></i>Admin</span>
                                        <span class="entry-date"><i class="fa fa-calendar mrr-10 text-primary-color"></i>01 Jan, 2020</span>
                                    </div>
                                    <h4 class="the-title mrb-20"><a href="#">Tech Entrepreneur Credits Paper For Success</a></h4>
                                    <p class="the-content">There are many variations of passages of Lorem that available but majority have suffered dumm alteration</p>
                                </div>
                                <div class="news-link">
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="news-wrapper mrb-30 mrb-sm-40">
                            <div class="news-thumb">
                                <img class="img-full" src="{{ asset('images/news/02.jpg') }}" alt="">
                                <div class="news-top-meta">
                                    <span class="entry-category">Business</span>
                                </div>
                            </div>
                            <div class="news-details pdt-25">
                                <div class="news-description mb-20">
                                    <div class="news-bottom-meta mrb-15">
                                        <span class="entry-author mrr-20"><i class="fa fa-user-o mrr-10 text-primary-color"></i>Admin</span>
                                        <span class="entry-date"><i class="fa fa-calendar mrr-10 text-primary-color"></i>01 Jan, 2020</span>
                                    </div>
                                    <h4 class="the-title mrb-20"><a href="#">Tech Entrepreneur Credits Paper For Success</a></h4>
                                    <p class="the-content">There are many variations of passages of Lorem that available but majority have suffered dumm alteration</p>
                                </div>
                                <div class="news-link">
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="news-wrapper mrb-30">
                            <div class="news-thumb">
                                <img class="img-full" src="{{ asset('images/news/03.jpg') }}" alt="">
                                <div class="news-top-meta">
                                    <span class="entry-category">Business</span>
                                </div>
                            </div>
                            <div class="news-details pdt-25">
                                <div class="news-description mb-20">
                                    <div class="news-bottom-meta mrb-15">
                                        <span class="entry-author mrr-20"><i class="fa fa-user-o mrr-10 text-primary-color"></i>Admin</span>
                                        <span class="entry-date"><i class="fa fa-calendar mrr-10 text-primary-color"></i>01 Jan, 2020</span>
                                    </div>
                                    <h4 class="the-title mrb-20"><a href="#">Tech Entrepreneur Credits Paper For Success</a></h4>
                                    <p class="the-content">There are many variations of passages of Lorem that available but majority have suffered dumm alteration</p>
                                </div>
                                <div class="news-link">
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section End -->

    <!-- Clients Section Start -->
    <section class="pdt-70 pdb-70 bg-primary-color">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-carousel client-items">
                            <div class="client-item">
                                <img src="{{ asset('images/clients/client1.png') }}" alt="">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset('images/clients/client2.png') }}" alt="">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset('images/clients/client4.png') }}" alt="">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset('images/clients/client5.png') }}" alt="">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset('images/clients/client1.png') }}" alt="">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset('images/clients/client6.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Section End -->
@endsection
