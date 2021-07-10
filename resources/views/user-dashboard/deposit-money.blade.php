@extends('layouts.user-dashboard')
@section('breadcrumb', 'Dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form currency-exchange">
                <div class="form-text">
                    <h4 class="form-top">Currency Exchange</h4>
                    <div class="form-inner">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="amount">Amount to Deposit</label>
                                    <input type="text" name="amount" id="amount" placeholder="10000" >
                                </div>
                                
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="account_type">Account Type</label>
                                    <input type="text" value="USD" name="account_type" id="account_type" readonly >
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="proof_of_payment">Upload Proof of Payment</label>
                                    <input type="file" name="proof_of_payment" id="proof_of_payment" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="message">Optional Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <button type="submit">Submit</button>
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