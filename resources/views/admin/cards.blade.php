@extends('layout.admin')

@section('title')
    Cards | Daftar MSJ Admin
@endsection

@section('heading')
    <h1 class="h2">Cards</h1>
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
            <h4 style="text-align: center" class="mb-4">Homepage Cards</h4>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">MSJ</th>
                            <th scope="col">On display</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($card as $item2)
                            <form action="/admin/cards/update/{{ $item2->id }}" method="POST">
                                @csrf
                                <tr>
                                    <th scope="row">
                                        {{ $item2->id }}
                                        <input type="hidden" name="id" value={{ $item2->id }}>
                                    </th>
                                    <td>
                                        @if ($item2->show_card == true)
                                        <input type="submit" name ="show_card" value="Visible" class="btn btn-success">
                                        @else
                                        <input type="submit" name ="show_card" value="Hidden" class="btn btn-danger">
                                    @endif
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
