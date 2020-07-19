@extends('layouts.main')

@section('title')
    Admin Login
@endsection

@section('contents')
    <section class="inner-banner has-dot-pattern">
        <div class="container">
            <h2>Admin Login</h2>
            <span class="decor-line"></span>
            <ul class="list-inline bread-cumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>Admin Login</span></li>
            </ul><!-- /.list-inline -->
        </div><!-- /.container -->
    </section>

    <section class="sec-pad contact-page">
        <div class="container">
            <div class="col-md-8">
                <form method="POST" action="{{ route('admin-login') }}">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-grp">
                                <label>Username</label>
                                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                                       value="{{ old('username') }}" placeholder="Username *" required>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.form-grp -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-grp">
                                <label>Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                                       placeholder="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.form-grp -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-12" style="margin-top: 6px;">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div><!-- /.col-md-6 -->

                    </div><!-- /.row -->
                    <div class="form-result"></div><!-- /.form-result -->
                </form>
            </div><!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="contact-info-box">
                    <p>Login to continue your investment.</p>
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
