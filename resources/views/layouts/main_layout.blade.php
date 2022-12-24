<!DOCTYPE html>
<html lang="es-MX" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href={{ asset('favicon.ico') }} type="image/x-icon">
        <link rel="stylesheet" href={{ asset('vendor/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('vendor/fontawesome-free-6.2.1-web/css/all.min.css') }}>
    </head>
    <body>
        @yield('main_container')
        <script src={{ asset('vendor/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}></script>
        <script src={{ asset('js/main.js') }}></script>
    </body>
</html>