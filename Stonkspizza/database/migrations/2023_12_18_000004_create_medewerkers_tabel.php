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
        Schema::create('medewerkers', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam')->nullable();
            $table->string('achternaam');
            $table->string('adres')->nullable();
            $table->string('telefoonnummer')->nullable();
            $table->string('stad')->nullable();
            $table->string('burger_service_nummer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medewerkers_tabel');
    }
};
