@extends('layouts.main')

@section('title')
    Sign Up
@endsection

@section('top-assets')
    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('contents')
    <section class="inner-banner has-dot-pattern">
        <div class="container">
            <h2>Create your account and start earning</h2>
            <span class="decor-line"></span>
            <ul class="list-inline bread-cumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>Sign up</span></li>
            </ul><!-- /.list-inline -->
        </div><!-- /.container -->
    </section>

    <section class="sec-pad contact-page">
        <div class="container">
            <div class="col-md-8">

                @include('includes.alerts')

                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Full Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Your Name *" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="Email Address *" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                        </div>

                    <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Mobile Number</label>
                                    <input class="form-control @error('mobile') is-invalid @enderror" type="tel" name="mobile"
                                           value="{{ old('mobile') }}" placeholder="Mobile Number">
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>ID Card</label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" required>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                        </div>

                    <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" autocomplete="new-password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="password" name="password_confirmation"
                                           autocomplete="new-password" placeholder="Confirm Password" required>
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                        </div>

                    <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Country</label>
                                    <select class="form-control" id="country" name="country" required></select>
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>State</label>
                                    <select class="form-control" id="state" name="state"></select>
                                    @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->

                            <script language="javascript">
                                populateCountries("country", "state");
                                populateCountries("country2");
                            </script>
                        </div>

                    <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-12">
                                <div class="form-grp">
                                    <label>Address</label>
                                    <input class="form-control @error('address') is-invalid @enderror" type="text"
                                           name="address" placeholder="Address" value="{{ old('address') }}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-12 -->
                        </div>
                        <button type="submit" class="thm-btn">Sign up</button>
                </form>
            </div><!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="sec-title">
                    <h2>Sign up</h2>
                    <span class="decor-line">
					<span class="decor-line-inner"></span>
				</span>
                </div>
                <div class="contact-info-box">
                    <ul class="info-items">
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
