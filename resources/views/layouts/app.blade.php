<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.6.2.1.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
    <script src="{{ asset('assets/js/font-awesome.6.2.1.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body class="bg-white">
    <div id="app">
        <nav-vertical></nav-vertical>
        <router-view/>
    </div>
    @vite(['resources/js/app.js'])
</body>
</html>
