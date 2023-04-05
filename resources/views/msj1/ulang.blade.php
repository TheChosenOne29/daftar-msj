@extends('layout.main')

@section('title')
    MSJ 1 | Peserta Ulang
@endsection

@section('content')
<div class="col mx-auto p-4 py-md-5">
    <h1>Peserta Ulang MSJ 1</h1>
    <hr class="hr" />
    <p class="fs-5 col-md-8">Peserta ulang adalah jemaat yang sudah pernah mengikuti kelas MSJ 1 dalam satu tahun terakhir.
    </p>
    <p class="fs-5 col-md-8">Video panduan untuk aktivasi Akun GMS Church dapat dilihat dibawah ini.</p>

    <hr class="col-3 col-md-2">

    <div class="row g-5">
      <div class="col-md-6">
        <h2>Aplikasi GMS Church</h2>
        <p class="fs-5">Aplikasi GMS Church akan membantu anda tertanam, bertumbuh, dan berbuah dalam kehidupan rohani anda dalam Gereja Mawar Sharon. 
            Anda dapat mengetahui informasi terbaru mengenai jadwal ibadah, pelayanan, dan pencapaian pribadi anda didalam komitmen dan pelayanan. 
            Dapatkan versi terbaru dibawah ini.
       </p>
       <br>
       <div class="d-grid gap-2 col-6 mx-auto">
           <a href="https://play.google.com/store/apps/details?id=com.gms.church" class="btn btn-primary btn-lg" role="button"><i class="bi-android2"></i>Android</a>
           <a href="https://play.google.com/store/apps/details?id=com.gms.church" class="btn btn-primary btn-lg" role="button"><i class="bi-apple"></i>iOS</a>
        </div>
    </div>

    <div class="col-md-6">
        <h2>Koordinasi Peserta MSJ</h2>
        <p class="fs-5">Informasi kelas akan dibagikan melalui WhatsApp Group peserta MSJ. Harap para peserta MSJ mendaftar menggunakan nomor telepon yang
            memiliki akun WhatsApp. Undangan grup akan dibagikan ke nomor telepon yang terdaftar di aplikasi GMS Church.
        </p>
    </div>

    <hr class="hr" />

    <div class="col">
    <h2 style="text-align: center">
        Sudah memiliki akun GMS Church dan berhasil melakukan aktivasi?
    </h2>
    <p style="text-align: center">Silahkan lanjutkan pendaftaran menggunakan tombol dibawah ini.</p>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-danger btn-lg" href="/1/baru">Daftar MSJ 1 Peserta Baru</a>
        </div>
    </div>
</div>
@endsection