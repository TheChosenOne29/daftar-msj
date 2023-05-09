@extends('layout.admin')

@section('title')
    Dashboard | Daftar MSJ Admin
@endsection

@section('heading')
    <h1 class="h2">Dashboard</h1>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h4 style="text-align: center" class="mb-4">Angkatan MSJ</h4>
            <div class="table-responsive">
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
                                <th scope="row">
                                    {{ $item -> id }}
                                </th>
                                <td>{{ $item -> nomor }}</td>
                                <td>{{ Carbon\Carbon::parse($item -> bulantahun)->translatedFormat('F'); }}</td>
                                <td>{{ Carbon\Carbon::parse($item -> bulantahun)->translatedFormat('Y'); }}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-8 mx-auto">
            <h4 style="text-align: center" class="mb-4">Jadwal MSJ 1</h4>
            <div class="table-responsive">
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
                                <td>{{ Carbon\Carbon::parse($item2 -> tanggal)->translatedFormat('l, d F Y'); }}</td>
                                <td>{{ substr($item2 -> jam, 0, -3);}}</td>
                                <td style="text-align-last: left">{{ $item2 -> judul }}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-8 mx-auto">
            <h4 style="text-align: center" class="mb-4">Jadwal MSJ 2</h4>
            <div class="table-responsive">
                <table class="table table-bordered mb-5 text-center">
                    <thead>
                        <tr>
                            <th scope="col">Kelas</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Judul</th>
                        </tr>
                    </thead>
                    @foreach ($rakit as $item3)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $item3 -> id }}</th>
                                <td>{{ Carbon\Carbon::parse($item3 -> tanggal)->translatedFormat('l, d F Y'); }}</td>
                                <td>{{ substr($item3 -> jam, 0, -3);}}</td>
                                <td style="text-align-last: left">{{ $item3 -> judul }}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-8 mx-auto">
            <h4 style="text-align: center" class="mb-4">Jadwal MSJ 3</h4>
            <div class="table-responsive">
                <table class="table table-bordered mb-5 text-center">
                    <thead>
                        <tr>
                            <th scope="col">Kelas</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Judul</th>
                        </tr>
                    </thead>
                    @foreach ($terap as $item4)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $item4 -> id }}</th>
                                <td>{{ Carbon\Carbon::parse($item4 -> tanggal)->translatedFormat('l, d F Y'); }}</td>
                                <td>{{ substr($item4 -> jam, 0, -3);}}</td>
                                <td style="text-align-last: left">{{ $item4 -> judul }}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
