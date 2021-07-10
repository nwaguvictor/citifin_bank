<?php

use App\Http\Controllers\AdminDashboardController;
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
Route::get('/register', [FrontendController::class, 'register'])->name('frontend.register');

// USER DASHBOARD
Route::middleware([])->prefix('user/dashboard')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/deposit-money', [UserController::class, 'deposit_money'])->name('user.deposit_money');
    Route::get('/transfer-money', [UserController::class, 'transfer_money'])->name('user.transfer_money');
    Route::get('/request-withdrawal', [UserController::class, 'request_withdrawal'])->name('user.request_withdrawal');
    Route::get('/transaction-log', [UserController::class, 'transaction_log'])->name('user.transaction_log');
    Route::get('/user-profile', [UserController::class, 'user_profile'])->name('user.user_profile');
});

// ADMIN DASHBOARD
Route::middleware([])->prefix('admin/dashboard')->group(function() {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [AdminDashboardController::class, 'get_users'])->name('admin.dashboard.users');
    Route::get('/users/{user}', [AdminDashboardController::class, 'get_user'])->name('admin.dashboard.show');
    Route::get('/withdrawals', [AdminDashboardController::class, 'get_withdrawals'])->name('admin.dashboard.withdrawals');
    Route::get('/deposits', [AdminDashboardController::class, 'get_deposits'])->name('admin.dashboard.deposits');
    Route::get('/transactions', [AdminDashboardController::class, 'get_transactions'])->name('admin.dashboard.transactions');
});

