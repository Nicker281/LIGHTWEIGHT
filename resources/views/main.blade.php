<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="DREAM BIG | SET GOALS | GET LIGHTWEIGHT" />
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>@yield('title')LIGHTWEIGHT</title>

    <link rel="icon" href="{{  asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('css')
</head>
<body>
    @include('nav')
    @yield('content')
    @include('footer')

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>
</html>
