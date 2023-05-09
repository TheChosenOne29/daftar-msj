@extends('layout.main')

@section('title')
    MSJ 2 | NIJ
@endsection

@section('content')
<div class="col mx-auto p-4 py-md-5">
    <h1>Nomor Induk Jemaat</h1>
    <hr class="hr" />
    
    <h2>Jadwal Kelas MSJ 2</h2>
    <p class="fs-5 col-md-8">Angkatan {{ $angkatan -> nomor }} - {{ Carbon\Carbon::parse($angkatan -> bulantahun)->translatedFormat('F Y'); }}</p>
    <div class="table-responsive">
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
            @foreach ($rakit as $item2)
            <tr>
              <th scope="row">{{ $item2 -> id }}</th>
              <td>{{ Carbon\Carbon::parse($item2 -> tanggal)->translatedFormat('l, d F Y'); }}</td>
              <td>{{ substr($item2 -> jam, 0, -3);}}</td>
              <td style="text-align-last: left">{{ $item2 -> judul }}</td>
          </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    <br>
    <hr class="hr" />

    <h2>Syarat Mengikuti MSJ 2</h2>
    <p class="fs-5 col-md-8">MSJ 2 ditujukan untuk jemaat yang sudah bertumbuh dan yang akan 
        terlibat dalam pelayanan dalam departemen dan penggembalaan. Berikut ini adalah syarat yang harus dipenuhi.
    </p>
    <br>
    <div class="row g-5">
        <div class="col-md-6">
            <h3>Sudah lulus MSJ 1</h3>
            <p class="fs-5">Pastikan anda sudah mengikuti dan menyelesaikan MSJ 1 agar dapat melanjutkan ke MSJ 2. 
        </p>

        <div class="d-grid gap-2 col-6">
            <a href="/1/baru" class="btn btn-success btn-lg mt-auto" role="button">Saya peserta baru</a>
            </div>
        </div>

        <div class="col-md-6">
            <h3>Sudah memiliki Nomor Induk Jemaat</h3>
            <p class="fs-5">Peserta ulang adalah jemaat yang sudah pernah mengikuti kelas MSJ 1 dalam satu tahun terakhir namun belum lulus karena ada kelas yang harus diulang.
        </p>
        
        <div class="d-grid gap-2 col-6">
            <a href="/1/ulang" class="btn btn-primary btn-lg mt-auto" role="button">Saya peserta ulang</a>
            </div>
        </div>

    

    <hr class="hr" />

    <div class="col">
    <h2 style="text-align: center">
        Belum mendaftar atau belum berhasil aktivasi?
    </h2>
    <p style="text-align: center">Silahkan ikuti instruksi pada halaman sebelumnya, atau tekan tombol dibawah.</p>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-danger btn-lg" href="/1/aktivasi">Aktivasi Akun GMS Church</a>
        </div>
    </div>
</div>
@endsection