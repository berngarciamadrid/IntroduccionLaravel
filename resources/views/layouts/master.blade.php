<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title> Introducción a Laravel y sus Template BLADE -@yield('title')</title>
    </head>
    <body>
        @section('header')
            MASTER HEADER
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
            MASTER FOOTER
        @show
    </body>

</html>
