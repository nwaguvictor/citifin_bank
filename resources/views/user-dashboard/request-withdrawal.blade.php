@extends('layouts.user-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form">
                <div class="form-text">
                    <h4 class="form-top">Request Money</h4>
                    <div class="form-inner">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="account_name">Account Name</label>
                                    <input type="text" name="account_name"  id="account_name" placeholder="John Doe">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="account_number">Account Number</label>
                                    <input type="number" name="account_number"  id="account_number" placeholder="90456xxxxx">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="bank_name">Bank Name</label>
                                    <input type="text" name="bank_name"  id="bank_name" placeholder="Commercial Bank">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="bank_address">Bank Address</label>
                                    <input type="text" name="bank_address"  id="bank_address" placeholder="Texas, USA">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="amount">Amount</label>
                                    <input type="number" name="amount"  id="amount" placeholder="10000">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="account_type">Account Type</label>
                                    <input type="text" name="account_type" value="USD" id="account_type" readonly>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <button type="submit">Request</button>
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