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
        Schema::create('shipments', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('shipment_number')->nullable();
            $table->dateTime('shipment_date')->nullable();
            $table->dateTime('shipment_hour')->nullable();
            $table->bigInteger('producer_grower_id')->nullable()->index('fk_id_producer_grower');
            $table->bigInteger('producer_id')->nullable()->index('shipments_index_producer_id');
            $table->bigInteger('client_id')->nullable()->index('fk_id_client');
            $table->string('contract')->nullable();
            $table->bigInteger('partner_id')->nullable();
            $table->bigInteger('season_id')->nullable();
            $table->string('driver')->nullable();
            $table->string('transport')->nullable();
            $table->string('refrigerated_box')->nullable();
            $table->decimal('pallets_total', 18, 6)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->enum('download_flag', ['1', '0'])->nullable();
            $table->softDeletes();

            $table->index(['producer_id', 'client_id', 'deleted_at'], 'shipments_id_index_producer_client');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
