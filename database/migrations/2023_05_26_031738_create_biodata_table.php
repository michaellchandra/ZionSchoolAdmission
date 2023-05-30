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
            $table->string('namaLengkap');
            $table->string('jenisKelamin');
            $table->string('alamatSiswa');
            $table->string('jenisTinggal');
            $table->string('tempatLahir');
            $table->date('birthday');
            $table->date('nomorIndukKependudukan');
            $table->integer('anakKeBerapa');
            $table->integer('jumlahSaudaraKandung');
            $table->integer('jumlahSaudaraTiriAngkat');
            $table->integer('tinggiBadan');
            $table->string('alatTransportasiKeSekolah');
            $table->string('agamaSiswa');
            $table->float('nomorTeleponHandphoneWhatsapp');
            $table->string('namaSekolahAsal');
            $table->string('alamatSekolahAsal');
            $table->string('provinsiSekolahAsal');
            $table->string('kabupatenKotaSekolahAsal');
            $table->string('kecamatanSekolahAsal');
            //Biodata Ibu Kandung
            $table->string('namaIbuKandung');
            $table->string('pekerjaanIbu');
            $table->string('penghasilanBulananIbu');
            $table->integer('nomorTeleponHandphoneWhatsappIbu');
            //Biodata Ayah Kandung
            $table->string('namaAyahKandung');
            $table->string('pekerjaanAyah');
            $table->string('penghasilanBulananAyah');
            $table->float('nomorTeleponHandphoneWhatsappAyah');
            //Biodata Wali
            $table->string('namaWali');
            $table->string('pekerjaanWali');
            $table->string('penghasilanBulananWali');
            $table->float('nomorTeleponHandphoneWhatsappWali');

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
