{{-- @extends('layouts.app') --}}
@php
    $title = 'login';
@endphp
@extends('layouts.frontend')

@section('content')
<div class="login-area area-padding fix" style="margin-top: 50px">
    <div class="login-overlay"></div>
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12">
                        <div class="login-form signup-form">
                            <h4 class="login-title text-center">LOGIN</h4>
                            <div class="row">
                                <form id="contactForm" method="POST" action="#" class="log-form">
                                    @csrf

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label for="email_address">E-mail Address</label>
                                        <input type="email" id="email_address" class="form-control" placeholder="e.g johndoe@mail.com" required data-error="Please enter email address">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="xxxxxxxx" required data-error="Please enter password">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <div class="check-group flexbox">
                                            <label class="check-box">
                                                <input type="checkbox" class="check-box-input" checked>
                                                <span class="remember-text">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="slide-btn login-btn">Login</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <div class="acc-not">Don't have an account?
                                            <a href="{{ route('register') }}">Register</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
@endsection
