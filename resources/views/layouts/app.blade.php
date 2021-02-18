<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog con Laravel v2 | @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
        <nav class="d-flex justify-content-center">
            <a href="/" class="nav-link">Home</a>
            <a href="posts" class="nav-link">Posts</a>
        </nav>
        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
