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
        Schema::create('producers_grower', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('producer_id')->nullable()->index('fk_id_producer');
            $table->bigInteger('client_id')->nullable()->index('fk_id_clients');
            $table->bigInteger('grower_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producers_grower');
    }
};
