@extends('layouts.user-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form">
                <div class="form-text">
                    <h4 class="form-top">Send Money</h4>
                    <div class="form-inner">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="amount">Amount</label>
                                    <input type="number" name="number" id="amount" placeholder="904564545">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="account_type">Account Type</label>
                                        <select name="account_type" id="account_type">
                                        <option selected value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="GBP">GBP</option>
                                    </select>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <input type="number" name="number" placeholder="Receiver Account Number">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <button type="submit">Send</button>
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