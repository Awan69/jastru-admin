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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->string('seller_id');
            $table->string('service_name');
            $table->char('sku')->unique();
            $table->integer('service_time')->nullable();
            $table->integer('price');
            $table->text('detail_service')->nullable();
            $table->string('category_service')->nullable();
            $table->string('brand')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
