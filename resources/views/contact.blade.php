@extends('layouts.main')

@section('title')
    Contact us
@endsection

@section('contents')
    <section class="inner-banner has-dot-pattern">
        <div class="container">
            <h2>Get Touch With Us</h2>
            <span class="decor-line"></span>
            <ul class="list-inline bread-cumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>Contact us</span></li>
            </ul><!-- /.list-inline -->
        </div><!-- /.container -->
    </section>

    <section class="sec-pad contact-page">
        <div class="container">
            <div class="col-md-8">

                <div class="sec-title">
                    <h2>Contact Form</h2>
                    <span class="decor-line">
					<span class="decor-line-inner"></span>
				</span>
                </div>

                <form action="" class="contact-form" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="text" name="name" placeholder="Your Name *">
                            </div><!-- /.form-grp -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="text" name="email" placeholder="Email Address *">
                            </div><!-- /.form-grp -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="text" name="phone" placeholder="Phone">
                            </div><!-- /.form-grp -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="text" name="subject" placeholder="Subject*">
                            </div><!-- /.form-grp -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12">
                            <div class="form-grp">
                                <textarea name="message" placeholder="Message*"></textarea>
                            </div><!-- /.form-grp -->
                            <button type="submit" class="thm-btn">Submit Now</button>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                    <div class="form-result"></div><!-- /.form-result -->
                </form>
            </div><!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="sec-title">
                    <h2>Get Touch With Us</h2>
                    <span class="decor-line">
					<span class="decor-line-inner"></span>
				</span>
                </div>
                <div class="contact-info-box">
                    <p>There are many variations off passages available, but the majority have suffered alterattions in some forms by injected humour look events slightly believable ut  seds do eiusmod tempor incididunt labore.</p>
                    <ul class="info-items">
                        <li>
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="fn-icon-international-delivery"></i>
                                </div><!-- /.inner-box -->
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <h3>Address :</h3>
                                <p>555 west 5th street, 35th Floor, Los Angeles, California</p>
                            </div><!-- /.text-box -->
                        </li>
                        <li>
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="fa fa-envelope"></i>
                                </div><!-- /.inner-box -->
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <h3>Ask Anything Here :</h3>
                                <p>info@digitalmetricsinvest.com</p>
                            </div><!-- /.text-box -->
                        </li>
                    </ul><!-- /.info-items -->
                </div><!-- /.contact-info-box -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.container -->
    </section>
@endsection
