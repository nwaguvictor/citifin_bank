<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UserDepositSubmit;
use App\Http\Requests\WithdrawalRequest;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //***VIEWS**** */

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
        $data['transactions'] = Transaction::with('user')->latest('updated_at')->paginate(5);
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

    // VIEWS END -------

    /**
     * User Dashboard - Deposit Money Submit
     * @param $request App\Http\Requests\UserDepositSubmit;
     */
    public function submit_deposit(UserDepositSubmit $request) {
        $user = User::where('id', Auth::id())->first();
        $min = Config::get('minimum_deposit', 100);
        $data = [];
        $txnId = 'CRD/'. date('ymd') . '/' .Str::upper(Str::random(10));

        if ($request->amount < $min) {
            return redirect()->back()->with('fail', "minimum amount to deposit must be equivalent of $$min");
        }

        // Storing File
        if ($request->hasFile('pop')) {
            $fileName = $this->fileNameGenerator($user, $request, 'pop');
            $request->file('pop')->storeAs('uploads/transactions', $fileName);
            $data['pop'] = $fileName;
        }

        $data['amount'] = $request->amount;
        $data['currency'] = $request->currency;
        $data['message'] = $request->message;
        $data['txnId'] = $txnId;

        // Transaction Data
        $transactionData['account_number'] = $user->account_number;
        $transactionData['txnId'] = $txnId;
        $transactionData['type'] = 'Credit';
        $transactionData['amount'] = $request->amount;

        DB::transaction(function () use ($user, $data, $transactionData) {
            $user->deposits()->create($data);
            $user->transactions()->create($transactionData);
        });

        return redirect()->route('user.dashboard')->with('success', 'Submit was successful, waiting for confirmation');

    }
    /**
     * User Dashboard - submit withrawal
     * @param $request App\Http\Requests\WithdrawalRequest
     */
    public function submit_withdrawal(WithdrawalRequest $request) {
        $user = User::where('id', Auth::id())->first();
        $min = Config::get('minimum_withdrawal', 100);
        $txnId = 'DEB/'. date('ymd') . '/' .Str::upper(Str::random(10));
        $request['txnId'] = $txnId;

        // Confirm minimum withdrawal
        if ($request->amount < $min) {
            return redirect()->back()->with('fail', "minimum withdrawal must be equivalent of $$min");
        }

        // Check account balance
        if ($user->balance < $request->amount) {
            return redirect()->back()->with('fail', 'insufficient account balance');
        }

        // Withdrawl from user's account
        $user->balance -= $request->amount;

        // Transaction Details
        $transactionData['account_number'] = $request->account_number;
        $transactionData['txnId'] = $txnId;
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
     * User Dashboard - User Profile Update
     * @param $request - Illuminate\Http\Request
     */
    public function user_profile_update(UpdateProfileRequest $request) {
        $user = User::where('id', Auth::id())->first();
        $data = [];

        // Uploading User's documents
        if ($request->hasFile('id_front')) {
            $fileName = $this->fileNameGenerator($user, $request, 'id_front');
            $request->file('id_front')->storeAs('uploads/documents', $fileName);
            $data['id_front'] = $fileName;
        }
        if ($request->hasFile('id_back')) {
            $fileName = $this->fileNameGenerator($user, $request, 'id_back');
            $request->file('id_back')->storeAs('uploads/documents', $fileName);
            $data['id_back'] = $fileName;
        }
        if ($request->hasFile('passport')) {
            $fileName = $this->fileNameGenerator($user, $request, 'passport');
            $request->file('passport')->storeAs('uploads/documents', $fileName);
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
