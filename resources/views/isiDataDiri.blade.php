<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-white text-4xl font-black"> Selamat Datang! </h1>
            <h1 class="text-white text-2xl">{{ Auth::user()->name }} </h1>
            <br>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('biodata.create') }}" enctype="multipart/form-data">
                        @csrf
                        <h1 class="font-black text-2xl">I. Biodata Calon Siswa</h1>
                        <br>
                        <!-- Nama Calon Siswa-->
                        <div class= "flex justify-between items-center gap-3">
                            <div class="w-1/6">
                                <x-input-label for="name" :value="__('Nama Calon Siswa')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="namaLengkap"
                                    :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Jenis kelamin -->

                        <div class="flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                            <x-input-label for="jenisKelamin" :value="__('Jenis Kelamin')" />
                            </div>
                            <div class="w-5/6">
                        <div>
                                <label for="jenisKelamin-pria" class="inline-flex items-center">
                                <input id="jenisKelamin-pria" class="form-radio" type="radio" name="jenisKelamin" value="pria" required autofocus>
                            <span class="ml-2">Pria</span>
                                </label>
                            </div>
                            <div>
                                <label for="jenisKelamin-wanita" class="inline-flex items-center">
                                <input id="jenisKelamin-wanita" class="form-radio" type="radio" name="jenisKelamin" value="wanita" required>
                                <span class="ml-2">Wanita</span>
                                </label>
                            </div>
                            <x-input-error :messages="$errors->get('jenisKelamin')" class="mt-2" />
                            </div>
                        </div>

                        {{-- <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="jenisKelamin" :value="__('Jenis Kelamin')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="jenisKelamin" class="block mt-1 w-full" type="radio" name="jenisKelamin"
                                :value="old('jenisKelamin')" required autofocus autocomplete="jenisKelamin" />
                                <x-input-error :messages="$errors->get('jenisKelamin')" class="mt-2" />
                            </div>
                        </div> --}}

                        <!-- Nomor Induk Kependudukan -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="nomorIndukKependudukan" :value="__('NIK')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="nomorIndukKependudukan" class="block mt-1 w-full" type="number" name="nomorIndukKependudukan"
                                :value="old('nomorIndukKependudukan')" required autofocus autocomplete="nomorIndukKependudukan" />
                                <x-input-error :messages="$errors->get('nomorIndukKependudukan')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Tempat Lahir -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="tempatLahir" :value="__('Tempat Lahir')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" name="tempatLahir"
                                :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                                <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="birthday" :value="__('Tanggal Lahir')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday"
                                :value="old('birthday')" required autofocus autocomplete="birthday" />
                                <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Anak ke-berapa -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="anakKeBerapa" :value="__('Anak Ke-Berapa')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="anakKeBerapa" class="block mt-1 w-full" type="number" name="anakKeBerapa"
                                :value="old('anakKeBerapa')" required autofocus autocomplete="anakKeBerapa" />
                                <x-input-error :messages="$errors->get('anakKeBerapa')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Jumlah Saudara Kandung -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="jumlahSaudaraKandung" :value="__('Jumlah Saudara Kandung')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="jumlahSaudaraKandung" class="block mt-1 w-full" type="number" name="jumlahSaudaraKandung"
                                :value="old('jumlahSaudaraKandung')" required autofocus autocomplete="jumlahSaudaraKandung" />
                                <x-input-error :messages="$errors->get('jumlahSaudaraKandung')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Jumlah Saudara Tiri/Angkat -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="jumlahSaudaraTiriAngkat" :value="__('Jumlah Saudara Tiri/Angkat')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="jumlahSaudaraTiriAngkat" class="block mt-1 w-full" type="number" name="jumlahSaudaraTiriAngkat"
                                :value="old('jumlahSaudaraTiriAngkat')" required autofocus autocomplete="jumlahSaudaraTiriAngkat" />
                                <x-input-error :messages="$errors->get('jumlahSaudaraTiriAngkat')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Tinggi Badan -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="tinggiBadan" :value="__('Tinggi Badan')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="tinggiBadan" class="block mt-1 w-full" type="number" name="tinggiBadan"
                                :value="old('tinggiBadan')" required autofocus autocomplete="tinggiBadan" />
                                <x-input-error :messages="$errors->get('tinggiBadan')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Berat Badan -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="beratBadan" :value="__('Berat Badan')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="beratBadan" class="block mt-1 w-full" type="number" name="beratBadan"
                                :value="old('beratBadan')" required autofocus autocomplete="beratBadan" />
                                <x-input-error :messages="$errors->get('beratBadan')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Alamat Siswa -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="alamatSiswa" :value="__('Alamat Siswa')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="alamatSiswa" class="block mt-1 w-full" type="text" name="alamatSiswa"
                                :value="old('alamatSiswa')" required autofocus autocomplete="alamatSiswa" />
                                <x-input-error :messages="$errors->get('alamatSiswa')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Jenis Tinggal -->

                        <div class="flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                            <x-input-label for="jenisTinggal" :value="__('Jenis Tinggal')" />
                            </div>
                            <div class="w-5/6">
                                <select id="jenisTinggal" name="jenisTinggal" class="form-select block w-full mt-4 text-lg font-regular text-white bg-blue-900" required autofocus>
                                <option value="">Select an option</option>
                                <option value="orangtua">Bersama Orang Tau</option>
                                <option value="wali">Wali</option>
                                <option value="kost">Kost</option>
                                <option value="asrama">Asrama</option>
                            </select>
                            <x-input-error :messages="$errors->get('jenisTinggal')" class="mt-2" />
                            </div>
                        </div>

                        {{-- <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="jenisTinggal" :value="__('Jenis Tinggal')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="jenisTinggal" class="block mt-1 w-full" type="dropdown" name="jenisTinggal"
                                :value="old('jenisTinggal')" required autofocus autocomplete="jenisTinggal" />
                                <x-input-error :messages="$errors->get('jenisTinggal')" class="mt-2" />
                            </div>
                        </div> --}}

                        <!-- Alat Transportasi Ke Sekolah -->
                        <div class="flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                            <x-input-label for="alatTransportasiKeSekolah" :value="__('Alat Transportasi ke Sekolah')" />
                            </div>
                            <div class="w-5/6">
                                <select id="alatTransportasiKeSekolah" name="alatTransportasiKeSekolah" class="form-select block w-full mt-4 text-lg font-regular text-white bg-blue-900" required autofocus>
                                <option value="">Select an option</option>
                                <option value="kaki">Jalan Kaki</option>
                                <option value="mobil">Mobil Pribadi</option>
                                <option value="kendaran_umum">Kendaran Umum</option>
                                <option value="jemputan_sekolah">Jemputan Sekolah</option>
                                <option value="sepeda_motor">Sepeda Motor</option>
                                <option value="sepeda">Sepeda</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                            <x-input-error :messages="$errors->get('alatTransportasiKeSekolah')" class="mt-2" />
                            </div>
                        </div>

                        {{-- <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="alatTransportasiKeSekolah" :value="__('Alat Transportasi ke Sekolah')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="alatTransportasiKeSekolah" class="block mt-1 w-full" type="dropdown" name="alatTransportasiKeSekolah"
                                :value="old('alatTransportasiKeSekolah')" required autofocus autocomplete="alatTransportasiKeSekolah" />
                                <x-input-error :messages="$errors->get('alatTransportasiKeSekolah')" class="mt-2" />
                            </div>
                        </div> --}}

                        <!-- Agama Siswa -->

                        <div class="flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                            <x-input-label for="agamaSiswa" :value="__('Agama Siswa')" />
                            </div>
                            <div class="w-5/6">
                                <select id="agamaSiswa" name="agamaSiswa" class="form-select block w-full mt-4 text-lg font-regular text-blue-600" required autofocus>
                                <option value="">Pilih Agama</option>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="islam">Islam</option>
                                <option value="hindu">Hindu</option>
                                <option value="buddha">Buddha</option>
                                <option value="konghuchu">Konghuchu</option>
                                <option value="agama_lainnya">Lainnya</option>
                            </select>
                            <x-input-error :messages="$errors->get('agamaSiswa')" class="mt-2" />
                            </div>
                        </div>


                        {{-- <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="agamaSiswa" :value="__('Agama Siswa')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="agamaSiswa" class="block mt-1 w-full" type="dropdown" name="agamaSiswa"
                                :value="old('agamaSiswa')" required autofocus autocomplete="agamaSiswa" />
                                <x-input-error :messages="$errors->get('agamaSiswa')" class="mt-2" />
                            </div>
                        </div> --}}

                        <!-- Nomor Telepon / Handphone (WhatsApp) -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="nomorTeleponHandphoneWhatsapp" :value="__('Nomor Telepon / Handphone (WhatsApp)')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="nomorTeleponHandphoneWhatsapp" class="block mt-1 w-full" type="number" name="nomorTeleponHandphoneWhatsapp"
                                :value="old('nomorTeleponHandphoneWhatsapp')" required autofocus autocomplete="nomorTeleponHandphoneWhatsapp" />
                                <x-input-error :messages="$errors->get('nomorTeleponHandphoneWhatsapp')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Nama Sekolah Asal -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="namaSekolahAsal" :value="__('Nama Sekolah Asal')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="namaSekolahAsal" class="block mt-1 w-full" type="text" name="namaSekolahAsal"
                                :value="old('namaSekolahAsal')" required autofocus autocomplete="namaSekolahAsal" />
                                <x-input-error :messages="$errors->get('namaSekolahAsal')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Alamat Sekolah Asal -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="alamatSekolahAsal" :value="__('Alamat Sekolah Asal')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="alamatSekolahAsal" class="block mt-1 w-full" type="text" name="alamatSekolahAsal"
                                :value="old('alamatSekolahAsal')" required autofocus autocomplete="alamatSekolahAsal" />
                                <x-input-error :messages="$errors->get('alamatSekolahAsal')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Provinsi Sekolah Asal -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="provinsiSekolahAsal" :value="__('Provinsi Sekolah Asal')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="provinsiSekolahAsal" class="block mt-1 w-full" type="text" name="provinsiSekolahAsal"
                                :value="old('provinsiSekolahAsal')" required autofocus autocomplete="provinsiSekolahAsal" />
                                <x-input-error :messages="$errors->get('provinsiSekolahAsal')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Kabupaten/Kota Sekolah Asal -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="kabupatenKotaSekolahAsal" :value="__('Kabupaten/Kota Sekolah Asal')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="kabupatenKotaSekolahAsal" class="block mt-1 w-full" type="text" name="kabupatenKotaSekolahAsal"
                                :value="old('kabupatenKotaSekolahAsal')" required autofocus autocomplete="kabupatenKotaSekolahAsal" />
                                <x-input-error :messages="$errors->get('kabupatenKotaSekolahAsal')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Kecamatan Sekolah Asal -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="kecamatanSekolahAsal" :value="__('Kecamatan Sekolah Asal')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="kecamatanSekolahAsal" class="block mt-1 w-full" type="text" name="kecamatanSekolahAsal"
                                :value="old('kecamatanSekolahAsal')" required autofocus autocomplete="kecamatanSekolahAsal" />
                                <x-input-error :messages="$errors->get('kecamatanSekolahAsal')" class="mt-2" />
                            </div>
                        </div>


                        {{-- Biodata Ibu Kandung -------------------------------------------------------------------------------------------}}
                        <br> <br>
                        <h1 class="font-black text-2xl">II. Biodata Ibu Kandung</h1>
                        <br>
                        <!-- Nama Ibu Kandung -->
                        <div class= "flex justify-between items-center gap-3">
                            <div class="w-1/6">
                                <x-input-label for="namaIbuKandung" :value="__('Nama Lengkap')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="namaIbuKandung" class="block mt-1 w-full" type="text" name="namaIbuKandung"
                                    :value="old('namaIbuKandung')" required autofocus autocomplete="namaIbuKandung" />
                                <x-input-error :messages="$errors->get('namaIbuKandung')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Pekerjaan Ibu -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="pekerjaanIbu" :value="__('Pekerjaan')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="pekerjaanIbu" class="block mt-1 w-full" type="text" name="pekerjaanIbu"
                                :value="old('pekerjaanIbu')" required autofocus autocomplete="pekerjaanIbu" />
                                <x-input-error :messages="$errors->get('pekerjaanIbu')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Penghasilan Bulanan Ibu -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="penghasilanBulananIbu" :value="__('Penghasilan Bulanan Ibu')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="penghasilanBulananIbu" class="block mt-1 w-full" type="number" name="penghasilanBulananIbu"
                                :value="old('penghasilanBulananIbu')" required autofocus autocomplete="penghasilanBulananIbu" />
                                <x-input-error :messages="$errors->get('penghasilanBulananIbu')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Nomor Telepon / Handphone (WhatsApp) Ibu -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="nomorTeleponHandphoneWhatsappIbu" :value="__('Nomor Telepon / Handphone (WhatsApp) Ibu')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="nomorTeleponHandphoneWhatsappIbu" class="block mt-1 w-full" type="number" name="nomorTeleponHandphoneWhatsappIbu"
                                :value="old('nomorTeleponHandphoneWhatsappIbu')" required autofocus autocomplete="nomorTeleponHandphoneWhatsappIbu" />
                                <x-input-error :messages="$errors->get('nomorTeleponHandphoneWhatsappIbu')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Biodata Ayah Kandung -------------------------------------------------------------------------------------------}}
                        <br> <br>
                        <h1 class="font-black text-2xl">III. Biodata Ayah Kandung</h1>
                        <br>
                        <!-- Nama Ayah Kandung -->
                        <div class= "flex justify-between items-center gap-3">
                            <div class="w-1/6">
                                <x-input-label for="namaAyahKandung" :value="__('Nama Lengkap')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="namaAyahKandung" class="block mt-1 w-full" type="text" name="namaAyahKandung"
                                    :value="old('namaAyahKandung')" required autofocus autocomplete="namaAyahKandung" />
                                <x-input-error :messages="$errors->get('namaAyahKandung')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Pekerjaan Ayah -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="pekerjaanAyah" :value="__('Pekerjaan')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="pekerjaanAyah" class="block mt-1 w-full" type="text" name="pekerjaanAyah"
                                :value="old('pekerjaanAyah')" required autofocus autocomplete="pekerjaanAyah" />
                                <x-input-error :messages="$errors->get('pekerjaanAyah')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Penghasilan Bulanan Ayah -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="penghasilanBulananAyah" :value="__('Penghasilan Bulanan Ayah')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="penghasilanBulananAyah" class="block mt-1 w-full" type="number" name="penghasilanBulananAyah"
                                :value="old('penghasilanBulananAyah')" required autofocus autocomplete="penghasilanBulananAyah" />
                                <x-input-error :messages="$errors->get('penghasilanBulananAyah')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Nomor Telepon / Handphone (WhatsApp) Ayah -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="nomorTeleponHandphoneWhatsappAyah" :value="__('Nomor Telepon / Handphone (WhatsApp) Ayah')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="nomorTeleponHandphoneWhatsappAyah" class="block mt-1 w-full" type="number" name="nomorTeleponHandphoneWhatsappAyah"
                                :value="old('nomorTeleponHandphoneWhatsappAyah')" required autofocus autocomplete="nomorTeleponHandphoneWhatsappAyah" />
                                <x-input-error :messages="$errors->get('nomorTeleponHandphoneWhatsappAyah')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Biodata Wali -------------------------------------------------------------------------------------------}}
                        <br> <br>
                        <h1 class="font-black text-2xl">IV. Biodata Wali</h1>
                        <br>
                        <!-- Nama Wali -->
                        <div class= "flex justify-between items-center gap-3">
                            <div class="w-1/6">
                                <x-input-label for="namaWali" :value="__('Nama Lengkap')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="namaWali" class="block mt-1 w-full" type="text" name="namaWali"
                                    :value="old('namaWali')" required autofocus autocomplete="namaWali" />
                                <x-input-error :messages="$errors->get('namaWali')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Pekerjaan Wali -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="pekerjaanWali" :value="__('Pekerjaan')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="pekerjaanWali" class="block mt-1 w-full" type="text" name="pekerjaanWali"
                                :value="old('pekerjaanWali')" required autofocus autocomplete="pekerjaanWali" />
                                <x-input-error :messages="$errors->get('pekerjaanWali')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Penghasilan Bulanan Wali -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="penghasilanBulananWali" :value="__('Penghasilan Bulanan Wali')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="penghasilanBulananWali" class="block mt-1 w-full" type="number" name="penghasilanBulananWali"
                                :value="old('penghasilanBulananWali')" required autofocus autocomplete="penghasilanBulananWali" />
                                <x-input-error :messages="$errors->get('penghasilanBulananWali')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Nomor Telepon / Handphone (WhatsApp) Wali -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="nomorTeleponHandphoneWhatsappWali" :value="__('Nomor Telepon / Handphone (WhatsApp) Wali')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="nomorTeleponHandphoneWhatsappWali" class="block mt-1 w-full" type="number" name="nomorTeleponHandphoneWhatsappWali"
                                :value="old('nomorTeleponHandphoneWhatsappWali')" required autofocus autocomplete="nomorTeleponHandphoneWhatsappWali" />
                                <x-input-error :messages="$errors->get('nomorTeleponHandphoneWhatsappWali')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Lampiran Dokumen Pribadi -------------------------------------------------------------------------------------------}}
                        <br> <br>
                        <h1 class="font-black text-2xl">V. Lampiran Dokumen Pribadi</h1>
                        <h1>Mohon hasil foto/scan dapat terlihat dengan jelas (tidak kabur/goyang)</h1>
                        <br>

                        {{-- Akta Kelahiran --}}
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="aktaKelahiran" :value="__('Akta Kelahiran')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="aktaKelahiran" class="block mt-1" type="file" name="aktaKelahiran"
                                :value="old('aktaKelahiran')" autocomplete="off" />
                                <x-input-error :messages="$errors->get('aktaKelahiran')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Kartu Keluarga --}}
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="kartuKeluarga" :value="__('Kartu Keluarga')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="kartuKeluarga" class="block mt-1" type="file" name="kartuKeluarga"
                                :value="old('kartuKeluarga')" autocomplete="off" />
                                <x-input-error :messages="$errors->get('kartuKeluarga')" class="mt-2" />
                            </div>
                        </div>

                        {{-- KTP Ayah Kandung --}}
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="ktpAyahKandung" :value="__('KTP Ayah Kandung')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="ktpAyahKandung" class="block mt-1" type="file" name="ktpAyahKandung"
                                :value="old('ktpAyahKandung')" autocomplete="off" />
                                <x-input-error :messages="$errors->get('ktpAyahKandung')" class="mt-2" />
                            </div>
                        </div>

                        {{-- KTP Ibu Kandung --}}
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="ktpIbuKandung" :value="__('KTP Ibu Kandung')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="ktpIbuKandung" class="block mt-1" type="file" name="ktpIbuKandung"
                                :value="old('ktpIbuKandung')" required autocomplete="ktpIbuKandung" />
                                <x-input-error :messages="$errors->get('ktpIbuKandung')" class="mt-2" />
                            </div>
                        </div>

                        {{-- KTP Wali --}}
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="ktpWali" :value="__('KTP Wali')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="ktpWali" class="block mt-1" type="file" name="ktpWali"
                                :value="old('ktpWali')" autocomplete="off" />
                                <x-input-error :messages="$errors->get('ktpWali')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Kartu Anggota/Surat Keterangan Jemaat GKKA --}}
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="kartuAnggota" :value="__('Kartu Anggota/Surat Keterangan Jemaat GKKA')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="kartuAnggota" class="block mt-1" type="file" name="kartuAnggota"
                                :value="old('kartuAnggota')" autocomplete="off" />
                                <x-input-error :messages="$errors->get('kartuAnggota')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Lampiran Dokumen Administrasi -------------------------------------------------------------------------------------------}}
                        <br> <br>
                        <h1 class="font-black text-2xl">VI. Lampiran Dokumen Administrasi</h1>
                        <h1>Mohon hasil foto/scan dapat terlihat dengan jelas (tidak kabur/goyang)</h1>
                        <br>

                        {{-- Scan Raport Kelas VIII Semester 1 dan 2 --}}
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="scanRaportVIII" :value="__('Scan Raport Kelas VIII Semester 1 dan 2')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="scanRaportVIII" class="block mt-1" type="file" name="scanRaportVIII"
                                :value="old('scanRaportVIII')" autocomplete="off" />
                                <x-input-error :messages="$errors->get('scanRaportVIII')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Surat Keterangan Ranking dari Kepala Sekolah --}}
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="suratRanking" :value="__('Surat Keterangan Ranking dari Kepala Sekolah')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="suratRanking" class="block mt-1" type="file" name="suratRanking"
                                :value="old('suratRanking')" autocomplete="off" />
                                <x-input-error :messages="$errors->get('suratRanking')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Sertifikat Lomba Akademik/Non-Akademik --}}
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="sertifLomba" :value="__('Sertifikat Lomba Akademik/Non-Akademik')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="sertifLomba" class="block mt-1" type="file" name="sertifLomba"
                                :value="old('sertifLomba')" autocomplete="off" />
                                <x-input-error :messages="$errors->get('sertifLomba')" class="mt-2" />
                            </div>
                        </div>

                        {{-- <!-- Email Address -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="email" :value="__('Email Aktif')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Nomor Telefon -->
                        <div class= "flex justify-between items-center gap-3 mt-4">
                            <div class="w-1/6">
                                <x-input-label for="phone" :value="__('Nomor Telepon')" />
                            </div>
                            <div class="w-5/6">
                                <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone"
                                :value="old('phone')" autocomplete="off" />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div> --}}

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="">
                                {{ __('Already registered?') }}
                            </a>

                            <x-primary-button class="ml-4">
                                {{ __('Masukkan Data') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
