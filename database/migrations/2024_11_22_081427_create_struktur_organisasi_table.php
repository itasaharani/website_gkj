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
        Schema::create('struktur_organisasi', function (Blueprint $table) {
            $table->id();
            $table->string('posisi'); // Posisi dalam organisasi (Ketua I, Ketua II, Komisi, Anggota)
            $table->string('nama');   // Nama orang yang menjabat posisi tersebut
            $table->string('bidang')->nullable(); // Bidang (misalnya "Bidang Pembinaan Warga Gereja") jika ada
            $table->foreignId('parent_id')->nullable()->constrained('struktur_organisasi')->onDelete('cascade'); // Relasi ke orang yang lebih tinggi (misal: Ketua I -> Ketua II)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('struktur_organisasi');
    }
};
