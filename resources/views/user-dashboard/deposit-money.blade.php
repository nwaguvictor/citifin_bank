@extends('layouts.user-dashboard')
@section('breadcrumb', 'Dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form currency-exchange">
                <div class="form-text">
                    <h4 class="form-top">Deposit Money</h4>
                    <div class="form-inner">
                        <div class="alert alert-warning">
                            <strong>
                                <i class="fa fa-info-circle fa-fw"></i>Notice:
                            </strong>Please do contact admin for payment details
                        </div>
                        <form action="{{ route('user.deposit.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="amount">Amount Deposited</label>
                                    <input type="text" name="amount" id="amount" placeholder="e.g 1000" >
                                    @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="currency">Account Type</label>
                                    <input type="text" value="{{ Auth::user()->account_type }}" name="currency" readonly >
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label for="pop">Upload Proof of Payment</label>
                                    <input type="file" name="pop" id="pop" class="form-control">
                                    @error('pop') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                    <label for="message">Optional Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <button type="submit">Submit Deposit</button>
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
