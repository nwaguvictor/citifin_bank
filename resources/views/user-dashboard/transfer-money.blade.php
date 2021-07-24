@extends('layouts.user-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form">
                <div class="form-text">
                    <h4 class="form-top">Transfer Money</h4>
                    <div class="form-inner">
                        <form action="{{ route('user.transfer.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="amount">Amount</label>
                                    <input type="number" name="amount" id="amount" placeholder="904564545">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="currency">Account Type</label>
                                    <select name="currency" id="currency">
                                        <option selected value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="GBP">GBP</option>
                                    </select>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <input type="number" name="account" placeholder="Receiver Account Number">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <button type="submit">Complete Transfer</button>
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
