<x-admin-layout>
    <?php
    $data = DB::table('users')->get();
    ?>

    <br>
    <h1 class="text-black text-4xl font-black"> Data Pendaftar </h1>

    <br><br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Calon Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Nama Orang Tua</th>
                <th>Nomor HP</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nameortu }}</td>
                <td>{{ $item->phone }}</td>
                <td>
                    <button class="bg-sidebar hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </button>
                    <button class="bg-red-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
            {{-- <tr>
                <td>1</td>
                <td>Michael Chandra</td>
                <td>Laki-laki</td>
                <td>Chandra</td>
                <td>0895380872577</td>
                <td>
                    <button class="bg-sidebar hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </button>
                    <button class="bg-red-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Michael Wijaya</td>
                <td>Laki-laki</td>
                <td>Wijaya</td>
                <td>0895330842537</td>
                <td>
                    <button class="bg-sidebar hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </button>
                    <button class="bg-red-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </button>
                </td>
            </tr> --}}
        </tbody>
    </table>
</x-admin-layout>
