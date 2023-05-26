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
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap');
            $table->string('jenisKelamin');
            $table->string('nik');
            $table->integer('anakKeBerapa');
            $table->integer('jumlahSaudaraKandung');
            $table->integer('jumlahSaudaraTiri');
            $table->integer('tinggi');
            $table->string('alamatSiswa');
            $table->string('jenisTinggal');
            $table->string('transportasiSekolah');
            $table->string('Agama');
            $table->string('nomorWA');
            $table->string('asalSekolah');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata');
    }
};
