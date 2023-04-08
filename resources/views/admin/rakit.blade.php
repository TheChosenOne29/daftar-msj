@extends('layout.admin')

@section('title')
    MSJ 2 | Daftar MSJ
@endsection

@section('heading')
    <h1 class="h2">My Spiritual Journey 2</h1>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-6 mx-auto">
            <h4>Angkatan MSJ</h4>
            <table class="table table-bordered mb-5 text-center">
                <thead>
                    <tr>
                        <th scope="col">MSJ</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Tahun</th>
                    </tr>
                </thead>
                @foreach ($angkatan as $item)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item -> nomor }}</td>
                            <td>{{ $item -> bulan }}</td>
                            <td>{{ $item -> tahun }}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6 mx-auto">
            <h4>Jadwal MSJ 1</h4>
            <table class="table table-bordered mb-5 text-center">
                <thead>
                    <tr>
                        <th scope="col">Kelas</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Judul</th>
                    </tr>
                </thead>
                @foreach ($ramu as $item2)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $item2 -> id }}</th>
                            <td>{{ $item2 -> tanggal}}</td>
                            <td>{{ substr($item2 -> jam, 0, -3);}}</td>
                            <td style="text-align-last: left">{{ $item2 -> judul }}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
