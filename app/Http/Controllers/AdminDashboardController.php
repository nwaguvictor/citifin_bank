<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminDashboardController extends Controller
{
    // Views
    /**
     * Admin Dashboard - Home
     */
    public function index() {
        $data['title'] = 'Dashboard';
        $data['users'] = User::latest('updated_at')->limit(5)->get();
        $data['deposits'] = Deposit::with('user')->latest('updated_at')->limit(5)->get();
        $data['withdrawals'] = Withdrawal::with('user')->latest('updated_at')->limit(5)->get();
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

    public function activate_user(User $user) {
        if (!$user->account_number) {
            $accountNumber = $this->accountNumberGenerator($user);
            $user->update(['status' => 'ACTIVATED', 'account_number' => $accountNumber]);
        }else {
            $user->update(['status' => 'ACTIVATED']);
        }

        return redirect()->back()->with('success', 'User has been activated');
    }

    public function deactivate_user(User $user) {
        $user->update(['status' => 'DEACTIVATED']);
        return redirect()->back()->with('success', 'User has been deactivated');
    }
    /**
     * Admin Dashboard - Users
     */
    public function get_user(User $user) {
        $data['title'] = 'User Details';
        $data['user'] = $user;
        return view('admin-dashboard.user', $data);
    }

    public function update_user(Request $request, User $user) {
        $user->update($request->all());
        return redirect()->back()->with('success', 'User updated successfully');
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
            // Refund to user
            $withdrawal->user->balance += $withdrawal->amount;
            $withdrawal->user->save();
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

    /**
     * Admin Dashboard - Profile
     */
    public function admin_profile() {
        $data['title'] = 'Admin Profile';
        return view('admin-dashboard.profile', $data);
    }
    public function admin_profile_update(Request $request, User $user) {
        $user->update($request->all());
        return redirect()->back()->with('success', 'Profile Updated successfully');
    }

    /**
     * Admin Dashboard - Password Change
     */
    public function admin_passowrd_change() {
        $data['title'] = 'Change Password';
        return view('admin-dashboard.password', $data);
    }

    /**
     * Admin Dashboard - Password Update
     */
    public function admin_password_update(Request $request) {
        if ($request->password != $request->password_confirm) {
            return redirect()->back()->with('fail', 'Password does not match');
        }

        $user = User::where('id', $request->id)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.dashboard')->with('success', 'Password Updated successfully');
    }

    // Helper
    private function accountNumberGenerator($user, $limit = 10) {
        $randomNumber = rand(0000000, 9999999);
        $accountNumber = date('ym') . $user->id . $randomNumber;
        return Str::limit($accountNumber, $limit, null);
    }
}

