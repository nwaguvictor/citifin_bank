<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    // Views
    /**
     * Admin Dashboard - Home
     */
    public function index() {
        $data['title'] = 'Dashboard';
        $data['users'] = User::latest('updated_at')->limit(5)->get();
        $data['withdrawals'] = Withdrawal::with('user')->latest('updated_at')->limit(5)->get();
        $data['deposits'] = Deposit::with('user')->latest('updated_at')->limit(5)->get();
        return view('admin-dashboard.index', $data);
    }

    /**
     * Admin Dashboard - Users
     */
    public function get_users() {
        $data['title'] = 'Users';
        $data['users'] = User::latest('updated_at')->paginate(5);
        return view('admin-dashboard.users', $data);
    }
    /**
     * Admin Dashboard - Users
     */
    public function get_user($user) {
        $data['title'] = 'User Details';
        $data['user'] = User::where('id', $user)->first();
        return view('admin-dashboard.user', $data);
    }
    /**
     * Admin Dashboard - Withdrawals
     */
    public function get_withdrawals() {
        $data['title'] = 'Withdrawal Requests';
        $data['withdrawals'] = Withdrawal::with('user')->latest('updated_at')->paginate(5);
        return view('admin-dashboard.withdrawals', $data);
    }

    public function approve_withdrawal(Withdrawal $withdrawal) {
        DB::transaction(function () use ($withdrawal) {
            $withdrawal->update(['status' => 'APPROVED']);
            $transaction = Transaction::where('txnId', $withdrawal->txnId)->first();
            $transaction->update(['status' => 'SUCCESSFUL']);
        });
        return redirect()->back()->with('success', 'Withdrawal Approved');
    }
    public function decline_withdrawal(Withdrawal $withdrawal) {
        DB::transaction(function () use ($withdrawal) {
            $withdrawal->update(['status' => 'DECLINED']);
            $transaction = Transaction::where('txnId', $withdrawal->txnId)->first();
            $transaction->update(['status' => 'DECLINED']);
        });
        return redirect()->back()->with('success', 'Withdrawal Declined');
    }
    /**
     * Admin Dashboard - Deposits
     */
    public function get_deposits() {
        $data['title'] = 'Deposit Requests';
        $data['deposits'] = Deposit::with('user')->latest('updated_at')->paginate(5);
        return view('admin-dashboard.deposits', $data);
    }

    public function confirm_deposit(Deposit $deposit) {
        DB::transaction(function () use ($deposit) {
            $deposit->update(['status' => 'CONFIRMED']);
            $transaction = Transaction::where('txnId', $deposit->txnId)->first();
            $transaction->update(['status' => 'SUCCESSFUL']);

            $user = $deposit->user;
            $user->balance += $deposit->amount;
            $user->save();
        });
        return redirect()->back()->with('success', 'Deposit Confirmed');
    }

    public function decline_deposit(Deposit $deposit) {
        DB::transaction(function () use ($deposit) {
            $deposit->update(['status' => 'REJECTED']);
            $transaction = Transaction::where('txnId', $deposit->txnId)->first();
            $transaction->update(['status' => 'DECLINED']);
        });
        return redirect()->back()->with('success', 'Deposit Declined');
    }
    /**
     * Admin Dashboard - Transactions
     */
    public function get_transactions() {
        $data['title'] = 'Transactions';
        $data['transactions'] = Transaction::with('user')->latest('updated_at')->paginate(5);
        return view('admin-dashboard.transactions', $data);
    }
}

