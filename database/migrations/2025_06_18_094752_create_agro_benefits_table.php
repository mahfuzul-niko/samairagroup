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
        Schema::create('agro_benefits', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('list_1_title')->nullable();
            $table->string('list_1_subtitle')->nullable();
            $table->string('list_2_title')->nullable();
            $table->string('list_2_subtitle')->nullable();
            $table->string('list_3_title')->nullable();
            $table->string('list_3_subtitle')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agro_benefits');
    }
};
