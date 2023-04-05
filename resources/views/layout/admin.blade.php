<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('layout.partials.head-admin')
</head>
<body>
    @include('layout.partials.header')
    <div class="container-fluid">
        <div class="row">
            @include('layout.partials.nav-admin')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @include('layout.partials.footer-scripts')
</body>
</html>