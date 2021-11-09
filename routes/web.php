<?php

use App\Http\Controllers\GithubDeploymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', static function () {
    return view('home');
});

Route::get('about', static function () {
    return view('about');
});

Route::get('services', static function () {
    return view('services');
});

Route::get('investment', 'HomeController@investmentPackages');

Route::get('contact', static function () {
    return view('contact');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/users', 'UserController@index')->name('users');

// User Section
// Perform User logout
Route::get('user-logout', 'Auth\LoginController@logout')->name('user-logout');

// User Dashboard
Route::get('users/dashboard', 'UserController@index')->name('user-dashboard');

// User Investment
Route::resource('users/investment', 'InvestmentController');
Route::post('user/submit-investment', 'InvestmentController@submitInvestment');

// Account Settings
Route::get('user/account-settings', 'UserController@accountSettings');
Route::post('user/update-account', 'UserController@updateAccount');

// Withdrawal
Route::get('user/withdrawal', 'UserController@withdrawal');
Route::post('user/withdraw-amount', 'UserController@withdrawAmount');


// Admin Section
// Login Page
Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');

// Submit Login
Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);

// Perform Admin logout
Route::get('admin-logout', 'Auth\AdminLoginController@logout')->name('admin-logout');

//Admin Dashboard Page
Route::get('admin/dashboard', 'AdminController@index')->name('admin-dashboard');

//Admin Manage Users Page
Route::get('admin/manage-users', 'AdminController@manageUsers')->name('manage-users');

// Admin Approve User
Route::post('admin/approve-user/{id}', ['uses' => 'AdminController@approveUser']);

// Delete User
Route::post('admin/delete-user/{id}', ['uses' => 'AdminController@deleteUser']);

//Fund User Page
Route::get('admin/fund-wallet/{id}',
    ['as'=>'admin.fund-wallet', 'uses'=>'AdminController@fundWalletPage']
);

// Fund User Form
Route::post('admin/fund-wallet/{id}', ['uses' => 'AdminController@fundWallet']);

//Admin Manage Investments
Route::get('admin/manage-investments', 'AdminController@manageInvestments')->name('manage-investments');

// Admin Approve Investment
Route::post('admin/approve-investment/{id}', ['uses' => 'AdminController@approveInvestment']);

// Admin Manage Investment Packages
Route::resource('admin/investment-packages', 'InvestmentPackageController');

//Add User Investment Page
Route::get('admin/add-user-investment/{id}',
    ['as'=>'admin.add-user-investment', 'uses'=>'AdminController@addUserInvestmentPage']
);

//Add User Investment Form
Route::post('admin/add-user-investment/{id}', ['uses' => 'AdminController@addUserInvestment']);

//Admin Withdrawal Requests
Route::get('admin/withdrawal-requests', 'AdminController@withdrawalRequests')->name('withdrawal-requests');
// Admin Approve Withdrawals
Route::post('admin/approve-withdrawal/{id}', ['uses' => 'AdminController@approveWithdrawal']);

//Github Deployment
Route::post('github/deploy', [GithubDeploymentController::class, 'deploy']);
Route::post('github/deploy/test', [GithubDeploymentController::class, 'deployTest']);
