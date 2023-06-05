<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BiodataSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodata')->insert([
            
            [
                'userID' => 1,
                'namaLengkap' => 'John Doe',
                'jenisKelamin' => 'Laki-laki',
                'alamatSiswa' => 'Jalan ABC No. 123',
                'jenisTinggal' => 'Rumah sendiri',
                'tempatLahir' => 'Jakarta',
                'birthday' => '2000-01-01',
                'nomorIndukKependudukan' => 12345678,
                'anakKeBerapa' => 1,
                'jumlahSaudaraKandung' => 2,
                'jumlahSaudaraTiriAngkat' => 1,
                'tinggiBadan' => 170,
                'alatTransportasiKeSekolah' => 'Motor',
                'agamaSiswa' => 'Islam',
                'nomorTeleponHandphoneWhatsapp' => 987654321,
                'namaSekolahAsal' => 'SMA XYZ',
                'alamatSekolahAsal' => 'Jalan DEF No. 456',
                'provinsiSekolahAsal' => 'Jakarta',
                'kabupatenKotaSekolahAsal' => 'Jakarta Selatan',
                'kecamatanSekolahAsal' => 'Kebayoran Lama',
                'namaIbuKandung' => 'Jane Doe',
                'pekerjaanIbu' => 'Pegawai Swasta',
                'penghasilanBulananIbu' => 'Rp 5.000.000',
                'nomorTeleponHandphoneWhatsappIbu' => 123456789,
                'namaAyahKandung' => 'John Doe Sr.',
                'pekerjaanAyah' => 'PNS',
                'penghasilanBulananAyah' => 'Rp 7.000.000',
                'nomorTeleponHandphoneWhatsappAyah' => 987654321,
                'namaWali' => null,
                'pekerjaanWali' => 'N/A',
                'penghasilanBulananWali' => 'N/A',
                'nomorTeleponHandphoneWhatsappWali' => null,
                'aktaKelahiran' => 'akta_kelahiran.jpg',
                'kartuKeluarga' => 'kartu_keluarga.jpg',
                'ktpAyahKandung' => 'ktp_ayah.jpg',
                'ktpIbuKandung' => 'ktp_ibu.jpg',
                'ktpWali' => 'ktp_wali.jpg',
                'kartuAnggota' => 'kartu_anggota.jpg',
                'scanRaportVIII' => 'scan_raport.jpg',
                'suratRanking' => 'surat_ranking.jpg',
                'sertifLomba' => 'sertifikat_lomba.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
[
                'userID' => 2,
                'namaLengkap' => 'Jane Smith',
                'jenisKelamin' => 'Perempuan',
                'alamatSiswa' => 'Jalan GHI No. 456',
                'jenisTinggal' => 'Rumah sendiri',
                'tempatLahir' => 'Jakarta',
                'birthday' => '2002-02-02',
                'nomorIndukKependudukan' => 12345678,
                'anakKeBerapa' => 2,
                'jumlahSaudaraKandung' => 3,
                'jumlahSaudaraTiriAngkat' => 2,
                'tinggiBadan' => 160,
                'alatTransportasiKeSekolah' => 'Bus',
                'agamaSiswa' => 'Kristen',
                'nomorTeleponHandphoneWhatsapp' => 1234567890,
                'namaSekolahAsal' => 'SMA ABC',
                'alamatSekolahAsal' => 'Jalan XYZ No. 789',
                'provinsiSekolahAsal' => 'Jakarta',
                'kabupatenKotaSekolahAsal' => 'Jakarta Barat',
                'kecamatanSekolahAsal' => 'Kembangan',
                'namaIbuKandung' => 'Sarah Smith',
                'pekerjaanIbu' => 'Wiraswasta',
                'penghasilanBulananIbu' => 'Rp 7.000.000',
                'nomorTeleponHandphoneWhatsappIbu' => 555555555,
                'namaAyahKandung' => 'John Smith',
                'pekerjaanAyah' => 'PNS',
                'penghasilanBulananAyah' => 'Rp 10.000.000',
                'nomorTeleponHandphoneWhatsappAyah' => 555555555,
                'namaWali' => null,
                'pekerjaanWali' => 'N/A',
                'penghasilanBulananWali' => 'N/A',
                'nomorTeleponHandphoneWhatsappWali' => null,
                'aktaKelahiran' => 'akta_kelahiran.jpg',
                'kartuKeluarga' => 'kartu_keluarga.jpg',
                'ktpAyahKandung' => 'ktp_ayah.jpg',
                'ktpIbuKandung' => 'ktp_ibu.jpg',
                'ktpWali' => 'ktp_wali.jpg',
                'kartuAnggota' => 'kartu_anggota.jpg',
                'scanRaportVIII' => 'scan_raport.jpg',
                'suratRanking' => 'surat_ranking.jpg',
                'sertifLomba' => 'sertifikat_lomba.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'userID' => 3,
                'namaLengkap' => 'David Johnson',
                'jenisKelamin' => 'Laki-laki',
                'alamatSiswa' => 'Jalan MNO No. 789',
                'jenisTinggal' => 'Rumah sendiri',
                'tempatLahir' => 'Jakarta',
                'birthday' => '1999-03-03',
                'nomorIndukKependudukan' => 12345678,
                'anakKeBerapa' => 3,
                'jumlahSaudaraKandung' => 2,
                'jumlahSaudaraTiriAngkat' => 1,
                'tinggiBadan' => 175,
                'alatTransportasiKeSekolah' => 'Sepeda',
                'agamaSiswa' => 'Islam',
                'nomorTeleponHandphoneWhatsapp' => 1234567890,
                'namaSekolahAsal' => 'SMA DEF',
                'alamatSekolahAsal' => 'Jalan MNO No. 789',
                'provinsiSekolahAsal' => 'Jakarta',
                'kabupatenKotaSekolahAsal' => 'Jakarta Utara',
                'kecamatanSekolahAsal' => 'Tanjung Priok',
                'namaIbuKandung' => 'Sarah Johnson',
                'pekerjaanIbu' => 'Pegawai Swasta',
                'penghasilanBulananIbu' => 'Rp 6.000.000',
                'nomorTeleponHandphoneWhatsappIbu' => 555555555,
                'namaAyahKandung' => 'Michael Johnson',
                'pekerjaanAyah' => 'Wiraswasta',
                'penghasilanBulananAyah' => 'Rp 8.000.000',
                'nomorTeleponHandphoneWhatsappAyah' => 555555555,
                'namaWali' => 'Robert Williams',
                'pekerjaanWali' => 'PNS',
                'penghasilanBulananWali' => 'Rp 5.000.000',
                'nomorTeleponHandphoneWhatsappWali' => 1234567890,
                'aktaKelahiran' => 'akta_kelahiran.jpg',
                'kartuKeluarga' => 'kartu_keluarga.jpg',
                'ktpAyahKandung' => 'ktp_ayah.jpg',
                'ktpIbuKandung' => 'ktp_ibu.jpg',
                'ktpWali' => 'ktp_wali.jpg',
                'kartuAnggota' => 'kartu_anggota.jpg',
                'scanRaportVIII' => 'scan_raport.jpg',
                'suratRanking' => 'surat_ranking.jpg',
                'sertifLomba' => 'sertifikat_lomba.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
         // Add more student records here
        ]);
    }
}


