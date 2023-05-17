@extends('layout.admin')

@section('title')
    MSJ 3 | Daftar MSJ Admin
@endsection

@section('heading')
    <h1 class="h2">My Spiritual Journey 3</h1>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h4 style="text-align: center" class="mb-4">Jadwal MSJ 3</h4>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">Kelas</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Judul</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($terap as $item2)
                            <form action="/admin/msj3/update/{{ $item2->id }}" method="POST">
                                @csrf
                                <tr>
                                    <th scope="row">
                                        {{ $item2->id }}
                                        <input type="hidden" name="id" value={{ $item2->id }}>
                                    </th>
                                    <td>
                                        <input type="date" data-date-inline-picker="true" value="{{ $item2->tanggal }}"
                                            name="tanggal" />
                                    </td>
                                    <td>
                                        <input type="time" name="jam" value="{{ substr($item2->jam, 0, -3) }}">
                                    </td>
                                    <td>
                                        <input type="text" name="judul" style="width: 20em"
                                            value="{{ $item2->judul }}">
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
            @if (session()->has('success-update'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success-update') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
@endsection
