<x-admin-layout>
    <x-slot name="header">

    </x-slot>

    <?php
        $data = DB::table('biodata')->get();
        $length = count($data);
    ?>

    <h1 class="text-black text-4xl font-black"> Dashboard </h1>

    @for ($i = 0; $i < $length; $i++)

    @endfor

    <br>
    <p>Jumlah pendaftar saat ini : {{ $i }}</p>

</x-admin-layout>
