@extends('layout.main')

@section('title')
    MSJ 1 | Aktivasi
@endsection

@section('content')
<div class="col mx-auto p-4 py-md-5">
    <h1>Aktivasi Akun GMS Church</h1>
    <hr class="hr" />
    <p class="fs-5 col-md-8">Setiap peserta MSJ <b>WAJIB</b> untuk menginstal aplikasi GMS Church dan melakukan aktivasi akun di 
        aplikasi GMS Church agar data anda terhubung dan dapat melihat history kelas yang sudah anda ikuti.
    </p>
    <p class="fs-5 col-md-8">Video panduan untuk aktivasi Akun GMS Church dapat dilihat dibawah ini.</p>
    <br>
    <iframe width="100%" height="500" src="https://www.youtube.com/embed/EI0RjjSLQxU" title="Aktivasi Akun GMS Church - MSJ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

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
           <a href="https://apps.apple.com/id/app/gms-church/id1494423842" class="btn btn-primary btn-lg" role="button"><i class="bi-apple"></i>iOS</a>
        </div>
    </div>

    <div class="col-md-6">
        <h2>Koordinasi Peserta MSJ</h2>
        <p class="fs-5">Informasi kelas akan dibagikan melalui <i>WhatsApp Group</i> peserta MSJ. Harap para peserta MSJ mendaftar menggunakan nomor telepon yang
            memiliki akun <i>WhatsApp</i>. Undangan grup akan dibagikan ke nomor telepon yang terdaftar di aplikasi GMS Church.
        </p>
    </div>

    <hr class="hr" />

    <div class="col">
    <h2 style="text-align: center">
        Sudah memiliki akun GMS Church dan berhasil melakukan aktivasi?
    </h2>
    <p style="text-align: center">Silahkan lanjutkan pendaftaran menggunakan tombol dibawah ini.</p>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-success btn-lg" href="/1/peserta">Ya, saya sudah berhasil aktivasi</a>
        </div>
    </div>
</div>
@endsection