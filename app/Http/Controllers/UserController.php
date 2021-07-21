<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UserDepositSubmit;
use App\Http\Requests\WithdrawalRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
     * User Dashboard - Deposit Money Submit
     * @param $request App\Http\Requests\UserDepositSubmit;
     */
    public function submit_deposit(UserDepositSubmit $request) {
        $user = User::where('id', Auth::id())->first();
        $min = Config::get('minimum_deposit', 100);
        $data = [];

        if ($request->amount < $min) {
            return redirect()->back()->with('fail', "minimum amount to deposit is $$min");
        }

        // Storing File
        if ($request->hasFile('pop')) {
            $fileName = $this->fileNameGenerator($user, $request, 'pop');
            $request->file('pop')->storeAs('transactions', $fileName);
            $data['pop'] = $fileName;
        }

        $data['amount'] = $request->amount;
        $data['currency'] = $request->currency;
        $data['message'] = $request->message;

        // Transaction Data
        $transactionData['account_number'] = $user->account_number;
        $transactionData['txnId'] = 'CRD/'. date('ymd') . '/' .Str::upper(Str::random(10));
        $transactionData['type'] = 'Credit';
        $transactionData['amount'] = $request->amount;

        DB::transaction(function () use ($user, $data, $transactionData) {
            $user->deposits()->create($data);
            $user->transactions()->create($transactionData);
        });

        return redirect()->route('user.dashboard')->with('success', 'Submit was successful, waiting for confirmation');

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
     * User Dashboard - submit withrawal
     * @param $request App\Http\Requests\WithdrawalRequest
     */
    public function submit_withdrawal(WithdrawalRequest $request) {
        $user = User::where('id', Auth::id())->first();
        $min = Config::get('minimum_withdrawal', 100);

        // Confirm minimum withdrawal
        if ($request->amount < $min) {
            return redirect()->back()->with('fail', "minimum withdrawal is $$min");
        }

        // Check account balance
        if ($user->balance < $request->amount) {
            return redirect()->back()->with('fail', 'insufficient account balance');
        }

        // Withdrawl from user's account
        $user->balance -= $request->amount;

        // Transaction Details
        $transactionData['account_number'] = $request->account_number;
        $transactionData['txnId'] = 'DEB/'. date('ymd') . '/' .Str::upper(Str::random(10));
        $transactionData['type'] = 'Debit';
        $transactionData['amount'] = $request->amount;
        $transactionData['currency'] = $request->currency;

        // Run transactions
        DB::transaction(function () use ($user, $request, $transactionData) {
            $user->withdrawals()->create($request->all());
            $user->transactions()->create($transactionData);
            $user->save();
        });

        // redirect with success message
        return redirect()->route('user.dashboard')->with('success', 'Withdrawal successful, waiting approval');
    }

    /**
     * User Dashboard - User Profile
     * @return View
     */
    public function user_profile() {
        $data['title'] = 'User Profile';
        return view('user-dashboard.user-profile', $data);
    }

    /**
     * User Dashboard - User Profile Update
     * @param $request - Illuminate\Http\Request
     */
    public function user_profile_update(UpdateProfileRequest $request) {
        $user = User::where('id', Auth::id())->first();
        $data = [];

        // Uploading User's documents
        if ($request->hasFile('id_front')) {
            $fileName = $this->fileNameGenerator($user, $request, 'id_front');
            $request->file('id_front')->storeAs('uploads', $fileName);
            $data['id_front'] = $fileName;
        }
        if ($request->hasFile('id_back')) {
            $fileName = $this->fileNameGenerator($user, $request, 'id_back');
            $request->file('id_back')->storeAs('uploads', $fileName);
            $data['id_back'] = $fileName;
        }
        if ($request->hasFile('passport')) {
            $fileName = $this->fileNameGenerator($user, $request, 'passport');
            $request->file('passport')->storeAs('uploads', $fileName);
            $data['passport'] = $fileName;
        }

        $data['ssn'] = $request->ssn;
        $data['dob'] = $request->dob;
        $data['phone'] = $request->phone;

        // Update and send redirect with success message
        if ($user->update($data)) {
            return redirect()->back()->with('success', 'Profile updated successfully, account will be activated soon');
        }else {
            return redirect()->back()->with('fail', 'Error occured when updating profile');
        }

    }

    // Helper Methods
    private function fileNameGenerator($user, $request, $name) {
        $ext = $request->file($name)->extension();
        $username = $user->firstname.'_'.$user->lastname;
        return Str::lower(date('ymd'). '-' .$username. '-' .Str::random(10). '-' .$name. '.' .$ext);
    }
}
