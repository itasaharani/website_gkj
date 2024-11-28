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
        Schema::create('bidang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ketua_id')->constrained('ketua')->onDelete('cascade');
            $table->string('nama_bidang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bidang');
    }
};
