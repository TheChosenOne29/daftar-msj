@extends('layout.main')

@section('title')
    MSJ 1 | Peserta
@endsection

@section('content')
<div class="col mx-auto p-4 py-md-5">
    <h1>Selamat Datang Para Peserta MSJ 1</h1>
    <hr class="hr" />
    
    <h2>Jadwal Kelas MSJ 1</h2>
    <p class="fs-5 col-md-8">Angkatan 2 - 2023</p>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Kelas</th>
            <th scope="col">Hari, tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col">Nama kelas</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
            <th scope="row">1</th>
            <td>Selasa, 11 April 2023</td>
            <td>19.00-20.30</td>
            <td>Keselamatan</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Kamis, 13 April 2023</td>
            <td>19.00-20.30</td>
            <td>Berjalan Bersama Tuhan</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Selasa, 18 April 2023</td>
            <td>10.40-12.10</td>
            <td>Membereskan Masalah di Masa Lalu</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Kamis, 20 April 2023</td>
            <td>15.20-17.00</td>
            <td>Baptisan Roh Kudus</td>
          </tr>
        </tbody>
    </table>
    <br>
    <hr class="hr" />

    <h2>Pilih Peserta</h2>
    <p class="fs-5 col-md-8">Pendaftaran MSJ 1 ini dibagi menjadi dua, untuk <b>peserta baru</b> dan untuk <b>peserta ulang</b>. Harap diperhatikan agar tidak terjadi kesalahan.
    </p>
    <br>
    <div class="row g-5">
        <div class="col-md-6">
            <h3>Peserta Baru</h3>
            <p class="fs-5">Peserta baru adalah jemaat yang belum pernah mengikuti kelas MSJ 1 maupun yang pernah mengikuti kelas MSJ 1 namun sudah lebih dari satu tahun terakhir.
        </p>

        <br>

        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="/1/baru" class="btn btn-success btn-lg" role="button">Saya peserta baru</a>
            </div>
        </div>

        <div class="col-md-6">
            <h3>Peserta Ulang</h3>
            <p class="fs-5">Peserta ulang adalah jemaat yang sudah pernah mengikuti kelas MSJ 1 dalam satu tahun terakhir namun belum lulus.
        </p>

        <br>
        
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="1/ulang" class="btn btn-primary btn-lg" role="button">Saya peserta ulang</a>
            </div>
        </div>

    

    <hr class="hr" />

    <div class="col">
    <h2 style="text-align: center">
        Belum mendaftar atau belum berhasil aktivasi?
    </h2>
    <p style="text-align: center">Silahkan ikuti instruksi pada halaman sebelumnya, atau tekan tombol dibawah.</p>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-danger btn-lg" href="/1/baru">Aktivasi Akun GMS Church</a>
        </div>
    </div>
</div>
@endsection