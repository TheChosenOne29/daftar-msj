@extends('layout.main')

@section('title')
    MSJ 2 | NIJ
@endsection

@section('content')
    <div class="col mx-auto p-4 py-md-5">
        <h1>Nomor Induk Jemaat</h1>
        <p class="fs-5 col-md-8">Nomor Induk Jemaat berfungsi sebagai nomor identitas yang bersifat unik bagi setiap jemaat
            yang terdaftar di Gereja Mawar Sharon.
            NIJ juga memiliki fungsi lain seperti :
        <ul>
            <li>Mendaftarkan diri dalam pelayanan</li>
            <li>Mendaftarkan diri dalam kebutuhan pelayanan seperti pemberkatan nikah, pengudusan rumah/tempat usaha,
                <i>memorial service</i></li>
            <li>Mendaftarkan diri dalam berbagai <i>events</i> di Gereja Mawar Sharon</li>
        </ul>
        </p>
        <hr class="hr" />

        <h2>Syarat Mengikuti MSJ 2</h2>
        <p class="fs-5 col-md-8">MSJ 2 ditujukan untuk jemaat yang sudah bertumbuh dan yang akan 
            terlibat dalam pelayanan dalam departemen dan penggembalaan. Terdapat dua syarat yang harus dipenuhi.
        </p>
        <br>
        <div class="row g-5">
            <div class="col-md-6">
                <h3>Sudah lulus MSJ 1</h3>
                <p class="fs-5">Pastikan anda sudah mengikuti, dan menyelesaikan MSJ 1.
                    Belum lulus MSJ 1? Tekan tombol berikut untuk mendapatkan
                    informasi mengenai kelas MSJ 1 selanjutnya.
                </p>

                <div class="d-grid gap-2">
                    <a href="/1/peserta" class="btn btn-success btn-lg mt-auto" role="button">Daftar MSJ 1</a>
                </div>
            </div>

            <div class="col-md-6">
                <h3>Sudah memiliki Nomor Induk Jemaat</h3>
                <p class="fs-5">Jemaat akan otomatis mendapatkan NIJ jika sudah menyelesaikan MSJ 1 dan hadir didalam
                    Connect Group minimal delapan kali.
                </p>
                <p class="fs-5">
                    Cara mengecek NIJ
                    <ul>
                        <li>Buka aplikasi GMS Church</li>
                        <li>Buka Profile (tombol di sudut kanan bawah)</li>
                        <li>Lihat bagian NIJ</li>
                        <li>Jika pada bagian NIJ muncul tulisan "Get NIJ", silahkan ditekan agar NIJ muncul</li>
                    </ul>
                </p>

            </div>

            <hr class="hr" />

            <div class="col">
                <h2 style="text-align: center">
                    NIJ sudah muncul?
                </h2>
                <p style="text-align: center">Silahkan tekan tombol dibawah untuk melanjutkan pendaftaran MSJ 2.
                </p>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-primary btn-lg" href="/2/peserta">Ya, saya sudah memiliki NIJ</a>
                </div>
            </div>
        </div>
    @endsection
