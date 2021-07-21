@extends('layouts.user-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    {{-- <div>
        <span class="mr-3" style="text-transform: uppercase"> Transactions </span>
        <a class="pull-right" href="#">
            <i class="fa fa-download fa-fw"></i>Download
        </a>
    </div> --}}

    <div class="form-text mb-3">
        <h4 class="form-top">Transactions</h4>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-dark" style="width: 100%">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>#</th>
                    <th>Account Name</th>
                    <th>Account Number</th>
                    <th>Activity</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Firstname Lastname</td>
                    <td>099909xxx</td>
                    <td>Deposit</td>
                    <td>$100</td>
                    <td>[ SUCCESSFUL ]</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
