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
        Schema::table('producers_grower', function (Blueprint $table) {
            $table->foreign(['client_id'], 'fk_id_clients')->references(['id'])->on('clients')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['producer_id'], 'fk_id_producer')->references(['id'])->on('producers')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('producers_grower', function (Blueprint $table) {
            $table->dropForeign('fk_id_clients');
            $table->dropForeign('fk_id_producer');
        });
    }
};
