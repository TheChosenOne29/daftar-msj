@extends('layout.main')

@section('title')
    MSJ 1 | Peserta Ulang
@endsection

@section('content')
<div class="col mx-auto p-4 py-md-5">
    <h1>Peserta Ulang MSJ 1</h1>
    <hr class="hr" />
    <p class="fs-5 col-md-8">Peserta ulang adalah jemaat yang sudah pernah mengikuti kelas MSJ 1 dalam satu tahun 
        terakhir namun belum lulus karena ada kelas yang harus diulang.
    </p>
    <p class="fs-5 col-md-8">Anda dapat melakukan pendaftaran ulang dengan cara mengisi form yang disediakan. Setelah berhasil, 
        anda akan diundang kedalam grup <i>WhatsApp</i> untuk mendapatkan informasi lebih lanjut.
    </p>

    <hr class="hr" />
    <div class="col">
        <p style="text-align: center">Tekan tombol dibawah untuk menuju <i>Google Form</i>. Harap pastikan anda mengisi data dengan benar.</p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a class="btn btn-danger btn-lg" href="{{ $link->link }}" target="_blank">Daftar Ulang</a>
            </div>
        </div>
</div>
@endsection