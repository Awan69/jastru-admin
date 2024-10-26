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
        Schema::create('exciting_mision_transaction', function (Blueprint $table) {
            $table->id();
            $table->string('balace_id');
            $table->string('user_id');
            $table->string('exciting_mission_tickets_id');
            $table->text('detail');
            $table->integer('balace_in');
            $table->integer('balace_out');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exciting_mision_transaction');
    }
};
