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
      Schema::create('info_back', function (Blueprint $table) {
        $table->id();
        $table->foreignId('info_blocks_id')->constrained()->cascadeOnDelete();
        $table->foreignId('info_block_backs_id')->constrained()->cascadeOnDelete();
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_back');
    }
};
