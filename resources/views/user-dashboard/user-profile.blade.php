@extends('layouts.user-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form">
                <div class="form-text">
                    <h4 class="form-top">Profile Details</h4>
                    <div class="form-inner">

                        @if (session('success'))
                        <p>{{ session('success') }}</p>
                        @elseif(session('fail'))
                        <p>{{ session('fail') }}</p>
                        @endif

                        {{-- Account status information --}}
                        @if (Auth::user()->status == 'ACTIVATED')
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> --}}
                            <strong>
                                <i class="fa fa-info-circle fa-fw" title="info"></i>Account Approved!
                            </strong>Your account has been approved.
                        </div>
                        @elseif (Auth::user()->status == 'DEACTIVATED')
                        <div class="alert alert-danger" role="alert">
                            <strong>
                                <i class="fa fa-info-circle fa-fw" title="info"></i>Account Deactivated!
                            </strong>Please contact the customer support to activate your account.
                        </div>
                        @endif
                        {{-- Account status information ends--}}

                        <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="firstname">First Name</label>
                                    <input type="text" value="{{ Auth::user()->firstname }}" name="firstname" id="firstname" readonly>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" value="{{ Auth::user()->lastname }}" name="lastname" id="lastname" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="email_address">Email Address</label>
                                    <input type="text" name="email" id="email" value="{{ Auth::user()->email }}" readonly>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" name="phone" id="phone" placeholder="+1 555 - 444 - 444"
                                    value="{{ old('phone') ?? Auth::user()->phone }}"
                                    {{ Auth::user()->phone ? 'readonly' : 'required' }}>
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="dob">D.O.B</label>
                                    <input type="date" id="dob" name="dob"
                                    value="{{ old('dob') ?? Auth::user()->dob }}"
                                    {{ Auth::user()->dob ? 'readonly' : 'required' }}>
                                    @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="account_number">Account Number</label>
                                    <input type="text" name="account_number" id="account_number"
                                    value="{{ Auth::user()->account_number ? Auth::user()->account_number : 'xxxxxxxxxx' }}" readonly>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="currency">Account Type</label>
                                        <input type="text" name="account_type" id="account_type"
                                        value="{{ Auth::user()->account_type }}" readonly>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="ssn">SSN</label>
                                    <input type="number" id="ssn" name="ssn" placeholder="000-00-0000"
                                    value="{{ old('ssn') ?? Auth::user()->ssn }}"
                                    {{ Auth::user()->ssn ? 'readonly' : 'required' }}>
                                    @error('ssn') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="id_front">Valid ID (Front)</label>
                                    <input type="file" class="form-control" id="id_front" name="id_front"
                                    {{ Auth::user()->id_front ? '' : 'required' }}>
                                    @error('id_front') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="id_back">Valid ID (Back)</label>
                                    <input type="file" class="form-control" id="id_back" name="id_back"
                                    {{ Auth::user()->id_back ? '' : 'required' }}>
                                    @error('id_back') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <label for="passport">Passport</label>
                                    <input type="file" class="form-control" id="passport" name="passport"
                                    {{ Auth::user()->passport ? '' : 'required' }}>
                                    @error('passport') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <button type="submit" class="form-control" {{ Auth::user()->status == 'ACTIVATED' ? 'disabled'  : ''}} >Update Profile</button>
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
