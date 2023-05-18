@extends('layout.admin')

@section('title')
    Link Peserta | Daftar MSJ Admin
@endsection

@section('heading')
    <h1 class="h2">Daftar Link Peserta MSJ</h1>
@endsection

@section('content')
    <div class="container">
        @if (session()->has('success-update'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success-update') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-md-8 mx-auto">
            <h4 style="text-align: center" class="mb-4">Google Form</h4>
            <p>Link untuk peserta yang <b>mengulang</b></p>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">MSJ</th>
                            <th scope="col">Link</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($link as $item2)
                            <form action="/admin/link/update/{{ $item2->id }}" method="POST">
                                @csrf
                                <tr>
                                    <th scope="row">
                                        {{ $item2->id }}
                                        <input type="hidden" name="id" value={{ $item2->id }}>
                                    </th>
                                    <td>
                                        <input type="url" style="width: 20em" value="{{ $item2->link }}"
                                            name="link" />
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
                <p>Harap pastikan link benar dan gunakan <i>shortener</i> apabila memungkinkan</p>
            </div>
        </div>

        <hr>

        <div class="col-md-8 mx-auto">
            <h4 style="text-align: center" class="mb-4">Training Log</h4>
            <p>Link untuk peserta <b>baru</b></p>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">MSJ</th>
                            <th scope="col">Link</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($link as $item3)
                            <form action="/admin/linkbaru/update/{{ $item3->id }}" method="POST">
                                @csrf
                                <tr>
                                    <th scope="row">
                                        {{ $item3->id }}
                                        <input type="hidden" name="id" value={{ $item3->id }}>
                                    </th>
                                    <td>
                                        <input type="url" style="width: 20em" value="{{ $item3->link_baru }}"
                                            name="link" />
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
                <p>Harap pastikan link benar dan gunakan <i>shortener</i> apabila memungkinkan</p>
            </div>
        </div>
    </div>
@endsection
