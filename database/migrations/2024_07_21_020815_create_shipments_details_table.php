<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipments_details', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('pallet_id')->nullable();
            $table->bigInteger('shipment_id')->nullable()->index('fk_id_embarque_details');
            $table->string('shipment_number')->nullable();
            $table->bigInteger('presentation_code')->nullable();
            $table->string('presentation_name')->nullable();
            $table->dateTime('shipment_date')->nullable();
            $table->string('code_maximun')->nullable();
            $table->string('code_minimun')->nullable();
            $table->decimal('box_quantity', 18, 6)->nullable();
            $table->decimal('weight', 18, 6)->nullable();
            $table->string('reference_1')->nullable();
            $table->string('reference_2')->nullable();
            $table->string('batch_id')->nullable();
            $table->string('gtin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments_details');
    }
};
