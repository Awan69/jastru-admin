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
        Schema::create('exciting_mission_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('exciting_mission_id', 10);
            $table->string('user_id', 10);
            $table->string('files', 250)->nullable();
            $table->string('status', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exciting_mission_tickets');
    }
};
