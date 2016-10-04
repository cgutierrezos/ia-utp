<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title') </title>
        
    </head>
    <body id="body">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
        <script src=" {{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>
        <script src=" {{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
        @include('templates.nav')
        <p></p>
        @yield('body')
    </body>
</html>
