@extends('layouts.frontend')

@section('content')

<!-- Start breadcrumbs area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>{{ $title ?? 'Dashboard'}}</h3>
                    </div>
                    <ul>
                        <li class="home-bread">@yield('breadcrumb', 'Dashboard')</li>
                        <li>{{ $title ?? 'Dashboard'}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcrumbs area -->
<div class="dsahboard-area bg-color area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard-head">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-dash-head">
                                <div class="dashboard-profile">
                                    <div class="profile-content">
                                        <img src="{{ asset('img/about/profile.png') }}" alt="profile photo">
                                        <span class="pro-name">
                                            {{ Auth::user()->firstname }}
                                            [ <span>ADMIN</span> ]
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <i class="fa fa-users"></i>
                                        <span class="pro-name">
                                            {{ $users->count() }} Total Users
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <i class="flaticon-050-credit-card-2"></i>
                                        <span class="pro-name">
                                            {{ $transactions->count() }} Total Transactions
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <aside class="sidebar">
                    <div class="dashboard-side">
                        <ul>
                            <li class="active">
                                <a href="{{ route('admin.dashboard') }}">
                                    <i class="ti-dashboard"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.dashboard.users') }}">
                                    <i class="fa fa-users"></i>All Users
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.dashboard.withdrawals') }}">
                                    <i class="ti-new-window"></i>Withdrawal Requests
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.dashboard.deposits') }}">
                                    <i class="ti-wallet"></i>Deposit Requests
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.dashboard.transactions') }}">
                                    <i class="ti-layout-list-thumb"></i>Transaction Log
                                </a>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-cog"></i>Settings
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu" style="background-color: #1B2654">
                                        <li><a href="{{ route('admin.dashboard.profile') }}">Profile</a></li>
                                        <form action="{{ route('logout') }}" method="POST" id="logout">
                                            @csrf
                                        </form>

                                        <li><a href="#">Change Password</a></li>
                                        <li><a form="logout" href="#">Sign Out</a>
                                        </li>
                                    </ul>
                                  </div>
                            </li>
                        </ul>
                    </div>
                    <div class="dashboard-support">
                        <div class="support-inner">
                            <div class="help-support">
                                <i class="flaticon-107-speech-bubbles"></i>
                                <a href="{{ route('frontend.contact') }}"><span class="help-text">Need Help?</span></a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">

                @yield('dashboard_content')

            </div>
        </div>
    </div>
</div>
@endsection
