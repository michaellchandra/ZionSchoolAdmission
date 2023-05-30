<x-app-layout>
    <div style='padding-top:80px;margin-left:80px;'>
        <h1 class="text-white text-4xl font-black"> Selamat Datang! </h1>
        <h1 class="text-white text-2xl">{{ Auth::user()->name }} </h1>
        <br>
    </div>
    {{-- <?php if()?>
    <div >
        <div style="margin-left:80px;padding:30px;background-color:#D43333;width:92%; height:80%; display:center;color:white; border-top-right-radius: 12px;  border-top-left-radius: 12px;" >
        <h4 style="padding:15px;">Pembayaran Formulir</h4>
        </div>
        <div div style="margin-left:80px;padding:50px;background-color:#FF4B4B;width:92%; height:80%; display:center;color:white; border-bottom-right-radius: 12px;  border-bottom-left-radius: 12px;" >
        <h6>Biaya Pendaftaran</h6>
        <h4>Rp. 123.456,-</h4>
        <p>Silahkan Melakukan Transfer ke</p>
        <b>BCA 025 387 899 a/n YAYASAN BUKIT ZION GKKAUP</b>
        <p>Sesuai dengan Nominal tertera untuk memudahkan kami melakukan pengecekan, kemudian lakukan konfirmasi bukti pwmbayaran melalui WhatsApp pada tombol dibawah ini. Jangan Lupa Untuk <b>Melakukan ScreenShot</b> sebagai dokumentasi jika terjadi kesalahan sistem.</p>
        <a href="https://wa.me/+6282187275504"><button class="btn btn-success" style="border-radius:25px; width:100%; display:flex; justify-content:center; align-items:center;"><i class="bi bi-whatsapp" style="color: white; font-size: 24px;"></i><b>&nbspVerifikasi Pembayaran via WhatsApp</b></button></a>
        </div>
    </div>
    <?php else: ?> --}}
    <div class="text-white p-2">
        <div
            style="margin-left:80px;padding:30px;background-color:#459355;width:92%; height:80%; display:center;color:white; border-top-right-radius: 12px;  border-top-left-radius: 12px;">
            <h4 style="padding:15px;">Pembayaran Formulir Terkonfirmasi</h4>
        </div>
        <div div
            style="margin-left:80px;padding:50px;background-color:#57B56A;width:92%; height:80%; display:center;color:white; border-bottom-right-radius: 12px;  border-bottom-left-radius: 12px;">
            <h6>Terima kasih telah melakukan pembayaran formulir <b>Penerimaan Peserta Didik Baru SMA Zion Makassar
                    Tahun Ajaran 2024 - 2025</b></h6>
            <p>Anda dapat segera melakukan pendaftaran hingga selesai, apabila membutuhkan bantuan anda dapat
                menghubungi Tata Usaha kami menggunakan Tombol WhatsApp dibawah.</p>
            <br>
            <h5>Terima Kasih.</h5>
            <div class=" align-content-end">
                <a href="https://wa.me/+6282187275504">
                    <x-primary-button class="ml-3">
                        {{ __('Contact Support') }}
                    </x-primary-button>
                </a>
            </div>
        </div>
    </div>
    {{-- <?php endif; ?> --}}
    <br>
    <br>
    <div class="text-white border-white p-20">
        <h4>Informasi Pendaftaran </h4>
        <h5>I. PROSEDUR PENDAFTARAN SISWA BARU ASAL SMP ZION</h5>
        <h6 style="margin-left:17px;">Tahun Pelajaran 2023 - 2024 </h6>
        <br />
        <p>- Pendaftaran (12 - 26 September 2023) [08.00 - 15.00]<br />- Pengembalian Formulir dan Pembayaran (12 -
            26
            September 2023) [08.00 - 15.00]</p>
        <div style="margin-left:30px;">
            <ol>
                <li>
                    Pengembalian Formulir dan Pembayaran Tanggal 12 - 26 September 2023, Mendapat potongan Rp.
                    1.500.000,-
                </li>
                <li>
                    Pengembalian Formulir dan Pembayaran lewat dari Tanggal 26 September 2023, mengikuti<b> PROSEDUR
                        PENDAFTARAN SISWA BARU UMUM</b>
                </li>
                <li>
                    Potongan 10% Sumbangan Pendidikan khusus bagi anak dari anggota jemaat <b>GKKA INDONESIA</B>
                    setelah
                    potongan point no. 1. <b>WAJIB </b> melampirkan fotokopi kartu/surat keterangan anggota jemaat
                    <b>GKKA INDONESIA</B></b>
                </li>
                <li>
                    Potongan Saudara 10% Sumbangan Pendidikan untuk 2 anak (atau lebih) yang bersaudara kandung yang
                    masuk ke Sekolah Zion di Tahun Ajaran yang sama maupun di Tahun Ajaran yang berbeda. Bagi yang
                    masuk
                    di Tahun Ajaran yang sama potongan berlaku untuk masing-masing anak dan bagi yang masuk di Tahun
                    Ajaran yang berbeda potongan berlaku hanya untuk murid baru.
                </li>
                <li>
                    Siswa yang sudah mengisi Formulir Pendaftaran tetapi tidak menyelesaikan pembayaran sampai
                    dengan
                    tanggal yang telah ditentukan, dianggap mengundarkan diri dan semua ketentuan tersebut di atas
                    tidak
                    berlaku</b>
                </li>
            </ol>
        </div>
        <h5>II. LAIN LAIN</h5>
        <div style="margin-left:30px;">
            <ol>
                <li>
                    Pembelian seragam mulai tanggal 01 - 31 Mei 2024
                </li>
                <li>
                    Pembelian buku setelah masuk sekolah
                </li>
            </ol>
            <p>Lampiran : </p>
            <ul>
                <li>
                    1 lembar fotokopi akte kelahiran
                </li>
                <li>
                    1 lembar fotokopi kartu keluarga
                </li>
                <li>
                    1 KTP orang tua bapak & Ibu atau wali
                </li>
                <li>
                    Fotokopi rapor SMP kelas VIII (semester 1 & 2) yang sudah dilegalisir oleh pihak yang berwenang
                </li>
                <li>
                    Khusus untuk anggota jemaat <b>WAJIB</b> melampirkan fotokopi kartu/surat keteerangan anggota
                    jemaat
                    <b>GKKA INDONESIA</b>
                </li>
            </ul>
            <p>CATATAN : </p>
            <ul>
                <li>
                    Slip bukti (transfer) pembayaran harus dikirim kepada Tata Usaha via WA untuk menerima tanda
                    terima
                    bukti pelunasan
                </li>
                <li>
                    Bukti pelunasan harus dibawa pada saat hari pertama bersekolah
                </li>
            </ul>
            <span class="border-white" style="text-align: right;"><b>Tata Usaha SMA : Ibu Martince, +62
                    821-8727-5504 </b>
                <p></p>
                <br>
                <a href="https://wa.me/+6282187275504">
                    <x-primary-button class="ml-3 background-color:#57B56A  ">
                        {{ __('Chat By WhatsApp') }}
                    </x-primary-button>
                </a>
            </span>
        </div>
    </div>
</x-app-layout>
