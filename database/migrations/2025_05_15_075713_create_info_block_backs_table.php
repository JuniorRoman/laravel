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
        Schema::create('info_block_backs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('info_back_id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('rulles');
            $table->json('benefits')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_block_backs');
    }
};
