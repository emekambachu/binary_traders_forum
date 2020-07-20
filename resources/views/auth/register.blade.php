@extends('layouts.main')

@section('title')
    Sign Up
@endsection

@section('top-assets')
    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('contents')
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="text-uppercase text-white mrb-10">Sign up</h2>
                    <ul class="mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item" style="color: #3d9bef;">Sign up</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section pdt-100 pdb-95 pdb-md-110" data-background="{{ asset('images/bg/abs-bg7.png') }}" style="background-image: url(&quot;{{ asset('images/bg/abs-bg7.png') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="mrb-80 f-weight-400 title-under-line">Our<span class="f-weight-700 text-primary-color"> Address</span></h2>
                    <div class="contact-block d-flex mrb-30">
                        <div class="contact-icon">
                            <i class="webex-icon-map1"></i>
                        </div>
                        <div class="contact-details mrl-30">
                            <h5 class="icon-box-title mrb-10">Our Address</h5>
                            <p class="mrb-0">32 Dora Creek, tuntable creek,</p>
                        </div>
                    </div>
                    <div class="contact-block d-flex mrb-30">
                        <div class="contact-icon">
                            <i class="webex-icon-Phone2"></i>
                        </div>
                        <div class="contact-details mrl-30">
                            <h5 class="icon-box-title mrb-10">Phone Number</h5>
                            <p class="mrb-0">+12 125-528-8542</p>
                        </div>
                    </div>
                    <div class="contact-block d-flex">
                        <div class="contact-icon">
                            <i class="webex-icon-envelope"></i>
                        </div>
                        <div class="contact-details mrl-30">
                            <h5 class="icon-box-title mrb-10">Email Us</h5>
                            <p class="mrb-0">info@binarytradersforum.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">

                    @include('includes.alerts')

                    <div class="contact-form mrb-md-40">
                        <h2 class="mrb-80 f-weight-400 title-under-line">Sign up</h2>
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <label>Full Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Your Name *" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <label>Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="Email Address *" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <label>Mobile Number</label>
                                        <input class="form-control @error('mobile') is-invalid @enderror" type="tel" name="mobile"
                                               value="{{ old('mobile') }}" placeholder="Mobile Number">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <label>ID Card or Photo</label>
                                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mrb-25">
                                        <label>Bitcoin Wallet Address</label>
                                        <input class="form-control @error('bitcoin_wallet') is-invalid @enderror" type="text"
                                               name="bitcoin_wallet" placeholder="Bitcoin Wallet" value="{{ old('bitcoin_wallet') }}">
                                        @error('bitcoin_wallet')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <label>Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" autocomplete="new-password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="password_confirmation"
                                               autocomplete="new-password" placeholder="Confirm Password" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <label>Country</label>
                                        <select class="form-control" id="country" name="country" required></select>
                                        @error('country')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <label>State</label>
                                        <select class="form-control" id="state" name="state"></select>
                                        @error('state')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <script language="javascript">
                                        populateCountries("country", "state");
                                        populateCountries("country2");
                                    </script>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mrb-25">
                                        <label>Address</label>
                                        <input class="form-control @error('address') is-invalid @enderror" type="text"
                                               name="address" placeholder="Address" value="{{ old('address') }}">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <button type="submit" class="cs-btn-one btn-md btn-round btn-primary-color element-shadow">Submit Now</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

{{--    <section class="sec-pad contact-page">--}}
{{--        <div class="container">--}}
{{--            <div class="col-md-8">--}}

{{--                @include('includes.alerts')--}}

{{--                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                        <div class="row" style="margin-bottom: 10px;">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-grp">--}}
{{--                                    <label>Full Name</label>--}}
{{--                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Your Name *" required>--}}
{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div><!-- /.form-grp -->--}}
{{--                            </div><!-- /.col-md-6 -->--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-grp">--}}
{{--                                    <label>Email</label>--}}
{{--                                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="Email Address *" required>--}}
{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div><!-- /.form-grp -->--}}
{{--                            </div><!-- /.col-md-6 -->--}}
{{--                        </div>--}}

{{--                    <div class="row" style="margin-bottom: 10px;">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-grp">--}}
{{--                                    <label>Mobile Number</label>--}}
{{--                                    <input class="form-control @error('mobile') is-invalid @enderror" type="tel" name="mobile"--}}
{{--                                           value="{{ old('mobile') }}" placeholder="Mobile Number">--}}
{{--                                    @error('mobile')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div><!-- /.form-grp -->--}}
{{--                            </div><!-- /.col-md-6 -->--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-grp">--}}
{{--                                    <label>ID Card</label>--}}
{{--                                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" required>--}}
{{--                                    @error('image')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div><!-- /.form-grp -->--}}
{{--                            </div><!-- /.col-md-6 -->--}}
{{--                        </div>--}}

{{--                    <div class="row" style="margin-bottom: 10px;">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-grp">--}}
{{--                                    <label>Password</label>--}}
{{--                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" autocomplete="new-password" required>--}}
{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div><!-- /.form-grp -->--}}
{{--                            </div><!-- /.col-md-6 -->--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-grp">--}}
{{--                                    <label>Confirm Password</label>--}}
{{--                                    <input class="form-control" type="password" name="password_confirmation"--}}
{{--                                           autocomplete="new-password" placeholder="Confirm Password" required>--}}
{{--                                </div><!-- /.form-grp -->--}}
{{--                            </div><!-- /.col-md-6 -->--}}
{{--                        </div>--}}

{{--                    <div class="row" style="margin-bottom: 10px;">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-grp">--}}
{{--                                    <label>Country</label>--}}
{{--                                    <select class="form-control" id="country" name="country" required></select>--}}
{{--                                    @error('country')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div><!-- /.form-grp -->--}}
{{--                            </div><!-- /.col-md-6 -->--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-grp">--}}
{{--                                    <label>State</label>--}}
{{--                                    <select class="form-control" id="state" name="state"></select>--}}
{{--                                    @error('state')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div><!-- /.form-grp -->--}}
{{--                            </div><!-- /.col-md-6 -->--}}

{{--                            <script language="javascript">--}}
{{--                                populateCountries("country", "state");--}}
{{--                                populateCountries("country2");--}}
{{--                            </script>--}}
{{--                        </div>--}}

{{--                    <div class="row" style="margin-bottom: 10px;">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="form-grp">--}}
{{--                                    <label>Address</label>--}}
{{--                                    <input class="form-control @error('address') is-invalid @enderror" type="text"--}}
{{--                                           name="address" placeholder="Address" value="{{ old('address') }}">--}}
{{--                                    @error('address')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div><!-- /.form-grp -->--}}
{{--                            </div><!-- /.col-md-12 -->--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="thm-btn">Sign up</button>--}}
{{--                </form>--}}
{{--            </div><!-- /.col-md-8 -->--}}

{{--            <div class="col-md-4">--}}
{{--                <div class="sec-title">--}}
{{--                    <h2>Sign up</h2>--}}
{{--                    <span class="decor-line">--}}
{{--					<span class="decor-line-inner"></span>--}}
{{--				</span>--}}
{{--                </div>--}}
{{--                <div class="contact-info-box">--}}
{{--                    <ul class="info-items">--}}
{{--                        <li>--}}
{{--                            <div class="icon-box">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <i class="fa fa-envelope"></i>--}}
{{--                                </div><!-- /.inner-box -->--}}
{{--                            </div><!-- /.icon-box -->--}}
{{--                            <div class="text-box">--}}
{{--                                <h3>Ask Anything Here :</h3>--}}
{{--                                <p>info@binarytradersforum.com</p>--}}
{{--                            </div><!-- /.text-box -->--}}
{{--                        </li>--}}
{{--                    </ul><!-- /.info-items -->--}}
{{--                </div><!-- /.contact-info-box -->--}}
{{--            </div><!-- /.col-md-8 -->--}}
{{--        </div><!-- /.container -->--}}
{{--    </section>--}}
@endsection
