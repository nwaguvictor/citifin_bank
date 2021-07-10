@extends('layouts.user-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form">
                <div class="form-text">
                    <h4 class="form-top">Profile Details</h4>
                    <div class="form-inner">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" id="firstname" placeholder="John" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" placeholder="Doe" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="email_address">Email Address</label>
                                    <input type="text" name="email_address" id="email_address" value="John@mail.com" readonly>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="tel" name="phone_number" id="phone_number" placeholder="+1 555 - 444 - 444" required>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="dob">D.O.B</label>
                                    <input type="date" id="dob" name="dob" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="account_number">Account Number</label>
                                    <input type="number" name="account_number" id="account_number" value="091000019" readonly>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="currency">Account Type</label>
                                        <select name="account_type" id="account_type">
                                        <option selected value="USD">USD</option>
                                        <option value="GBP">GBP</option>
                                        <option value="EUR">EUR</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="ssn">SSN</label>
                                    <input type="number" id="ssn" name="ssn" placeholder="000-00-0000" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="id_front">Valid ID (Front)</label>
                                    <input type="file" class="form-control" id="id_front" name="id_front" required>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="id_back">Valid ID (Back)</label>
                                    <input type="file" class="form-control" id="id_back" name="id_back" required>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="passport">Passport</label>
                                    <input type="file" class="form-control" id="passport" name="passport" required>
                                </div>
                            </div>
                            <div class="row">
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