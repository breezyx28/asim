<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- livewire style --}}
    @livewireStyles

    {{-- font-awesome --}}
    <link rel="stylesheet" href="{{ asset('assets/FA/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/FA/font-awesome.min.css.css') }}">

    @yield('head')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

{{-- <body dir="rtl"> --}}

<body class="min-h-screen relative">

    @yield('main')


    {{-- livewire script --}}
    @livewireScripts

    @yield('js')
</body>

</html>
