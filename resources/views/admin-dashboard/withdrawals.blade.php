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
                    <th>TxnId</th>
                    <th>Name</th>
                    <th>Bank Name</th>
                    <th>Amount</th>
                    <th>Staus</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($withdrawals)
                    @foreach ($withdrawals as $withdrawal)
                    <tr>
                        <td>{{ $withdrawal->txnId }}</td>
                        <td>{{ $withdrawal->user->fullName }}</td>
                        <td>{{ $withdrawal->bank_name }}</td>
                        <td>{{ $withdrawal->amount. ' ' .$withdrawal->currency }}</td>
                        <td>[ {{ $withdrawal->status }} ]</td>
                        <td>
                            {{-- Submission form --}}
                            <form action="{{ route('admin.dashboard.withdrawal.approve', $withdrawal->id) }}" method="POST" id="approve-{{ $withdrawal->id }}">
                                @method('PATCH')
                                @csrf
                            </form>

                            <form action="{{ route('admin.dashboard.withdrawal.decline', $withdrawal->id) }}" method="POST" id="decline-{{ $withdrawal->id }}">
                                @method('PATCH')
                                @csrf
                            </form>

                            <a class="btn btn-success btn-sm" onclick="confirmActionButton('approve-{{ $withdrawal->id }}')" href="">
                                <i class="fa fa-check fa-fw"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" onclick="confirmActionButton('decline-{{ $withdrawal->id }}')" href="#">
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
