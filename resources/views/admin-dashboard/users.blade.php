@extends('layouts.admin-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
{{-- Users-table --}}
<div>
    <span class="mr-3" style="text-transform: uppercase">Users list </span>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-dark" style="width: 100%" id="data-table">
        <thead style="background-color: #1BA8C6">
            <tr>
                <th>Name</th>
                <th>Account Number</th>
                <th>Account Balance</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($users)
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->fullName }}</td>
                    <td>{{ $user->account_number }}</td>
                    <td>{{ $user->balance. ' ' .$user->account_type }}</td>
                    <td>[ {{ $user->status }} ]</td>
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
    <div class="text-center">
        {{ $users->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
</div>
@endsection
