<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiara</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    {{-- CSRF Token  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="I am Tiara Arista. Graduated from Bachelor of Applied Informatics Engineering on PHB Tegal, I'm IT Enthusiast
    especially Web Developer and UI Design.">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Styles  --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tailwind.output.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/output.css') }}" rel="stylesheet">

    {{-- Aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @yield('top')
</head>

<body>
    <main class="h-full overflow-y-auto bg-gray-200 dark:bg-gray-700">

        @yield('content')

    </main>
    @include('layouts.dashboard.footer')

    @yield('bot')

    {{-- Scripts  --}}
    <script src="{{ asset('assets/js/script.js') }}" defer></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>
    <script src="{{ asset('assets/js/focus-trap.js') }}"></script>

    {{-- Tailwind Elements --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    {{-- AOS init  --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>


</html>
