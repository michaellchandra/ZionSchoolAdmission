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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nameortu');
            $table->date('birthday');
            $table->char('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
