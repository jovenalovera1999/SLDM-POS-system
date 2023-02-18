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

// Route::get('/', function () {
//     $firstName = null;
//     $middleName = null;
//     $lastName = null;
//     $contactNumber = null;
//     $paymentMethod = null;
//     $medicalFee = null;
//     $discount = null;
//     $amount = null;
//     $totalAmountPaid = null;
//     $change = null;
// 
//     return view('payment_transaction', [
//         'firstName' => $firstName,
//         'middleName' => $middleName,
//         'lastName' => $lastName,
//         'contactNumber' => $contactNumber,
//         'paymentMethod' => $paymentMethod,
//         'medicalFee' => $medicalFee,
//         'discount' => $discount,
//         'amount' => $amount,
//         'totalAmountPaid' => $totalAmountPaid,
//         'change' => $change
//     ]);
// });

Route::get('/', function () {
    return view('register');
});

Route::post('calculate_payment', 'App\Http\Controllers\PaymentTransactionController@calculatePayment');

Route::get('transaction_history', 'App\Http\Controllers\PaymentTransactionController@transactionHistoryIndex');
Route::get('register', 'App\Http\Controllers\UserController@registerView');

Route::resource('payment_transaction', 'App\Http\Controllers\PaymentTransactionController');
Route::resource('transaction_history', 'App\Http\Controllers\TransactionHistoryController');
Route::resource('user', 'App\Http\Controllers\UserController');