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
        Schema::table('featured_courses', function (Blueprint $table) {
          $table->enum('for',['ssdi','language','both'])->default('ssdi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('featured_courses', function (Blueprint $table) {
            $table->dropColumn('for');
        });
    }
};
