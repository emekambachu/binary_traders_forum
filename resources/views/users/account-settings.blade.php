@extends('layouts.users')

@section('title')
    Account Settings
@endsection

@section('top-assets')
    <script src="{{ asset('../js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-12 col-lg-12" style="margin: 0 auto;">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Update your Account Details</h4>
                            </div>
                        </div>
                        @include('includes.alerts')
                        <div class="iq-card-body">
                            <form method="post" action="{{ url('user/update-account') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Full Name</label>
                                        <input name="name" type="text" class="form-control"
                                               value="{{ $user->name }}" id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Email</label>
                                        <input name="email" type="email" class="form-control"
                                               value="{{ $user->email }}" id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Mobile Number</label>
                                        <input name="mobile" type="number" class="form-control"
                                               value="{{ $user->mobile }}" id="validationDefault01">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">ID Card</label>
                                        <input name="image" type="file" class="form-control" id="validationDefault01">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Password</label>
                                        <input name="password" type="password" class="form-control" id="validationDefault01">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Country</label>
                                        <select class="form-control" name="country" id="country"></select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">State</label>
                                        <select class="form-control" name="state" id="state"></select>
                                        <script language="javascript">
                                            populateCountries("country", "state");
                                            populateCountries("country2");
                                        </script>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Address</label>
                                        <input name="address" type="text" class="form-control" value="{{ $user->address }}"
                                               id="validationDefault01">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
