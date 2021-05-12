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
                                <h4 class="card-title"> Make payment using the bitcoin and Etherium address below</h4>
                            </div>
                        </div>
                        <div class="iq-card-body" style="margin: 0 auto;">
                            <p>BTC: <strong>1DnWxke6SCiMQhc7jNthFXYZ4qTKJTBpEY</strong></p>
                            <div class="card iq-mb-2 mb-5">
                                <img width="300" src="{{ asset('bitcoin_scan.jpeg') }}">
                            </div>

                            <p>ETH: <strong>0x9e4483991D2f3c49bD2a1Db947D9649B4ABEF5AF</strong></p>
                            <div class="card iq-mb-2">
                                <img width="300" src="{{ asset('eth_wallet_barcode.jpg') }}">
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
                            <p><strong>After making your payment, submit you Bitcoin or Etherium payment details.</strong></p>
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
