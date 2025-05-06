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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('category_id');
            $table->foreignId('user_id')->nullable();
            $table->enum('course_for',['ssdi','language','both'])->default('ssdi');
            $table->enum('course_type',['online','offline','both','workshop','event'])->default('offline');
            $table->string('slug')->unique();
            $table->text('image')->nullable();
            $table->string('subtitle')->nullable();
            $table->date('start_date')->nullable();
            $table->date('registration_date')->nullable();
            $table->date('deadline')->nullable();
            $table->string('duration')->nullable();
            $table->string('batch')->nullable();
            $table->string('price')->nullable();
            $table->string('total_lessons')->nullable();
            $table->text('file')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('class_schedule')->nullable();
            $table->longText('description')->nullable();
            $table->json('keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
