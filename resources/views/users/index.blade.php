@extends('layouts.users')

@section('title')
    Dashboard
    @endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-4">
                    <div class="card iq-mb-4">
                        <img src="{{ asset('buy_btc1.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Buy Bitcoin Here</h4>
                            <a href="https://changelly.com/" class="btn brand-color">More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card iq-mb-4">
                        <img src="{{ asset('buy_btc2.jpg') }}" class="card-img-top" alt="#">
                        <div class="card-body">
                            <h4 class="card-title">Buy Bitcoin Here</h4>
                            <a href="https://paybis.com/" class="btn brand-color">More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card iq-mb-4">
                        <img src="{{ asset('buy_btc3.jpg') }}" class="card-img-top" alt="#">
                        <div class="card-body">
                            <h4 class="card-title">Location to Purchase Bitcoins</h4>
                            <a href="http://coinatmradar.com/" class="btn brand-color">More</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-8">
                    <div class="iq-card iq-card-block iq-card-stretch">

                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Investments trend </h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="custom-control custom-switch custom-switch-text custom-control-inline">
                                    <div class="custom-switch-inner">
                                        <input type="checkbox" class="custom-control-input" id="switch-title" checked="">
                                        <label class="custom-control-label" for="switch-title" data-on-label="On" data-off-label="Off">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iq-card-body rounded">
                            <div class="d-flex justify-content-around">
                                <div class="price-week-box mr-5">
                                    <span>Total Investments</span>
                                    <h3>$<span class="counter">{{ $totalInvestments }}</span> <i class="ri-funds-line text-success font-size-18"></i></h3>
                                </div>
                                <div class="price-week-box">
                                    <span>Previous Investment</span>
                                    <h3>$<span class="counter">{{ $recentInvestment ? $recentInvestment->amount : 0 }}</span><i class="ri-funds-line text-danger font-size-18"></i></h3>
                                </div>
                            </div>
                        </div>
                        <div id="menu-chart-02"></div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex flex-wrap p-0">
                    <div class="col-md-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height rounded">
                            <div class="iq-card-body">
                                <div class="row">
                                    <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                        <div class="icon iq-icon-box rounded bg-primary rounded shadow" data-wow-delay="0.2s">
                                            <i class="las la-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <h6 class="card-title text-uppercase text-secondary mb-0">Wallet Balance</h6>
                                        <span class="h2 text-dark mb-0 d-inline-block w-100">${{ $user->wallet->amount }}</span>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <h6 class="card-title text-uppercase text-secondary mb-0">Withdrawals</h6>
                                        <span class="h2 text-dark mb-0 d-inline-block w-100">
                                            ${{ $total_withdrawals ? $total_withdrawals->sum('amount') : 0 }}</span>
                                    </div>
                                    <a href="{{ url('user/withdrawal') }}">
                                        <button class="btn btn-success text-amber ml-3">Withdraw Funds</button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height rounded">
                            <div class="iq-card-body">
                                <div class="row">
                                    <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                        <div class="icon iq-icon-box rounded bg-warning rounded shadow" data-wow-delay="0.2s">
                                            <i class="las la-chart-line"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <h6 class="card-title text-uppercase text-secondary mb-0">Number of Investments</h6>
                                        <span class="h2 text-dark mb-0 counter d-inline-block w-100">{{ $investments->count() }}</span>
                                    </div>
                                </div>
                                <p class="mb-0 text-muted mt-3">
                                    <span class="badge badge-warning mr-2"><i class="ri-arrow-up-fill"></i> 3.48%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">

                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2"> Your Investments </h4>
                                <a href="{{ route('investment.create') }}">
                                    <button class="btn brand-color btn-sm" style="float: left;">Add New</button>
                                </a>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <div class="table-responsive">

                                @if($investments->count() > 0)
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Investment ID</th>
                                            <th scope="col">Package</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($investments as $invest)
                                            <tr>
                                                <td>{{ $invest->invest_id }}</td>
                                                <td>{{ $invest->investmentPackage ? $invest->investmentPackage->name : '' }}</td>
                                                <td>${{ number_format($invest->amount) }}</td>
                                                <td>{{ $invest->created_at->format('d M Y') }}</td>
                                                <td>{{ $invest->is_approved ? 'Approved' : 'Unapproved' }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">Investment ID</th>
                                            <th scope="col">Package</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    You have no current investments
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
