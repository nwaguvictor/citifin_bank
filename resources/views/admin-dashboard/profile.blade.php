@extends('layouts.admin-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form">
                <div class="form-text">
                    <h4 class="form-top">Admin Details</h4>
                    <div class="form-inner">

                        <form action="{{ route('admin.dashboard.profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="firstname">First Name</label>
                                    <input type="text" value="{{ Auth::user()->firstname }}" name="firstname" id="firstname">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" value="{{ Auth::user()->lastname }}" name="lastname" id="lastname">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="email_address">Email Address</label>
                                    <input type="text" name="email" id="email" value="{{ Auth::user()->email }}">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" name="phone" id="phone" placeholder="+1 555 - 444 - 444"
                                    value="{{ old('phone') ?? Auth::user()->phone }}">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="dob">D.O.B</label>
                                    <input type="date" id="dob" name="dob"
                                    value="{{ old('dob') ?? Auth::user()->dob }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="account_number">Account Number</label>
                                    <input type="text" name="account_number" id="account_number"
                                    value="{{ Auth::user()->account_number ? Auth::user()->account_number : 'xxxxxxxxxx' }}">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="currency">Account Type</label>
                                        <input type="text" name="account_type" id="account_type"
                                        value="{{ Auth::user()->account_type }}">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="ssn">SSN</label>
                                    <input type="number" id="ssn" name="ssn" placeholder="000-00-0000"
                                    value="{{ old('ssn') ?? Auth::user()->ssn }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="id_front">Valid ID (Front)</label>
                                    <input type="file" class="form-control" id="id_front" name="id_front">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="id_back">Valid ID (Back)</label>
                                    <input type="file" class="form-control" id="id_back" name="id_back">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="passport">Passport</label>
                                    <input type="file" class="form-control" id="passport" name="passport">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <button type="submit" class="form-control">Update Profile</button>
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
