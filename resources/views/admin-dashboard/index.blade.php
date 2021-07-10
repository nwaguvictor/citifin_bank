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
        <table class="table table-bordered table-dark" style="width: 100%">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>Name</th>
                    <th>Account Number</th>
                    <th>Currency</th>
                    <th>Account Balance</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Firstname Lastname</td>
                    <td>09090xxxx</td>
                    <td>USD</td>
                    <td>$1000</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="#">
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
                <tr>
                    <td>Firstname Lastname</td>
                    <td>09090xxxx</td>
                    <td>EUR</td>
                    <td>&euro;1000</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="#">
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
            </tbody>
        </table>
    </div>

    <hr>
    {{-- Withdrawal Tabel --}}
    <div>
        <span class="mr-3" style="text-transform: uppercase">widthdrawals </span>
        <a class="pull-right btn btn-primary btn-xs" href="{{ route('admin.dashboard.withdrawals') }}">view all</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-dark" style="width: 100%">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>Name</th>
                    <th>Bank Name</th>
                    <th>Bank Address</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="#">
                            <i class="fa fa-check fa-fw"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fa fa-ban fa-fw"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="#">
                            <i class="fa fa-check fa-fw"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fa fa-ban fa-fw"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="#">
                            <i class="fa fa-check fa-fw"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fa fa-ban fa-fw"></i>
                        </a>
                    </td>
                </tr>
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
        <table class="table table-bordered table-dark" style="width: 100%">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>Account</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>P.O.P</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fa fa-download fa-fw"></i>
                        </a>
                        <a class="btn btn-success btn-sm" href="#">
                            <i class="fa fa-thumbs-o-up fa-fw"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fa fa-thumbs-o-down fa-fw"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fa fa-download fa-fw"></i>
                        </a>
                        <a class="btn btn-success btn-sm" href="#">
                            <i class="fa fa-thumbs-o-up fa-fw"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fa fa-thumbs-o-down fa-fw"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fa fa-download fa-fw"></i>
                        </a>
                        <a class="btn btn-success btn-sm" href="#">
                            <i class="fa fa-thumbs-o-up fa-fw"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fa fa-thumbs-o-down fa-fw"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fa fa-download fa-fw"></i>
                        </a>
                        <a class="btn btn-success btn-sm" href="#">
                            <i class="fa fa-thumbs-o-up fa-fw"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fa fa-thumbs-o-down fa-fw"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
