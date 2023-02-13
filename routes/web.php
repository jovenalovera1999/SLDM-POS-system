<?php

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

Route::get('/', function () {
    return view('payment_transaction');
});

Route::post('calculate_payment', 'App\Http\Controllers\PaymentTransactionController@calculatePayment');

Route::resource('payment_transaction', 'App\Http\Controllers\PaymentTransactionController');