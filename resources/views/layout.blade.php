<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav>
            <a href="{{ route('home.index') }}">Home</a>
            <a href="{{ route('home.about') }}">About</a>
            <a href="{{ route('home.contact') }}">Contact</a>
        </nav>
        @yield('content')
    </body>
</html>
