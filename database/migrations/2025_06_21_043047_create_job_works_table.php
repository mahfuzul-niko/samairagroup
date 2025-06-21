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
        Schema::create('job_works', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('logo')->nullable();
            $table->string('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('discription')->nullable();
            $table->string('salary')->nullable();
            $table->date('deadline');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('job_works');
    }
};
