@extends('layout.main')

@section('title')
    Pendaftaran MSJ GMS Lampung
@endsection

@section('content')
<div class="p-5 mb-4 border rounded-3 bg-light">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Shalom!</h1>
        <p class="col-md-8 fs-4">Selamat datang para calon peserta My Spiritual Journey.
            Silahkan pilih kelas MSJ yang ingin diikuti dibawah ini untuk mendapatkan informasi lebih lanjut.</p>
    </div>
</div>

<div class="row align-items-md-stretch">
    <div class="col">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h2>My Spiritual Journey 1</h2>
            <p>MSJ 1 ditujukan untuk jiwa baru atau jemaat yang baru bergabung dalam Gereja Mawar Sharon.</p>
            <a class="btn btn-primary" href="/1/aktivasi">Daftar MSJ 1</a>
        </div>
    </div>
    <div class="col">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h2>My Spiritual Journey 2</h2>
            <p>MSJ 2 ditujukan untuk jemaat yang sudah bertumbuh di Gereja Mawar Sharon dan akan 
                terlibat dalam pelayanan baik dalam departemen maupun penggembalaan.</p>
            <a class="btn btn-primary" href="#">Daftar MSJ 2</a>
        </div>
    </div>
    <div class="col">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h2>My Spiritual Journey 3</h2>
            <p>MSJ 3 ditujukan untuk para pemimpin/calon pemimpin yang akan melayani 
                baik dalam departemen maupun penggembalaan yang ada.</p>
            <a class="btn btn-primary" href="#">Daftar MSJ 3</a>
        </div>
    </div>
</div>
@endsection