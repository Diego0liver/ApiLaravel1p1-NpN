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
        Schema::create('mesa_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mesa_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('item_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesa_item');
    }
};
