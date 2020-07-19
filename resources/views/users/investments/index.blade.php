@extends('layouts.users')

@section('title')
    Investments
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2">Your Investments</h4>
                                <a href="{{ route('investment.create') }}">
                                    <button style="float: left;" class="btn btn-sm brand-color">Add New Investment</button>
                                </a>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <p>Your current investments are displayed here</p>
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
