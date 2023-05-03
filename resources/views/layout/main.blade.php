<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('layout.partials.head')
</head>
<body class="d-flex flex-column min-vh-100">
    @include('layout.partials.nav')
    <div class="col-lg-8 mx-auto p-4 py-md-2">
            @yield('content')
            @include('layout.partials.footer')
        </div>
    @include('layout.partials.footer-scripts')
</body>
</html>