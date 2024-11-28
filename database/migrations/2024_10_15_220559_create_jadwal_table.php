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
        Schema::create('jadwal', function (Blueprint $table) {
           $table->id(); // Kolom id sebagai primary key dan auto-increment
            $table->string('location', 50); // Kolom lokasi
            $table->enum('week', ['I', 'II', 'III', 'IV', 'V']); // Minggu ke berapa dalam bulan
            $table->time('time'); // Waktu kebaktian
            $table->string('language', 20); // Bahasa pengantar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
