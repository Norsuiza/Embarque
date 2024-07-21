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
        Schema::table('shipments', function (Blueprint $table) {
            $table->foreign(['client_id'], 'fk_id_client')->references(['id'])->on('clients')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['producer_grower_id'], 'fk_id_producer_grower')->references(['id'])->on('producers_grower')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipments', function (Blueprint $table) {
            $table->dropForeign('fk_id_client');
            $table->dropForeign('fk_id_producer_grower');
        });
    }
};
