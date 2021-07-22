@extends('layouts.admin-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
<div>
    <span class="mr-3" style="text-transform: uppercase"> Transactions </span>
    <a class="pull-right" href="#">
        <i class="fa fa-download fa-fw"></i>Download
    </a>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-dark" style="width: 100%" id="data-table">
        <thead style="background-color: #1BA8C6">
            <tr>
                <th>Account Name</th>
                <th>Account Number</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if ($transactions)
                @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->user->fullName }}</td>
                    <td>{{ $transaction->account_number }}</td>
                    <td>{{ $transaction->type }}</td>
                    <td>{{ $transaction->amount. ' ' .$transaction->currency }}</td>
                    <td>[ {{ $transaction->status }} ]</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="text-center">
        {{ $transactions->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
</div>
@endsection
