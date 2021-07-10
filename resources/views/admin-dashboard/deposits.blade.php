@extends('layouts.admin-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    {{-- Deposit-table --}}
    <div>
        <span class="mr-3" style="text-transform: uppercase">deposit requests </span>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-dark" style="width: 100%">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>#</th>
                    <th>Account</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>P.O.P</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>[ CONFIRMED ]</td>
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
                    <td>2</td>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>[ CONFIRMED ]</td>
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
                    <td>3</td>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>[ CONFIRMED ]</td>
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
                    <td>4</td>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>[ CONFIRMED ]</td>
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
                    <td>5</td>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>[ CONFIRMED ]</td>
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
                    <td>6</td>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>[ CONFIRMED ]</td>
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
                    <td>7</td>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>[ CONFIRMED ]</td>
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
                    <td>8</td>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>[ CONFIRMED ]</td>
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
                    <td>9</td>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>[ CONFIRMED ]</td>
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
                    <td>10</td>
                    <td>99090xxxx</td>
                    <td>$100</td>
                    <td>USD</td>
                    <td>
                        <img src="" alt="prof of payment">
                    </td>
                    <td>[ CONFIRMED ]</td>
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
