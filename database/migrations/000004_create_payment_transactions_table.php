<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('UserId')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreignId('PatientId')
                ->references('id')->on('patients')
                ->onDelete('cascade');
            $table->string('PaymentMethod');
            $table->double('MedicalFee');
            $table->foreignId('DiscountId')
                ->references('id')->on('discounts')
                ->onDelete('cascade')
                ->nullable();
            $table->double('Amount');
            $table->double('TotalAmountPaid');
            $table->double('Change');
            $table->tinyInteger('IsDeleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_transactions');
    }
};
