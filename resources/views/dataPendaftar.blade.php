<x-admin-layout>
    <?php
    // $data = DB::table('users')->get();
    $data2 = DB::table('biodata')->get();
    $length = count($data2);
    ?>

    <br>
    <h1 class="text-black text-4xl font-black"> Data Pendaftar </h1>

    <br><br>
    <script>
        function showDetails(itemId) {
            return view('siswaDetails', ['itemId' => $itemId]);
        }
    </script>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Calon Siswa</th>
                <th>Jenis Kelamin</th>
                {{-- <th>Nama Orang Tua</th> --}}
                <th>Nomor HP</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($length == 0)

            @else
            @for ($i = 0; $i < $length; $i++)
            <tr>
                <td>{{ $data2[$i]->userID }}</td>
                <td>{{ $data2[$i]->namaLengkap }}</td>
                <td>{{ $data2[$i]->jenisKelamin }} </td>
                {{-- <td>{{ $data2[$i]->namaIbuKandung }}</td> --}}
                <td>{{ $data2[$i]->nomorTeleponHandphoneWhatsapp }}</td>
                <td>
                    {{-- DETAILS --}}
                    <a href="{{ route('siswaDetails', ['itemId' => $i]) }}">
                        <button class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded">
                            Details
                        </button>
                    </a>
                    {{-- EDIT --}}
                    <button class="bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </button>
                    {{-- DELETE --}}
                    <form action="{{ route('biodata.delete', $data2[$i]->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" type="submit">
                            Delete
                        </button>

                    </form>
                </td>
            </tr>
            @endfor  
            @endif
            

            {{-- @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td> </td>
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
            @endforeach --}}
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
