<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about', [FrontendController::class, 'about_us'])->name('frontend.about');
Route::get('/contact', [FrontendController::class, 'contact_us'])->name('frontend.contact');

// USER DASHBOARD
Route::middleware('auth')->prefix('user/dashboard')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/deposit-money', [UserController::class, 'deposit_money'])->name('user.deposit_money');
    Route::post('/submit-deposit', [UserController::class, 'submit_deposit'])->name('user.deposit.submit');
    Route::get('/transfer-money', [UserController::class, 'transfer_money'])->name('user.transfer_money');
    Route::get('/request-withdrawal', [UserController::class, 'request_withdrawal'])->name('user.request_withdrawal');
    Route::post('/submit-withdrawal', [UserController::class, 'submit_withdrawal'])->name('user.withdrawal.submit');
    Route::get('/transaction-log', [UserController::class, 'transaction_log'])->name('user.transaction_log');
    Route::get('/user-profile', [UserController::class, 'user_profile'])->name('user.user_profile');
    Route::post('/user-profile', [UserController::class, 'user_profile_update'])->name('user.profile.update');
});

// ADMIN DASHBOARD
Route::middleware(['auth', 'admin'])->prefix('admin/dashboard')->group(function() {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [AdminDashboardController::class, 'get_users'])->name('admin.dashboard.users');

    Route::patch('/users/{user}/activate', [AdminDashboardController::class, 'activate_user'])
        ->name('admin.dashboard.user.activate');

    Route::patch('/users/{user}/deactivate', [AdminDashboardController::class, 'deactivate_user'])
        ->name('admin.dashboard.user.deactivate');

    Route::get('/users/{user}', [AdminDashboardController::class, 'get_user'])
        ->name('admin.dashboard.users.show');

    Route::post('/users/{user}/edit', [AdminDashboardController::class, 'update_user'])
        ->name('admin.dashboard.user.update');

    Route::get('/withdrawals', [AdminDashboardController::class, 'get_withdrawals'])
        ->name('admin.dashboard.withdrawals');

    Route::patch('/withdrawals/{withdrawal}/approve', [AdminDashboardController::class, 'approve_withdrawal'])
        ->name('admin.dashboard.withdrawal.approve');

    Route::patch('/withdrawals/{withdrawal}/decline', [AdminDashboardController::class, 'decline_withdrawal'])
        ->name('admin.dashboard.withdrawal.decline');

    Route::get('/deposits', [AdminDashboardController::class, 'get_deposits'])
        ->name('admin.dashboard.deposits');

    Route::patch('/deposits/{deposit}/confirm', [AdminDashboardController::class, 'confirm_deposit'])
        ->name('admin.dashboard.deposit.confirm');

    Route::patch('/deposits/{deposit}/decline', [AdminDashboardController::class, 'decline_deposit'])
        ->name('admin.dashboard.deposit.decline');

    Route::get('/transactions', [AdminDashboardController::class, 'get_transactions'])
        ->name('admin.dashboard.transactions');

    Route::get('/profile', [AdminDashboardController::class, 'admin_profile'])
        ->name('admin.dashboard.profile');
    Route::post('/profile/{user}/update', [AdminDashboardController::class, 'admin_profile_update'])
        ->name('admin.dashboard.profile.update');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
