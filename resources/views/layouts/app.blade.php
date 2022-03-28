<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ ucfirst($title ?? 'Site') }} | Bluz Cruz</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        {{-- <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;500;700&display=swap" rel="stylesheet"> --}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/251cade0b0.js" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
        @include('layouts.navbar')

        <main class="bg-dark p-5">
            @yield('content')
        </main>
        @include('layouts.footer')
    </body>
</html>
