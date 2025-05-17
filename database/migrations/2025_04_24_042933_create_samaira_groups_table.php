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
        Schema::create('samaira_groups', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(0);
            $table->text('concern_image')->nullable();
            $table->text('concern_text')->nullable();
            $table->text('concern_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samaira_groups');
    }
};
