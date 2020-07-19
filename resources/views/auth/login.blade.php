@extends('layouts.main')

@section('title')
    Login
@endsection

@section('contents')
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="text-uppercase text-white mrb-10">Login</h2>
                    <ul class="mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item" style="color: #3d9bef;">Login</li>
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
                        <h2 class="mrb-80 f-weight-400 title-under-line">Login</h2>
                        <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

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
                                        <label>Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" autocomplete="new-password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <button type="submit" class="cs-btn-one btn-md btn-round btn-primary-color element-shadow">Login</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
