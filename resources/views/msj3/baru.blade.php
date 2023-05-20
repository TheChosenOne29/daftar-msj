@extends('layout.main')

@section('title')
    MSJ 3 | Peserta Baru
@endsection

@section('content')
    <div class="col mx-auto p-4 py-md-5">
        <h1>Peserta Baru MSJ 3</h1>
        <hr class="hr" />
        <p class="fs-5 col-md-8">Peserta baru adalah peserta yang belum pernah mengikuti MSJ 3 dan sudah memiliki NIJ.
        </p>

        <hr class="col">

        <div class="row row-cols-1 row-cols-md-3 mb-3">
            <div class="col mb-3">
                <div class="card h-100 mb-4 rounded-3 shadow-sm border">
                    <h4 class="my-0 fw-normal text-center mt-3">1. Register</h4>
                    <div class="card-body d-flex flex-column">
                        <img src="/img/register.png" class="card-img border mb-2">
                        <h5 class="card-text">Tekan tombol "Register"</h5>
                        <p class="card-text">Jika anda membuka app MSJ namun tidak tampil seperti di gambar, silahkan
                            <i>authorize</i> akun anda terlebih dahulu
                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100 mb-4 rounded-3 shadow-sm border">
                    <h4 class="my-0 fw-normal text-center mt-3">2. Search</h4>
                    <div class="card-body d-flex flex-column">
                        <img src="/img/search.png" class="card-img border mb-2">
                        <h5 class="card-text">Isi sesuai gambar</h5>
                        <p class="card-text">
                            Pastikan semua kolom terisi dengan <b>benar</b></p>
                        <ul>
                            <li>Pilih <b>My Spiritual Journey 3</b></li>
                            <li>Isi <b>2023</b></li>
                            <li>Pilih <b>Lampung</b></li>
                        </ul>
                        Tekan tombol "Register" pada kelas MSJ yang muncul
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100 mb-4 rounded-3 shadow-sm border">
                    <h4 class="my-0 fw-normal text-center mt-3">3. Submit</h4>
                    <div class="card-body d-flex flex-column">
                        <img src="/img/submit.png" class="card-img border mb-2">
                        <h5 class="card-text">Tekan tombol "Submit"</h5>
                        <p class="card-text">Konfirmasi jadwal kelas yang ditampilkan. Pastikan anda mencatatnya agar tidak terlewat.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <h2 style="text-align: center">
                Atau daftar menggunakan komputer anda
            </h2>
            <p style="text-align: center">Silahkan tekan tombol dibawah untuk menuju <i>website</i> pendaftaran MSJ</p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a class="btn btn-primary btn-lg" href="{{ $link->baru }}" target="_blank">Link Daftar Baru</a>
            </div>
        </div>
        <hr class="hr" />
        <div class="col">
            <h2 style="text-align: center">
                Selamat!
            </h2>
            <p style="text-align: center">Anda berhasil mendaftar kelas MSJ 3. Sampai jumpa di kelas pertama!</p>
        </div>
    </div>
@endsection
