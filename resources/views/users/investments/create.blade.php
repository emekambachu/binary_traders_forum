@extends('layouts.users')

@section('title')
    Add New Investment
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Make payment using the bitcoin address below</h4>
                            </div>
                        </div>
                        <div class="iq-card-body" style="margin: 0 auto;">
                            <p><strong>1BxLSTsk4mgvspTmC3YPdEJts2JRJ9YzTL</strong></p>
                            <div class="card iq-mb-2">
                                <img width="300" src="{{ asset('bitcoin_scan.jpeg') }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Add New Investment</h4>
                            </div>
                        </div>
                        @include('includes.alerts')
                        <div class="iq-card-body">
                            <p><strong>After making your payment, submit you bitcoin payment details.</strong></p>
                            <form method="post" action="{{ url('user/submit-investment') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Amount</label>
                                        <input name="amount" type="number" class="form-control" id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault02">Package</label>
                                        <select name="package" class="form-control" required>
                                            <option disabled>Select Investment Plan</option>
                                            @foreach($packages as $pack)
                                                <option value="{{ $pack->id }}">{{ $pack->name }} ${{ number_format($pack->min) }} - ${{ number_format($pack->max) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Continue</button>
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
