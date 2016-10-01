<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
        <title> @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <script src=" {{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>
        <script src=" {{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
        @include('templates.nav')
        <p></p>
        @yield('body')
    </body>
</html>
