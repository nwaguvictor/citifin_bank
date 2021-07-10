@extends('layouts.admin-dashboard')

@section('dashboard_content')
<div class="dashboard-content">
{{-- Users-table --}}
<div>
    <span class="mr-3" style="text-transform: uppercase">Users list </span>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-dark" style="width: 100%">
        <thead style="background-color: #1BA8C6">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Account</th>
                <th>Balance</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Firstname Lastname</td>
                <td>09090xxxx</td>
                <td>$1000</td>
                <td>[ DEACTIVATED ]</td>
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
                <td>2</td>
                <td>Firstname Lastname</td>
                <td>09090xxxx</td>
                <td>$1000</td>
                <td>[ DEACTIVATED ]</td>
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
                <td>3</td>
                <td>Firstname Lastname</td>
                <td>09090xxxx</td>
                <td>$1000</td>
                <td>[ ACTIVATED ]</td>
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
                <td>4</td>
                <td>Firstname Lastname</td>
                <td>09090xxxx</td>
                <td>$1000</td>
                <td>[ ACTIVATED ]</td>
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
                <td>5</td>
                <td>Firstname Lastname</td>
                <td>09090xxxx</td>
                <td>$1000</td>
                <td>[ ACTIVATED ]</td>
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
                <td>6</td>
                <td>Firstname Lastname</td>
                <td>09090xxxx</td>
                <td>$1000</td>
                <td>[ ACTIVATED ]</td>
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
                <td>7</td>
                <td>Firstname Lastname</td>
                <td>09090xxxx</td>
                <td>$1000</td>
                <td>[ ACTIVATED ]</td>
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
                <td>8</td>
                <td>Firstname Lastname</td>
                <td>09090xxxx</td>
                <td>$1000</td>
                <td>[ ACTIVATED ]</td>
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
                <td>9</td>
                <td>Firstname Lastname</td>
                <td>09090xxxx</td>
                <td>$1000</td>
                <td>[ DEACTIVATED ]</td>
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
                <td>10</td>
                <td>Firstname Lastname</td>
                <td>09090xxxx</td>
                <td>$1000</td>
                <td>[ DEACTIVATED ]</td>
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
</div>
@endsection
