<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// default ui
Route::get('/', function () {
    return view('pages.dashboard.home');
});

// transactions ui
Route::get('/transactions', function () {
    return view('pages.dashboard.transactions');
});

// payments ui
Route::get('/payments', function () {
    return view('pages.dashboard.payments');
});

// teamaccounts ui
Route::get('/teamaccounts', function () {
    return view('pages.dashboard.teamaccounts');
});

// api keys
Route::get('/developerapikey', function () {
    return view('pages.dashboard.developerapikey');
});

// ipwhitelisting
Route::get('/ipwhitelisting', function () {
    return view('pages.dashboard.ipwhitelisting');
});

// payout
Route::get('/payout', function () {
    return view('pages.dashboard.payout');
});

// transfer
Route::get('/transfer', function () {
    return view('pages.dashboard.transfer');
});

// withdraw
Route::get('/withdraw', function () {
    return view('pages.dashboard.withdraw');
});

// charges
Route::get('/charges', function () {
    return view('pages.dashboard.charges');
});

// others
Route::get('/others', function () {
    return view('pages.dashboard.others');
});

// hppview
Route::get('/hppview', function () {
    return view('pages.dashboard.hppview');
});
