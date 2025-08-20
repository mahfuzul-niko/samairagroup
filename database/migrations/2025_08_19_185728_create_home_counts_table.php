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
        Schema::create('home_counts', function (Blueprint $table) {
            $table->id();
            $table->integer('legacy')->nullable();
            $table->integer('countries')->nullable();
            $table->integer('units')->nullable();
            $table->integer('brands')->nullable();
            $table->integer('employees')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_counts');
    }
};
