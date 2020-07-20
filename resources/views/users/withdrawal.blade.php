@extends('layouts.users')

@section('title')
    Withdraw Amount
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
                            <p><strong>1DnWxke6SCiMQhc7jNthFXYZ4qTKJTBpEY</strong></p>
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
                                <h4 class="card-title"> Withdraw Amount</h4>
                            </div>
                        </div>
                        @include('includes.alerts')
                        <div class="iq-card-body">
                            <p><strong>Payment will be made to your Bitcoin Wallet Address.<br>
                                    Pay withdrawal/tax fee of 10% of your wallet balance.
                                    ( ${{ 10/100 * $user->wallet->amount }} )
                                </strong></p>
                            <form method="post" action="{{ url('user/withdraw-amount') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Amount</label>
                                        <input name="amount" type="number" class="form-control" id="validationDefault01" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Proceed</button>
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
