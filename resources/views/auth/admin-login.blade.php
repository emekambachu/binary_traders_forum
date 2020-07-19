@extends('layouts.main')

@section('title')
    Admin Login
@endsection

@section('contents')
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="text-uppercase text-white mrb-10">Admin Login</h2>
                    <ul class="mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item" style="color: #3d9bef;">Admin Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section pdt-100 pdb-95 pdb-md-110" data-background="{{ asset('images/bg/abs-bg7.png') }}" style="background-image: url(&quot;{{ asset('images/bg/abs-bg7.png') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('includes.alerts')

                    <div class="contact-form mrb-md-40">
                        <h2 class="mrb-80 f-weight-400 title-under-line">Login</h2>
                        <form method="POST" action="{{ route('admin-login') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <label>Email</label>
                                        <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" value="{{ old('username') }}" placeholder="Username *" required>
                                        @error('username')
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
