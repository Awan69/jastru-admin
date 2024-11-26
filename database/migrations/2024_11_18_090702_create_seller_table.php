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
        Schema::create('seller', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id')->nullable();
            $table->Integer('product_id')->nullable();
            $table->Integer('seller_verification_id')->nullable();
            $table->string('bank_account')->nullable();
            $table->Integer('order_id')->nullable();
            $table->string('shop_name')->nullable();
            $table->text('status')->nullable();
            $table->text('level')->nullable();
            $table->integer('income')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller');
    }
};
