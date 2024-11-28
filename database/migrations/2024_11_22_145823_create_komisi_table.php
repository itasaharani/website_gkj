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
        Schema::create('komisi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidang_id')->constrained('bidang')->onDelete('cascade');
            $table->string('nama_komisi');
            $table->string('anggota'); // Anggota dipisahkan dengan koma
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('komisi');
    }
};
