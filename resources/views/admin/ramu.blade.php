@extends('layout.admin')

@section('title')
    MSJ 1 | Daftar MSJ
@endsection

@section('heading')
    <h1 class="h2">My Spiritual Journey 1</h1>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-6 mx-auto">
            <h4 style="text-align: center">Jadwal MSJ 1</h4>
            @if (session()->has('success-update'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success-update') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/admin/msj1/update" method="POST">
                @csrf
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
                                <th scope="row">{{ $item2->id }}</th>
                                <td>
                                    <input type="date" data-date-inline-picker="true" value="{{ $item2->tanggal }}"
                                        name="tanggal" />
                                </td>
                                <td>
                                    <input type="time" name="jam" value="{{ substr($item2->jam, 0, -3) }}">
                                </td>
                                <td>
                                    <input type="text" name="judul" value="{{ $item2->judul }}">
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
                <button type="submit" class="btn btn-warning">
                    Update
                </button>
            </form>
        </div>
    </div>
@endsection
