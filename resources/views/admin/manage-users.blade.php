@extends('layouts.admin')

@section('title')
    Manage Users
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2">Manage Users</h4>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <p>Manage users and User Wallet</p>
                            <div class="table-responsive">
                                @if($users->count() > 0)
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">Wallet</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->country }}</td>
                                                <td>${{ $user->wallet->amount }}</td>
                                                <td>{{ $user->created_at->format('d M Y') }}</td>
                                                <td>{{ $user->is_active ? 'Active' : 'Blocked' }}</td>
                                                <td>
                                                    <a href="{{ url('admin/fund-wallet/'.$user->id) }}">
                                                        <button class="btn btn-info btn-sm">Fund Wallet</button>
                                                    </a>

                                                    <form method="POST" action="{{ action('AdminController@approveUser', $user->id) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-warning btn-sm">
                                                            {{$user->is_active ? 'Block User' : 'Unblock User' }}
                                                        </button>
                                                    </form>

                                                    <form method="POST" action="{{ action('AdminController@deleteUser', $user->id) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-dark btn-sm">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">Wallet</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    No Current User
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
