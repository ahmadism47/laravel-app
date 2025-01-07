<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body style="background-color: #e8e8e0">
    <nav class="navbar navbar-expand-lg navbar-light  " style="background-color: red">
        <a class="navbar-brand text-light fw-bold" href="#">Laravel Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-light" href="{{ route('about') }}">About </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-light" href="{{ route('users.index') }}">Users </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>


        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>

</html>
