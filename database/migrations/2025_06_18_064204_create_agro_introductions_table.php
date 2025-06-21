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
        Schema::create('agro_introductions', function (Blueprint $table) {
            $table->id();
            $table->text('image_1')->nullable();
            $table->text('image_2')->nullable();
            $table->string('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('discription')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agro_introductions');
    }
};
