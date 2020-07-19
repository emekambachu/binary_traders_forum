@extends('layouts.main')

@section('title')
    Services
@endsection

@section('contents')
    <section class="inner-banner has-dot-pattern">
        <div class="container">
            <h2>About us</h2>
            <span class="decor-line"></span>
            <ul class="list-inline bread-cumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>Services</span></li>
            </ul><!-- /.list-inline -->
        </div><!-- /.container -->
    </section>

    <section class="sec-pad service-page sidebar-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 pull-left">
                    <div class="single-sidebar">
                        <div class="sidebar-links">
                            <ul>
                                <li><a href="#">Company Overview</a></li>
                                <li><a href="#">Process Management</a></li>
                                <li><a href="#">Customer Relationship</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Development &amp; Integration</a></li>
                                <li><a href="#">Information Ecosystem</a></li>
                            </ul>
                        </div><!-- /.sidebar-links -->
                    </div><!-- /.single-sidebar -->
                    <div class="single-sidebar">
                        <div class="download-broucher ">
                            <div class="img-box text-center">
                                <img src="{{ asset('img/resources/broucher.png') }}" alt="Awesome Image">
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <a href="#"><i class="fa fa-file-pdf-o"></i> Company Presentation <i class="fa fa-chevron-circle-right"></i></a>
                            </div><!-- /.text-box -->
                        </div><!-- /.download-broucher -->
                    </div><!-- /.single-sidebar -->
                    <div class="single-sidebar">
                        <div class="testimonial-widget">
                            <div class="title">
                                <h3>Testimonials</h3>
                                <span class="decor-line"></span>
                            </div><!-- /.title -->
                            <div class="testimonial-widget-carousel owl-carousel owl-theme owl-loaded">
                                <!-- /.item -->
                                <!-- /.item -->
                                <!-- /.item -->
                                <!-- /.item -->
                                <!-- /.item -->
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-4152px, 0px, 0px); transition: all 0.25s ease 0s; width: 6228px;"><div class="owl-item cloned" style="width: 692px; margin-right: 0px;"><div class="item">
                                                <div class="single-testimonial-widget">
                                                    <i class="fn-icon-quotation-mark"></i>
                                                    <p>How this mistaken denouncing pleasure praising pains was born and will give a complete account of the system, and expound the teachings of finance.</p>
                                                    <div class="name-box">
                                                        <div class="icon-box">
                                                            <img src="{{ asset('img/resources/testi-1.png') }}" alt="Awesome Image">
                                                        </div><!-- /.icon-box -->
                                                        <div class="text-box">
                                                            <h4>William Steves</h4>
                                                            <span>CEO &amp; Founder</span>
                                                        </div><!-- /.text-box -->
                                                    </div><!-- /.name-box -->
                                                </div><!-- /.single-testimonial-widget -->
                                            </div></div><div class="owl-item cloned" style="width: 692px; margin-right: 0px;"><div class="item">
                                                <div class="single-testimonial-widget">
                                                    <i class="fn-icon-quotation-mark"></i>
                                                    <p>How this mistaken denouncing pleasure praising pains was born and will give a complete account of the system, and expound the teachings of finance.</p>
                                                    <div class="name-box">
                                                        <div class="icon-box">
                                                            <img src="{{ asset('img/resources/testi-1.png') }}" alt="Awesome Image">
                                                        </div><!-- /.icon-box -->
                                                        <div class="text-box">
                                                            <h4>William Steves</h4>
                                                            <span>CEO &amp; Founder</span>
                                                        </div><!-- /.text-box -->
                                                    </div><!-- /.name-box -->
                                                </div><!-- /.single-testimonial-widget -->
                                            </div></div><div class="owl-item" style="width: 692px; margin-right: 0px;"><div class="item">
                                                <div class="single-testimonial-widget">
                                                    <i class="fn-icon-quotation-mark"></i>
                                                    <p>How this mistaken denouncing pleasure praising pains was born and will give a complete account of the system, and expound the teachings of finance.</p>
                                                    <div class="name-box">
                                                        <div class="icon-box">
                                                            <img src="{{ asset('img/resources/testi-1.png') }}" alt="Awesome Image">
                                                        </div><!-- /.icon-box -->
                                                        <div class="text-box">
                                                            <h4>William Steves</h4>
                                                            <span>CEO &amp; Founder</span>
                                                        </div><!-- /.text-box -->
                                                    </div><!-- /.name-box -->
                                                </div><!-- /.single-testimonial-widget -->
                                            </div></div><div class="owl-item" style="width: 692px; margin-right: 0px;"><div class="item">
                                                <div class="single-testimonial-widget">
                                                    <i class="fn-icon-quotation-mark"></i>
                                                    <p>How this mistaken denouncing pleasure praising pains was born and will give a complete account of the system, and expound the teachings of finance.</p>
                                                    <div class="name-box">
                                                        <div class="icon-box">
                                                            <img src="{{ asset('img/resources/testi-1.png') }}" alt="Awesome Image">
                                                        </div><!-- /.icon-box -->
                                                        <div class="text-box">
                                                            <h4>William Steves</h4>
                                                            <span>CEO &amp; Founder</span>
                                                        </div><!-- /.text-box -->
                                                    </div><!-- /.name-box -->
                                                </div><!-- /.single-testimonial-widget -->
                                            </div></div><div class="owl-item" style="width: 692px; margin-right: 0px;"><div class="item">
                                                <div class="single-testimonial-widget">
                                                    <i class="fn-icon-quotation-mark"></i>
                                                    <p>How this mistaken denouncing pleasure praising pains was born and will give a complete account of the system, and expound the teachings of finance.</p>
                                                    <div class="name-box">
                                                        <div class="icon-box">
                                                            <img src="{{ asset('img/resources/testi-1.png') }}" alt="Awesome Image">
                                                        </div><!-- /.icon-box -->
                                                        <div class="text-box">
                                                            <h4>William Steves</h4>
                                                            <span>CEO &amp; Founder</span>
                                                        </div><!-- /.text-box -->
                                                    </div><!-- /.name-box -->
                                                </div><!-- /.single-testimonial-widget -->
                                            </div></div><div class="owl-item" style="width: 692px; margin-right: 0px;"><div class="item">
                                                <div class="single-testimonial-widget">
                                                    <i class="fn-icon-quotation-mark"></i>
                                                    <p>How this mistaken denouncing pleasure praising pains was born and will give a complete account of the system, and expound the teachings of finance.</p>
                                                    <div class="name-box">
                                                        <div class="icon-box">
                                                            <img src="{{ asset('img/resources/testi-1.png') }}" alt="Awesome Image">
                                                        </div><!-- /.icon-box -->
                                                        <div class="text-box">
                                                            <h4>William Steves</h4>
                                                            <span>CEO &amp; Founder</span>
                                                        </div><!-- /.text-box -->
                                                    </div><!-- /.name-box -->
                                                </div><!-- /.single-testimonial-widget -->
                                            </div></div><div class="owl-item active" style="width: 692px; margin-right: 0px;"><div class="item">
                                                <div class="single-testimonial-widget">
                                                    <i class="fn-icon-quotation-mark"></i>
                                                    <p>How this mistaken denouncing pleasure praising pains was born and will give a complete account of the system, and expound the teachings of finance.</p>
                                                    <div class="name-box">
                                                        <div class="icon-box">
                                                            <img src="{{ asset('img/resources/testi-1.png') }}" alt="Awesome Image">
                                                        </div><!-- /.icon-box -->
                                                        <div class="text-box">
                                                            <h4>William Steves</h4>
                                                            <span>CEO &amp; Founder</span>
                                                        </div><!-- /.text-box -->
                                                    </div><!-- /.name-box -->
                                                </div><!-- /.single-testimonial-widget -->
                                            </div></div><div class="owl-item cloned" style="width: 692px; margin-right: 0px;"><div class="item">
                                                <div class="single-testimonial-widget">
                                                    <i class="fn-icon-quotation-mark"></i>
                                                    <p>How this mistaken denouncing pleasure praising pains was born and will give a complete account of the system, and expound the teachings of finance.</p>
                                                    <div class="name-box">
                                                        <div class="icon-box">
                                                            <img src="{{ asset('img/resources/testi-1.png') }}" alt="Awesome Image">
                                                        </div><!-- /.icon-box -->
                                                        <div class="text-box">
                                                            <h4>William Steves</h4>
                                                            <span>CEO &amp; Founder</span>
                                                        </div><!-- /.text-box -->
                                                    </div><!-- /.name-box -->
                                                </div><!-- /.single-testimonial-widget -->
                                            </div></div><div class="owl-item cloned" style="width: 692px; margin-right: 0px;"><div class="item">
                                                <div class="single-testimonial-widget">
                                                    <i class="fn-icon-quotation-mark"></i>
                                                    <p>How this mistaken denouncing pleasure praising pains was born and will give a complete account of the system, and expound the teachings of finance.</p>
                                                    <div class="name-box">
                                                        <div class="icon-box">
                                                            <img src="{{ asset('img/resources/testi-1.png') }}" alt="Awesome Image">
                                                        </div><!-- /.icon-box -->
                                                        <div class="text-box">
                                                            <h4>William Steves</h4>
                                                            <span>CEO &amp; Founder</span>
                                                        </div><!-- /.text-box -->
                                                    </div><!-- /.name-box -->
                                                </div><!-- /.single-testimonial-widget -->
                                            </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div><div class="owl-next" style=""><i class="fa fa-angle-right"></i></div></div><div style="display: none;" class="owl-dots"></div></div></div><!-- /.testimonial-widget-carousel owl-carousel owl-theme -->
                        </div><!-- /.testimonial-widget -->
                    </div><!-- /.single-sidebar -->
                </div><!-- /.col-md-9 -->
                <div class="col-md-9 pull-right  col-sm-12 col-xs-12">
                    <div class="row ">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-service-page-box">
                                <div class="img-holder">
                                    <img src="{{ asset('img/services/service-1.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fn-icon-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div><!-- /.img-holder -->
                                <div class="title">
                                    <h3>Mutual Funds</h3>
                                    <span class="decor-line"></span>
                                </div><!-- /.title -->
                            </div><!-- /.single-service-page-box -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="single-service-page-box">
                                <div class="img-holder">
                                    <img src="{{ asset('img/services/service-2.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fn-icon-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div><!-- /.img-holder -->
                                <div class="title">
                                    <h3>Investment Planning</h3>
                                    <span class="decor-line"></span>
                                </div><!-- /.title -->
                            </div><!-- /.single-service-page-box -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="single-service-page-box">
                                <div class="img-holder">
                                    <img src="{{ asset('img/services/service-3.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fn-icon-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div><!-- /.img-holder -->
                                <div class="title">
                                    <h3>Personal Insurance</h3>
                                    <span class="decor-line"></span>
                                </div><!-- /.title -->
                            </div><!-- /.single-service-page-box -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="single-service-page-box">
                                <div class="img-holder">
                                    <img src="{{ asset('img/services/service-4.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fn-icon-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div><!-- /.img-holder -->
                                <div class="title">
                                    <h3>Industrial Insurance</h3>
                                    <span class="decor-line"></span>
                                </div><!-- /.title -->
                            </div><!-- /.single-service-page-box -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="single-service-page-box">
                                <div class="img-holder">
                                    <img src="{{ asset('img/services/service-5.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fn-icon-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div><!-- /.img-holder -->
                                <div class="title">
                                    <h3>Commodities Trading</h3>
                                    <span class="decor-line"></span>
                                </div><!-- /.title -->
                            </div><!-- /.single-service-page-box -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="single-service-page-box">
                                <div class="img-holder">
                                    <img src="{{ asset('img/services/service-6.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fn-icon-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div><!-- /.img-holder -->
                                <div class="title">
                                    <h3>Retirement Planning</h3>
                                    <span class="decor-line"></span>
                                </div><!-- /.title -->
                            </div><!-- /.single-service-page-box -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="single-service-page-box">
                                <div class="img-holder">
                                    <img src="{{ asset('img/services/service-7.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fn-icon-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div><!-- /.img-holder -->
                                <div class="title">
                                    <h3>Wealth Management</h3>
                                    <span class="decor-line"></span>
                                </div><!-- /.title -->
                            </div><!-- /.single-service-page-box -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="single-service-page-box">
                                <div class="img-holder">
                                    <img src="{{ asset('img/services/service-8.jpg') }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fn-icon-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div><!-- /.img-holder -->
                                <div class="title">
                                    <h3>Audit &amp; Tax Planning</h3>
                                    <span class="decor-line"></span>
                                </div><!-- /.title -->
                            </div><!-- /.single-service-page-box -->
                        </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
