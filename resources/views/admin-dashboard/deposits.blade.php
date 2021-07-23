@extends('layouts.admin-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    {{-- Deposit-table --}}
    <div>
        <span class="mr-3" style="text-transform: uppercase">deposit requests </span>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-dark" style="width: 100%" id="data-table">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>TxnId</th>
                    <th>Account</th>
                    <th>Amount</th>
                    <th>P.O.P</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($deposits)
                    @foreach ($deposits as $deposit)
                    <tr>
                        <td>{{ $deposit->txnId }}</td>
                        <td>{{ $deposit->user->account_number }}</td>
                        <td>{{ $deposit->amount. ' ' .$deposit->currency }}</td>
                        <td>
                            <a href="{{ asset('/uploads/transactions/' .$deposit->pop) }}" target="_blank">
                                <img src="{{ asset('/uploads/transactions/' .$deposit->pop) }}" alt="pop"
                            style="width: 100%; height: 30px">
                            </a>
                        </td>
                        <td>[ {{ $deposit->status }} ]</td>
                        <td>
                            {{-- Submission form --}}
                            <form action="{{ route('admin.dashboard.deposit.confirm', $deposit->id) }}" method="POST" id="confirm-{{ $deposit->id }}">
                                @method('PATCH')
                                @csrf
                            </form>

                            <form action="{{ route('admin.dashboard.deposit.decline', $deposit->id) }}" method="POST" id="decline-{{ $deposit->id }}">
                                @method('PATCH')
                                @csrf
                            </form>

                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fa fa-download fa-fw"></i>
                            </a>
                            @if ($deposit->status == 'PENDING')
                                <a onclick="confirmActionButton('confirm-{{ $deposit->id }}')" class="btn btn-success btn-sm" href="#" {{ $deposit->status != 'PENDING' ? 'disabled' : '' }}>
                                    <i class="fa fa-thumbs-o-up fa-fw"></i>
                                </a>
                                <a onclick="confirmActionButton('decline-{{ $deposit->id }}')" class="btn btn-danger btn-sm" href="#" {{ $deposit->status != 'PENDING' ? 'disabled' : '' }}>
                                    <i class="fa fa-thumbs-o-down fa-fw"></i>
                                </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="text-center">
            {{ $deposits->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
