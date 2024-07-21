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
        Schema::table('shipments_details', function (Blueprint $table) {
            $table->foreign(['shipment_id'], 'fk_id_embarque_details')->references(['id'])->on('shipments')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipments_details', function (Blueprint $table) {
            $table->dropForeign('fk_id_embarque_details');
        });
    }
};
