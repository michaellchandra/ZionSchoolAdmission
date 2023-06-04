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

            //Biodata Register
            $table->id();
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('namaLengkap');
            $table->string('jenisKelamin');
            $table->string('alamatSiswa');
            $table->string('jenisTinggal');
            $table->string('tempatLahir');
            $table->date('birthday');
            $table->bigInteger('nomorIndukKependudukan');
            $table->integer('anakKeBerapa');
            $table->integer('jumlahSaudaraKandung');
            $table->integer('jumlahSaudaraTiriAngkat');
            $table->integer('tinggiBadan');
            $table->string('alatTransportasiKeSekolah');
            $table->string('agamaSiswa');
            $table->bigInteger('nomorTeleponHandphoneWhatsapp');
            $table->string('namaSekolahAsal');
            $table->string('alamatSekolahAsal');
            $table->string('provinsiSekolahAsal');
            $table->string('kabupatenKotaSekolahAsal');
            $table->string('kecamatanSekolahAsal');
            //Biodata Ibu Kandung
            $table->string('namaIbuKandung');
            $table->string('pekerjaanIbu');
            $table->string('penghasilanBulananIbu');
            $table->bigInteger('nomorTeleponHandphoneWhatsappIbu');
            //Biodata Ayah Kandung
            $table->string('namaAyahKandung');
            $table->string('pekerjaanAyah');
            $table->string('penghasilanBulananAyah');
            $table->bigInteger('nomorTeleponHandphoneWhatsappAyah');
            //Biodata Wali
            $table->string('namaWali')->nullable();
            $table->string('pekerjaanWali')->nullable();
            $table->string('penghasilanBulananWali')->nullable();
            $table->bigInteger('nomorTeleponHandphoneWhatsappWali')->nullable();

            //Lampiran Dokumen Pribadi(Dalama bentuk Foto)
            $table->string('aktaKelahiran');
            $table->string('kartuKeluarga');
            $table->string('ktpAyahKandung');
            $table->string('ktpIbuKandung');
            $table->string('ktpWali');
            $table->string('kartuAnggota');
            //Lampiran Dokumen Administrasi(Dalam bentuk Foto)
            $table->string('scanRaportVIII');
            $table->string('suratRanking');
            $table->string('sertifLomba');
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
