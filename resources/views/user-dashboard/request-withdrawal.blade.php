@extends('layouts.user-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form">
                <div class="form-text">
                    <h4 class="form-top">Request Withdrawal</h4>
                    <div class="form-inner">
                        {{-- Error messages --}}
                        @if (session('fail'))
                        <div class="alert alert-danger" role="alert">
                            <strong>
                                <i class="fa fa-info-circle fa-fw" title="info"></i>Error!
                            </strong>{{ session('fail') }}
                        </div>
                        @endif
                        <form action="{{ route('user.withdrawal.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="account_name">Account Name</label>
                                    <input type="text" name="account_name"  id="account_name" placeholder="John Doe"
                                    value="{{ old('account_name') }}">
                                    @error('account_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="account_number">Account Number</label>
                                    <input type="number" name="account_number"  id="account_number" placeholder="90456xxxxx" value="{{ old('account_number') }}">
                                    @error('account_number') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="bank_name">Bank Name</label>
                                    <input type="text" name="bank_name"  id="bank_name" placeholder="e.g Financial Bank" value="{{ old('bank_name') }}">
                                    @error('bank_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="bank_address">Bank Address</label>
                                    <input type="text" name="bank_address"  id="bank_address" placeholder="Texas, USA"
                                    value="{{ old('bank_address') }}">
                                    @error('bank_address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="amount">Amount</label>
                                    <input type="number" name="amount"  id="amount" placeholder="10000"
                                    value="{{ old('amount') }}">
                                    @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="currency">Currency</label>
                                    <input type="text" name="currency" value="{{ Auth::user()->account_type }}" id="currency" readonly>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <button type="submit">Make Request</button>
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
