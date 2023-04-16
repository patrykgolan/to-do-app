<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body class="m-4">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('to-do.index')}}">TO DO App</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('to-do.index')}}">To Do</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('to-do.analytics')}}">Analytics</a>
                </li>
            </ul>
        </div>
    </nav>

        <!-- content of subpages -->
        @yield('content')

        <!-- scripts in footer -->
        @vite('resources/js/app.js')

    </body>
</html>
