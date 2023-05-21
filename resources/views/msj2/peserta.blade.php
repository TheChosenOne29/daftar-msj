@extends('layout.main')

@section('title')
    MSJ 2 | Peserta
@endsection

@section('content')
<div class="col mx-auto p-4 py-md-5">
    <h1>Selamat Datang Para Peserta MSJ 2</h1>
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
    <hr>
    <h2>Link WhatsApp Group</h2>
    <p class="fs-5 col-md-8">
        Gunakan tombol dibawah ini untuk bergabung kedalam <i>WhatsApp Group</i>
    </p>
    <a href="{{ $link->whatsapp }}" class="btn btn-success btn-lg" role="button"><i class="bi-whatsapp"></i> Group WhatsApp</a>
    <br>
    <hr class="hr" />

    <h2>Pilih Jenis Peserta</h2>
    <p class="fs-5 col-md-8">Pendaftaran MSJ 2 ini dibagi menjadi dua, untuk <b>peserta baru</b> dan untuk <b>peserta ulang</b>. Harap diperhatikan agar tidak terjadi kesalahan.
    </p>
    <br>
    <div class="row g-5">
        <div class="col-md-6">
            <h3>Peserta Baru</h3>
            <p class="fs-5">Peserta baru adalah peserta yang belum pernah mengikuti MSJ 2 dan sudah memiliki NIJ.
        </p>

        <div class="d-grid gap-2 col-6">
            <a href="/2/baru" class="btn btn-success btn-lg mt-auto" role="button">Saya peserta baru</a>
            </div>
        </div>

        <div class="col-md-6">
            <h3>Peserta Ulang</h3>
            <p class="fs-5">Peserta Ulang adalah peserta yang sudah pernah mengikuti kelas MSJ 2 dalam satu tahun terakhir.
        </p>
        
        <div class="d-grid gap-2 col-6">
            <a href="/2/ulang" class="btn btn-primary btn-lg mt-auto" role="button">Saya peserta ulang</a>
            </div>
        </div>

    

    <hr class="hr" />

    <div class="col">
    <h2 style="text-align: center">
        Belum mendaftar atau masih bingung?
    </h2>
    <p style="text-align: center">Silahkan ikuti instruksi pada halaman sebelumnya, atau tekan tombol dibawah.</p>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-danger btn-lg" href="/2/nij">Dapatkan NIJ</a>
        </div>
    </div>
</div>
@endsection