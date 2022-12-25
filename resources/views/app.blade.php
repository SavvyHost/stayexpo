<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title', 'StayExpo')</title>

    {{-- @vite(['resources/js/app.js']) --}}

    @vite('resources/js/app.js', 'vendor/courier/build')

    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>

    @include('layouts.main-header')

    @yield('content')

    @include ('layouts.main-footer')

    {{-- <script>
        {{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', []) }}
    </script> --}}
</body>

</html>

{{-- @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}
