<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('Quotation_ID');
            $table->String('id');
            $table->String('DateRequest');
            $table->String('QuotationStatus');
            $table->String('QuotationNote');
            $table->String('ServiceType');
            $table->String('PickupStatus');
            $table->String('DeliveryStatus');
            $table->String('PickupEvidence');
            $table->String('DeliveryEvidence');
            $table->String('CODEvidence');
            $table->String('DeviceModel');
            $table->String('RepairPrice');
            $table->String('DeviceColor');
            $table->String('DeviceDamage');
            $table->String('DeviceSymptom');
            $table->String('RepairStatus');
            $table->String('RepairDetails');
            $table->String('TrackPickup');
            $table->String('TrackDelivery');
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
        Schema::dropIfExists('quotations');
    }
}
