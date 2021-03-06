@extends('layouts.admin-dashboard')

@section('breadcrumb', 'Home')

@section('dashboard_content')
<div class="dashboard-content">
     {{-- Users-table --}}
     <div>
        <span class="mr-3" style="text-transform: uppercase">users </span>
        <a class="pull-right btn btn-primary btn-xs" href="{{ route('admin.dashboard.users') }}">view all</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-dark" style="width: 100%" id="data-table">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>Name</th>
                    <th>Account</th>
                    <th>Balance</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($users)
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ Str::limit($user->fullName, 30, '...') }}</td>
                        <td>{{ $user->account_number }}</td>
                        <td>{{ $user->balance. ' ' .$user->account_type }}</td>
                        <td>[{{ $user->status }}]</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{route('admin.dashboard.users.show', $user->id)}}">
                                <i class="fa fa-eye fa-fw"></i>
                            </a>
                            <a class="btn btn-success btn-sm" href="#">
                                <i class="fa fa-play fa-fw"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fa fa-pause fa-fw"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <hr>
    {{-- Withdrawal Table --}}
    <div>
        <span class="mr-3" style="text-transform: uppercase">widthdrawals </span>
        <a class="pull-right btn btn-primary btn-xs" href="{{ route('admin.dashboard.withdrawals') }}">view all</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-dark" style="width: 100%" id="data-table">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>Name</th>
                    <th>Bank Name</th>
                    <th>Bank Address</th>
                    <th>Amount</th>
                    <th>Status</th>
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
                        <td>{{ $withdrawal->amount. ' ' .$withdrawal->currency }}</td>
                        <td>{{ $withdrawal->status }}</td>
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

                            @if ($withdrawal->status == 'PENDING')
                            <a onclick="confirmActionButton('approve-{{ $withdrawal->id }}')" class="btn btn-success btn-sm" href="#">
                                <i class="fa fa-check fa-fw"></i>
                            </a>
                            <a onclick="confirmActionButton('decline-{{ $withdrawal->id }}')" class="btn btn-danger btn-sm" href="#">
                                <i class="fa fa-ban fa-fw"></i>
                            </a>
                            @else
                            <span class="badge badge-default">Reviewed</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <hr>
    {{-- Deposit-table --}}
    <div>
        <span class="mr-3" style="text-transform: uppercase">deposit requests </span>
        <a class="pull-right btn btn-primary btn-xs" href="{{ route('admin.dashboard.deposits') }}">view all</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-dark" style="width: 100%" id="data-table">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>Account</th>
                    <th>Amount</th>
                    <th>P.O.P</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($deposits)
                    @foreach ($deposits as $deposit)
                    <tr>
                        <td>{{ $deposit->user->account_number }}</td>
                        <td>{{ $deposit->amount. ' ' .$deposit->currency }}</td>
                        <td>
                            <a href="{{ asset('/uploads/transactions/' .$deposit->pop) }}" target="_blank">
                                <img src="{{ asset('/uploads/transactions/' .$deposit->pop) }}" alt="pop"
                            style="width: 100%; height: 30px">
                            </a>
                        </td>
                        <td>{{ Str::limit($deposit->message, 10, '...') }}</td>
                        <td>[{{ $deposit->status }}]</td>
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

                            @if ($deposit->status == 'PENDING')
                            <button onclick="confirmActionButton('confirm-{{ $deposit->id }}')" class="btn btn-success btn-sm">
                                <i class="fa fa-check fa-fw"></i>
                            </button>
                            <button onclick="confirmActionButton('decline-{{ $deposit->id }}')" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban fa-fw"></i>
                            </button>
                            @else
                            <span class="badge badge-default">Reviewed</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
