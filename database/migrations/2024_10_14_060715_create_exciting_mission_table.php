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
        Schema::create('exciting_mission', function (Blueprint $table) {
            $table->id();
            $table->string('create_by');
            $table->string('partner_id');
            $table->string('name_mission', 250);
            $table->string('amount_reward');
            $table->string('remaining_ticket');
            $table->string('amount_ticket');
            $table->string('processing_time');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('mission_requirements', 250)->nullable();
            $table->string('steps', 250)->nullable();
            $table->string('status', 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exciting_mission');
    }
};
