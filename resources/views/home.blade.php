@extends('layout.main')

@section('title')
    Pendaftaran MSJ GMS Lampung
@endsection

@section('content')
<div class="p-5 mb-4 border rounded-3 shadow-sm">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Shalom!</h1>
        <p class="col-md-8 fs-4">Selamat datang para calon peserta My Spiritual Journey GMS Lampung.
            Silahkan pilih kelas MSJ yang ingin diikuti dibawah ini untuk mendapatkan informasi lebih lanjut.</p>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 mb-3">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-success">
        <div class="card-header py-3 text-bg-success border-success">
          <h4 class="my-0 fw-normal text-center">My Spiritual Journey 1</h4>
        </div>
        <div class="card-body">
            <img src="/img/covermsj1.jpg" class="card-img">
            <h5 class="card-title"> MSJ 1 <small> Angkatan {{ $ramu -> nomor }} - {{ Carbon\Carbon::parse($ramu -> bulantahun)->translatedFormat('F Y'); }}</small></h5>
            <p class="card-text">MSJ 1 ditujukan untuk jiwa baru atau jemaat yang baru bergabung dalam Gereja Mawar Sharon 
                dan ingin tertanam, bertumbuh, dan berbuah</p>
            <p class="card-text">Terdiri dari 4 kelas</p>
            <a href="1/aktivasi" class="w-100 btn btn-lg btn-success">Daftar MSJ 1</a>
        </div>
      </div>
    </div>
    
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-danger">
        <div class="card-header py-3 text-bg-danger border-danger">
          <h4 class="my-0 fw-normal text-center">My Spiritual Journey 2</h4>
        </div>
        <div class="card-body">
            <img src="/img/covermsj2.jpg" class="card-img">
            <h5 class="card-title"> MSJ 2 <small> Angkatan {{ $rakit -> nomor }} - {{ Carbon\Carbon::parse($rakit -> bulantahun)->translatedFormat('F Y'); }}</small></h5>
            <p class="card-text">MSJ 2 ditujukan untuk jemaat yang sudah bertumbuh dan akan 
                terlibat dalam pelayanan departemen dan penggembalaan.</p>
            <p class="card-text">Terdiri dari 4 kelas</p>
            <a href="#" class="w-100 btn btn-lg btn-danger">Daftar MSJ 2</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-bg-primary border-primary">
          <h4 class="my-0 fw-normal text-center">My Spiritual Journey 3</h4>
        </div>
        <div class="card-body">
            <img src="/img/covermsj3.jpg" class="card-img">
            <h5 class="card-title"> MSJ 3 <small> Angkatan {{ $terap -> nomor }} - {{ Carbon\Carbon::parse($terap -> bulantahun)->translatedFormat('F Y'); }}</small></h5>
            <p class="card-text">MSJ 3 ditujukan untuk para pemimpin/calon pemimpin yang akan melayani 
                baik dalam departemen maupun penggembalaan yang ada.</p>
            <p class="card-text">Terdiri dari 5 kelas</p>
            <a href="#" class="w-100 btn btn-lg btn-primary">Daftar MSJ 3</a>
        </div>
      </div>
    </div>

</div>
@endsection