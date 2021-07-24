@extends('layouts.admin-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="send-money-form">
                <div class="form-text">
                    <h4 class="form-top">Change Password</h4>
                    <div class="form-inner">
                        <form action="{{ route('admin.dashboard.password.update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="password">Password</label>
                                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                    <input type="password" name="password">
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label for="password_confirm">Retype Password</label>
                                    <input type="password" name="password_confirm">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                                    <button type="submit" class="form-control">Update Password</button>
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
