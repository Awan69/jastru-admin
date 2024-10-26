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
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->id();
            $table->string('balace_id');
            $table->string('mision_transaction_id')->nullable();
            $table->string('product_transaction_id')->nullable();
            $table->string('service_transaction_id')->nullable();
            $table->string('user_id');
            $table->text('detail')->nullable();
            $table->text('dec_transaction')->nullable();
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_detail');
    }
};
