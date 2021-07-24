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
                    @if (Auth::user()->status != 'ACTIVATED')
                    <p style="margin-top: 10px">
                        <i class="fa fa-info-circle" title="info" style="color: rgb(204, 77, 77)"></i>
                         <span style="color: rgb(175, 172, 172)">Account not activated. Contact customer support.</span>
                    </p>
                    @endif
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
                                        <img src="{{ asset('uploads/documents/'. Auth::user()->passport) }}" alt="user profile photo">
                                        <span class="pro-name">{{ Auth::user()->fullName }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-dash-head">
                                <div class="dashboard-amount">
                                    <div class="amount-content">
                                        <i class="flaticon-028-money"></i>
                                        <span class="pro-name">Balance: {{ Auth::user()->balance }} {{ Auth::user()->account_type }}</span>
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
                                            {{Auth::user()->account_number ? substr(Auth::user()->account_number, 0, 4).'xxxxxx' : 'xxxxxxxxxx'}}
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
                                <a href="{{ route('user.dashboard') }}">
                                    <i class="ti-dashboard"></i>Dashboard
                                </a>
                            </li>
                            @if (Auth::user()->status === 'ACTIVATED')
                            <li>
                                <a href="{{ route('user.deposit_money') }}">
                                    <i class="ti-wallet"></i>Deposit Money
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.request_withdrawal') }}">
                                    <i class="ti-receipt"></i>Request Withdrawal
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.transfer_money') }}">
                                    <i class="ti-new-window"></i>Transfer Money
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.transaction_log') }}">
                                    <i class="ti-layout-list-thumb"></i>Transactions
                                </a>
                            </li>
                            @endif
                            <li>
                                <a href="{{ route('user.user_profile') }}">
                                    <i class="ti-user"></i>User Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.password.change') }}">
                                    <i class="ti-lock"></i>Change Password
                                </a>
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
