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
                <th>Account Name</th>
                <th>Account</th>
                <th>Balance</th>
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
                        {{-- Submission form --}}
                        <form action="{{ route('admin.dashboard.user.activate', $user->id) }}" method="POST" id="activate-{{ $user->id }}">
                            @method('PATCH')
                            @csrf
                        </form>

                        <form action="{{ route('admin.dashboard.user.deactivate', $user->id) }}" method="POST" id="deactivate-{{ $user->id }}">
                            @method('PATCH')
                            @csrf
                        </form>

                        <a class="btn btn-primary btn-sm" href="{{route('admin.dashboard.users.show', $user->id)}}" title="download">
                            <i class="fa fa-eye fa-fw"></i>
                        </a>

                        <button onclick="confirmActionButton('activate-{{ $user->id }}')" class="btn btn-success btn-sm">
                            <i class="fa fa-play fa-fw"></i>
                        </button>

                        <button onclick="confirmActionButton('deactivate-{{ $user->id }}')" class="btn btn-sm btn-danger">
                            <i class="fa fa-pause fa-fw"></i>
                        </button>
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
