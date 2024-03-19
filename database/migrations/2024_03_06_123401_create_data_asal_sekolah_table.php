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
        Schema::create('data_asal_sekolah', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('kode_asal_sekolah');
            $table->string('nama_asal_sekolah');
            $table->string('deskripsi');
            $table->string('kota_asal_sekolah');
            $table->string('provinsi_asal_sekolah');
            $table->unique(array('kode_asal_sekolah'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_asal_sekolah');
    }
};
