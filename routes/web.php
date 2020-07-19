<?php

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

Route::get('user/account-settings', 'UserController@accountSettings');
Route::post('user/update-account', 'UserController@updateAccount');


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

//Admin Manage Investments
Route::get('admin/manage-investments', 'AdminController@manageInvestments')->name('manage-investments');

// Admin Manage Investment Packages
Route::resource('admin/investment-packages', 'InvestmentPackageController');

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
