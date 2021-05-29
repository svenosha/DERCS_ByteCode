<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_payments', function (Blueprint $table) {
            $table->increments('PaymentID');
            $table->String('PaymentType');
            $table->String('PaymentDate');
            $table->String('PaymentTime');
            $table->String('PaymentTotal');
            $table->String('PaymentStatus');
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
        Schema::dropIfExists('_payments');
    }
}
