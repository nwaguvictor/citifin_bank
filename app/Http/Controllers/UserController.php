<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * User Dashboard
     * @return View
     */
    public function index() {
        $data['title'] = 'Dashboard';

        return view('user-dashboard.index', $data);
    }

    /**
     * User Dashboard - Transfer Money
     * @return View
     */
    public function transfer_money() {
        $data['title'] = 'Transfer Money';

        return view('user-dashboard.transfer-money', $data);
    }

    /**
     * User Dashboard - Deposit Money
     * @return View
     */
    public function deposit_money() {
        $data['title'] = 'Deposit Money';

        return view('user-dashboard.deposit-money', $data);
    }

    /**
     * User Dashboard - Transaction Log
     * @return View
     */
    public function transaction_log() {
        $data['title'] = 'Transaction Log';

        return view('user-dashboard.transaction-log', $data);
    }

    /**
     * User Dashboard - request withrawal
     * @return View
     */
    public function request_withdrawal() {
        $data['title'] = 'Request Withdrawal';

        return view('user-dashboard.request-withdrawal', $data);
    }

    /**
     * User Dashboard - User Profile
     * @return View
     */
    public function user_profile() {
        $data['title'] = 'User Profile';

        return view('user-dashboard.user-profile', $data);
    }
}
