<!DOCTYPE html>
    <head>
        <title>GoT - @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body>
        <nav class="navbar navbar-dark bg-primary">
        <a href="#" class="navbar-brand">Game of Thrones</a>
        </nav>

         @yield('content')
    </body>
</html>