@extends('layout.admin')

@section('title')
    Angkatan | Daftar MSJ Admin
@endsection

@section('heading')
    <h1 class="h2">Angkatan</h1>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h4 style="text-align: center" class="mb-4">Angkatan MSJ</h4>
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
                            <td>{{ Carbon\Carbon::parse($item -> bulantahun)->translatedFormat('F') }}</td>
                            <td>{{ Carbon\Carbon::parse($item -> bulantahun)->translatedFormat('Y') }}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">MSJ</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Bulan, Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($angkatan as $item2)
                            <form action="/admin/angkatan/update/{{ $item2 -> id }}" method="POST">
                                @csrf
                                <tr>
                                    <th scope="row">
                                        {{ $item2 -> id }}
                                        <input type="hidden" name="id" value={{ $item2 -> id }}>
                                    </th>
                                    <td>
                                        <input type="number" name="nomor" width="1em" value={{ $item2 ->  nomor}}>
                                    </td>
                                    <td>
                                        <input type="month" name="bulantahun" width="10em" value={{ substr(($item2 -> bulantahun), 0, -3) }}>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-sm btn-warning">
                                            Update
                                        </button>
                                    </td>
                                </tr>
                            </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
