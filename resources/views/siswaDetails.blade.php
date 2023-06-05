<x-admin-layout>
    <?php
    $itemId = $_GET['itemId'];
    // $item = getItemDetails($itemId);

    $data = DB::table('users')->get();
    $data2 = DB::table('biodata')->get();

    // echo '<h1>Detail Item</h1>';
    // echo '<p>ID: ' . $item->id . '</p>';
    // echo '<p>Name: ' . $item->name . '</p>';
    // echo '<p>Jenis Kelamin: ' . $item->jenisKelamin . '</p>';
    // echo '<p>Nama Orang Tua: ' . $item->nameortu . '</p>';
    // echo '<p>Phone: ' . $item->phone . '</p>';

    ?>

    <p>Testing</p>
    <p>{{ $itemId }}</p>

</x-admin-layout>
