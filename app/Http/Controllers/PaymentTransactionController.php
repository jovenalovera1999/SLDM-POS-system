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

        $PWD = $seniorCitizen = 0.20;

        $discounted = 0;

        if($request->discount == "PWD" || $request->discount === "Senior Citizen") {
            $discounted = $request->medical_fee - ($request->medical_fee * $PWD || $seniorCitizen);
            $request->total_amout_paid = $discounted;
            $request->change = $request->amount - $discounted;
        } else {
            $request->total_amount_paid = $request->medical_fee;
            $request->change = $request->amount - $request->medical_fee;
        }

        $medicalFee = $request->medical_fee;
        $discount = $request->discount;
        $amount = $request->amount;
        $totalAmountPaid = $request->total_amount_paid;
        $change = $request->change;

        return view('payment_transaction', [
            'medicalFee' => $medicalFee,
            'discount' => $discount,
            'amount' => $amount,
            'totalAmountPaid' => $totalAmountPaid,
            'change' => $change
        ]);
    }
}
