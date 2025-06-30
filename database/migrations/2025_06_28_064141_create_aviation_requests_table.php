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
        Schema::create('aviation_requests', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('journey')->nullable();
            $table->string('return')->nullable();
            $table->string('travelers')->nullable();
            $table->string('adults')->nullable();
            $table->string('children')->nullable();
            $table->string('class')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('special_request')->nullable();
            $table->boolean('mark')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aviation_requests');
    }
};
