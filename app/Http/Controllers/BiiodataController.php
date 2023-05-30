<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiiodataController extends Controller
{
    //save data from form
    public function create(Request $REQUEST)
    {
        //validasi foto
        $this->validate($request, [
            'aktaKelahiran' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'kartuKeluarga' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'ktpAyahKandung' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'ktpIbuKandung' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'ktpWali' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'kartuAnggota' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'scanRaportVIII' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'suratRanking' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'sertifLomba' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

            
        ]);

        $aktaKelahiran_path = $request->file('aktaKelahiran')->store('Image', 'public');
        $kartuKeluarga_path = $request->file('kartuKeluarga')->store('Image', 'public');
        $ktpAyahKandung_path = $request->file('ktpAyahKandung')->store('Image', 'public');
        $ktpIbuKandung_path = $request->file('ktpIbuKandung')->store('Image', 'public');
        $ktpWali_path = $request->file('ktpWali')->store('Image', 'public');
        $kartuAnggota_path = $request->file('kartuAnggota')->store('Image', 'public');
        $scanRaportVIII_path = $request->file('scanRaportVIII')->store('Image', 'public');
        $suratRanking_path = $request->file('suratRanking')->store('Image', 'public');
        $sertifLomba_path = $request->file('sertifLomba')->store('Image', 'public');

        $data = biodata::create([
            'userID' => auth()->user()->id,
            //Biodata Register
            'namaLengkap' => $request->namaLengkap,
            'jenisKelamin' => $request->jenisKelamin,
            'alamatSiswa' => $request->alamatSiswa,
            'jenisTinggal' => $request->jenisTinggal,
            'tempatLahir' => $request->tempatLahir,
            'birthday' => $request->birthday,
            'nomorIndukKependudukan' => $request->nomorIndukKependudukan,
            'anakKeBerapa' => $request->anakKeBerapa,
            'jumlahSaudaraKandung' => $request->jumlahSaudaraKandung,
            'jumlahSaudaraTiriAngkat' => $request->jumlahSaudaraTiriAngkat,
            'tinggiBadan' => $request->tinggiBadan,
            'alatTransportasiKeSekolah' => $request->alatTransportasiKeSekolah,
            'agamaSiswa' => $request->agamaSiswa,
            'nomorTeleponHandphoneWhatsapp' => $request->nomorTeleponHandphoneWhatsapp,
            'namaSekolahAsal' => $request->namaSekolahAsal,
            'alamatSekolahAsal' => $request->alamatSekolahAsal,
            'provinsiSekolahAsal' => $request->provinsiSekolahAsal,
            'kabupatenKotaSekolahAsal' => $request->kabupatenKotaSekolahAsal,
            'kecamatanSekolahAsal' => $request->kecamatanSekolahAsal,
            //Biodata Ibu
            'namaIbuKandung' => $request->namaIbuKandung,
            'pekerjaanIbu' => $request->pekerjaanIbu,
            'penghasilanBulananIbu' => $request->penghasilanBulananIbu,
            'nomorTeleponHandphoneWhatsappIbu' => $request->nomorTeleponHandphoneWhatsappIbu,
            //Biodata Ayah
            'namaAyahKandung' => $request->namaAyahKandung,
            'pekerjaanAyah' => $request->pekerjaanAyah,
            'penghasilanBulananAyah' => $request->penghasilanBulananAyah,
            'nomorTeleponHandphoneWhatsappAyah' => $request->nomorTeleponHandphoneWhatsappAyah,
            //Biodata Wali
            'namaWali' => $request->namaWali,
            'pekerjaanWali' => $request->pekerjaanWali,
            'penghasilanBulananWali' => $request->penghasilanBulananWali,
            'nomorTeleponHandphoneWhatsappWali' => $request->nomorTeleponHandphoneWhatsappWali,

        //Dokumen Foto
            'aktaKelahiran' => $aktaKelahiran_path,
            'kartuKeluarga' => $kartuKeluarga_path,
            'ktpAyahKandung' => $request->ktpAyahKandung_patjh,
            'ktpIbuKandung' => $request->ktpIbuKandung_path,
            'ktpWali' => $request->ktpWali_path,
            'kartuAnggota' => $request->kartuAnggota_path,
            'scanRaportVIII' => $request->scanRaportVIII_path,
            'suratRanking' => $request->suratRanking_path,
            'sertifLomba' => $request->sertifLomba_path,
        ]);


        return redirect()->route('kontak');
    }
}
