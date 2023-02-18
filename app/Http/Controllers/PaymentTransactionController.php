<?php

namespace App\Http\Controllers;

use App\Models\PaymentTransaction;
use Illuminate\Http\Request;

class PaymentTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentTransaction  $paymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentTransaction $paymentTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentTransaction  $paymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentTransaction $paymentTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentTransaction  $paymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentTransaction $paymentTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentTransaction  $paymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentTransaction $paymentTransaction)
    {
        //
    }

    function calculatePayment(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => "required",
            'contact_number' => 'required|numeric',
            'payment_method' => 'required',
            'medical_fee' => 'required|numeric',
            'amount' => 'required|numeric'
        ]);

        $percentDiscount = 20;

        $firstName = $request->first_name;
        $middleName = $request->middle_name;
        $lastName = $request->last_name;
        $contactNumber = $request->contact_number;
        $paymentMethod = $request->payment_method;
        $medicalFee = $request->medical_fee;
        $discount = $request->discount;
        $amount = $request->amount;
        $totalAmountPaid = $request->total_amount_paid;
        $change = $request->change;

        if($discount === "PWD" || $discount === "Senior Citizen") {
            $discounted = $medicalFee / 100 * $percentDiscount;
            $totalAmountPaid = $discounted;
            $change = $amount - $discounted;
        } else {
            $totalAmountPaid = $medicalFee;
            $change = $amount - $medicalFee;
        }

        return view('payment_transaction', [
            'firstName' => $firstName,
            'middleName' => $middleName,
            'lastName' => $lastName,
            'contactNumber' => $contactNumber,
            'paymentMethod' => $paymentMethod,
            'medicalFee' => $medicalFee,
            'discount' => $discount,
            'amount' => $amount,
            'totalAmountPaid' => $totalAmountPaid,
            'change' => $change
        ]);
    }
}
