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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('seller_id');
            $table->string('product_name');
            $table->char('sku')->unique();
            $table->integer('product_stock')->nullable();
            $table->integer('price');
            $table->text('detail_product')->nullable();
            $table->string('category_product')->nullable();
            $table->string('brand')->nullable();
            $table->string('dangerous_product');
            $table->date('expired_date')->nullable();
            $table->string('product_condision');
            $table->string('pre_order')->nullable();
            $table->integer('pre_order_day')->nullable();
            $table->integer('shipping_cost')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
