<x-admin-layout>
    <?php

    $data = DB::table('users')->get();
    $data2 = DB::table('biodata')->get();

    $itemId = request()->input('itemId');
    ?>
    <h1 class="text-black text-4xl font-black"> {{ $data[$itemId]->name }} details</h1>
    <br>

    <p>ID Siswa : {{ $data[$itemId]->id }}</p>
    <p>Nama Siswa : {{ $data[$itemId]->name }}</p>
    <p>Jenis Kelamin Siswa : {{ $data2[$itemId]->jenisKelamin }} </p>
    <p>Nama Orang Tua Siswa : {{ $data[$itemId]->nameortu }}</p>
    <p>Nomor Handphone Siswa : {{ $data[$itemId]->phone }}</p>

</x-admin-layout>
