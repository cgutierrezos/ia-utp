<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title') </title>
        <link rel="stylesheet"  href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    </head>
    <body>
        <ul class="nav nav-tabs">
            <li>
            <a class="navbar-brand" href="{{ asset('imagenes/ai.png') }}">
            <img alt="Brand" alt="A.I" width="100" height="30"  src="{{ asset('imagenes/ai.png')}}">
            </a>
            </li>
            <li role="presentation" class="active">
                <a href="/">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 
                    Inicio
                </a>
            </li>
            <li role="presentation">
                <a href="/algoritmos">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                    Algoritmos
                </a>
            </li>
            <li role="presentation">
                <a href="/animacion">
                    <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                    Animacion
                </a>
            </li>
        </ul>
        <p></p>
        @yield('body')
    </body>
</html>
