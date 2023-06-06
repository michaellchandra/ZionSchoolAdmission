<x-admin-layout>
    <br>
    <h1 class="text-black text-4xl font-black"> Pembayaran Formulir </h1>

    <?php
    $data = DB::table('biodata')->get();
    ?>

    {{-- @foreach ($data as $item)
        {{ $item->name }}
    @endforeach --}}


    <br><br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Calon Siswa</th>
                {{-- <th>Email</th> --}}
                {{-- <th>Nama Orang Tua</th> --}}
                <th>Bukti Pembayaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->userID }}</td>
                    <td>{{ $item->namaLengkap }}</td>
                    {{-- <td>{{ $item->email }}</td> --}}
                    {{-- <td>{{ $item->nameortu }}</td> --}}
                    <td>bukti.pdf</td>
                    <td>
                        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                            Approve
                        </button>
                        
                    </td>
                </tr>
            @endforeach
            {{-- <tr>
                <td>1</td>
                <td>Michael Chandra</td>
                <td>michaelchandra@gmail.com</td>
                <td>Chandra</td>
                <td>bukti.pdf</td>
                <td>
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Approve
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Michael Wijaya</td>
                <td>michaelwijaya@gmail.com</td>
                <td>Wijaya</td>
                <td>bukti.pdf</td>
                <td>
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Approve
                    </button>
                </td>
            </tr> --}}
        </tbody>
    </table>
</x-admin-layout>
