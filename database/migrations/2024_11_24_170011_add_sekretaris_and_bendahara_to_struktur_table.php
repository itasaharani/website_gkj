<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sekretaris_bendahara', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ketua_id')->constrained('ketua')->onDelete('cascade'); // Relasi ke tabel ketua
            $table->string('sekretaris')->nullable(); // Nama Sekretaris
            $table->string('bendahara')->nullable(); // Nama Bendahara
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekretaris_bendahara');
    }
};
