@extends('layouts.admin-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form">
                <div class="form-text">
                    <h4 class="form-top">User Details</h4>
                    <div style="padding: 0 50px; text-transform: uppercase">
                        <span>Status: {{ $user->status }}</span>
                        <span class="pull-right">Balance: {{ $user->balance. ' ' .$user->account_type }}</span>
                    </div>
                    <div class="form-inner">
                        <form action="{{ route('admin.dashboard.user.update', $user->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="firstname">First name</label>
                                    <input type="text" name="firstname" value="{{ $user->firstname }}">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="lastname">Last name</label>
                                    <input type="text" name="lastname" value="{{ $user->lastname }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="email_address">Email Address</label>
                                    <input type="text" name="email" value="{{ $user->email }}">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" name="phone" value="{{ $user->phone }}">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="dob">D.O.B</label>
                                    <input type="date" id="dob" name="dob" value="{{ $user->dob }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="account_number">Account Number</label>
                                    <input type="number" name="account_number" value="{{ $user->account_number }}">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="account_type">Account Type</label>
                                    <input type="text" name="account_type" value="{{ $user->account_type }}">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="ssn">SSN</label>
                                    <input type="number" id="ssn" name="ssn" value="{{ $user->ssn }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                          <span class="card-title">Valid ID (Front)</span>
                                        </div>
                                        <a target="_blank" href="{{ asset('uploads/documents/'. $user->id_front) }}">
                                            <img src="{{ asset('uploads/documents/'. $user->id_front) }}" alt="valid id card front view" width="100%">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                          <span class="card-title">Valid ID (Back)</span>
                                        </div>
                                        <a target="_blank" href="{{ asset('uploads/documents/'. $user->id_back) }}">
                                            <img src="{{ asset('uploads/documents/'. $user->id_back) }}" alt="valid id card back view" width="100%">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                          <span class="card-title">User Passport</span>
                                        </div>
                                        <a target="_blank" href="{{ asset('uploads/documents/'. $user->passport) }}">
                                            <img src="{{ asset('uploads/documents/'. $user->passport) }}" alt="User Passport" width="100%">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <button type="submit" class="form-control">Update User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
