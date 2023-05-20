@extends('layout.admin')

@section('title')
    Link | Daftar MSJ Admin
@endsection

@section('heading')
    <h1 class="h2">Link Kelas dan <i>WhatsApp</i> Group</h1>
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
            <h4 style="text-align: center" class="mb-4">MSJ 1</h4>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">URL</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="/admin/link/baru/1" method="POST">
                            @csrf
                            <tr>
                                <th scope="row">
                                    Baru
                                </th>
                                <td>
                                    <input type="url" name="baru" value="{{ $msj1->baru }}" style="width:20em">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Update
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Ulang
                                </th>
                                <td>
                                    <input type="url" name="ulang" value="{{ $msj1->ulang }}" style="width:20em">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Update
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    WhatsApp
                                </th>
                                <td>
                                    <input type="url" name="whatsapp" value="{{ $msj1->whatsapp }}" style="width:20em">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Update
                                    </button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="col-md-8 mx-auto">
            <h4 style="text-align: center" class="mb-4">MSJ 2</h4>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">URL</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="/admin/link/baru/2" method="POST">
                            @csrf
                            <tr>
                                <th scope="row">
                                    Baru
                                </th>
                                <td>
                                    <input type="url" name="baru" value="{{ $msj2->baru }}" style="width:20em">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Update
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Ulang
                                </th>
                                <td>
                                    <input type="url" name="ulang" value="{{ $msj2->ulang }}" style="width:20em">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Update
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    WhatsApp
                                </th>
                                <td>
                                    <input type="url" name="whatsapp" value="{{ $msj2->whatsapp }}" style="width:20em">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Update
                                    </button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="col-md-8 mx-auto">
            <h4 style="text-align: center" class="mb-4">MSJ 3</h4>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">URL</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="/admin/link/baru/3" method="POST">
                            @csrf
                            <tr>
                                <th scope="row">
                                    Baru
                                </th>
                                <td>
                                    <input type="url" name="baru" value="{{ $msj3->baru }}" style="width:20em">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Update
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Ulang
                                </th>
                                <td>
                                    <input type="url" name="ulang" value="{{ $msj3->ulang }}" style="width:20em">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Update
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    WhatsApp
                                </th>
                                <td>
                                    <input type="url" name="whatsapp" value="{{ $msj3->whatsapp }}" style="width:20em">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Update
                                    </button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
