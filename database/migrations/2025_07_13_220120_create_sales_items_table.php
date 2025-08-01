<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_sale_items_table.php
    public function up()
    {
        Schema::create('sale_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('size_id')->nullable()->constrained()->onDelete('set null');

            $table->decimal('original_price', 10, 2); // harga sebelum diskon
            $table->decimal('final_price', 10, 2);    // harga setelah diskon
            $table->decimal('discount_per_item', 10, 2)->default(0);

            $table->integer('quantity');
            $table->decimal('subtotal', 12, 2); // final_price * quantity

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_items');
    }
};
