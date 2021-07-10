@extends('layouts.admin-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
    {{-- Withdrawal Tabel --}}
    <div>
        <span class="mr-3" style="text-transform: uppercase">withdrawal requests </span>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-dark" style="width: 100%">
            <thead style="background-color: #1BA8C6">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Bank Name</th>
                    <th>Address</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>Staus</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>[ APPROVED ]</td>
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
                    <td>2</td>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>[ APPROVED ]</td>
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
                    <td>3</td>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>[ APPROVED ]</td>
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
                    <td>4</td>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>[ APPROVED ]</td>
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
                    <td>5</td>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>[ APPROVED ]</td>
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
                    <td>6</td>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>[ APPROVED ]</td>
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
                    <td>7</td>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>[ APPROVED ]</td>
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
                    <td>8</td>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>[ APPROVED ]</td>
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
                    <td>9</td>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>[ APPROVED ]</td>
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
                    <td>10</td>
                    <td>Fistname Lastname</td>
                    <td>Central Bank</td>
                    <td>Dallas, USA</td>
                    <td>$1,000</td>
                    <td>USD</td>
                    <td>[ APPROVED ]</td>
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
</div>
@endsection
