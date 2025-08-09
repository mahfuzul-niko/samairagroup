<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emerging_order_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emerging_order_id')->constrained('emerging_orders')->onDelete('cascade');
            $table->foreignId('emerging_product_id')->constrained('emerging_products')->onDelete('cascade');
            $table->integer('quantity')->default(1);
            $table->decimal('price', 10, 2)->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emerging_order_product');
    }
};
