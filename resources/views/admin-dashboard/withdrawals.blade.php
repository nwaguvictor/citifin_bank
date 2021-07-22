@extends('layouts.admin-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    {{-- Withdrawal Tabel --}}
    <div>
        <span class="mr-3" style="text-transform: uppercase">withdrawal requests </span>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-dark" style="width: 100%" id="data-table">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>Account Name</th>
                    <th>Bank Name</th>
                    <th>Address</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>Staus</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($withdrawals)
                    @foreach ($withdrawals as $withdrawal)
                    <tr>
                        <td>{{ $withdrawal->user->fullName }}</td>
                        <td>{{ $withdrawal->bank_name }}</td>
                        <td>{{ $withdrawal->bank_address }}</td>
                        <td>{{ $withdrawal->amount }}</td>
                        <td>{{ $withdrawal->currency }}</td>
                        <td>[ {{ $withdrawal->status }} ]</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="#">
                                <i class="fa fa-check fa-fw"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fa fa-ban fa-fw"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="text-center">
            {{ $withdrawals->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
