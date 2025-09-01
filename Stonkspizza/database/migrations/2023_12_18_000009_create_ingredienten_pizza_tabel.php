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
        Schema::create('ingredienten_van_pizza', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizza_id')->nullable(false)->references('id')->on('pizzas')->cascadeOnDelete();
            $table->foreignId('ingredient_id')->nullable(false)->references('id')->on('ingredienten')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredienten_pizza_tabel');
    }
};
