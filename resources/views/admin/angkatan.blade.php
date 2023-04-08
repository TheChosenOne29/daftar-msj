@extends('layout.admin')

@section('title')
    Angkatan | Daftar MSJ
@endsection

@section('heading')
    <h1 class="h2">Angkatan</h1>
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
    </div>
@endsection
