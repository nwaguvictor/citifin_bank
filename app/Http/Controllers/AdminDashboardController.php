<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AdminDashboardController extends Controller
{
    /**
     * Admin Dashboard - Home
     */
    public function index() {
        $data['title'] = 'Dashboard';
        return view('admin-dashboard.index', $data);
    }

    /**
     * Admin Dashboard - Users
     */
    public function get_users() {
        $data['title'] = 'Users';
        return view('admin-dashboard.users', $data);
    }
    /**
     * Admin Dashboard - Users
     */
    public function get_user($user) {
        $data['title'] = 'User Details';
        return view('admin-dashboard.user', $data);
    }
    /**
     * Admin Dashboard - Withdrawals
     */
    public function get_withdrawals() {
        $data['title'] = 'Withdrawal Requests';
        return view('admin-dashboard.withdrawals', $data);
    }
    /**
     * Admin Dashboard - Deposits
     */
    public function get_deposits() {
        $data['title'] = 'Deposit Requests';
        return view('admin-dashboard.deposits', $data);
    }
    /**
     * Admin Dashboard - Transactions
     */
    public function get_transactions() {
        $data['title'] = 'Transactions';
        return view('admin-dashboard.transactions', $data);
    }
}

