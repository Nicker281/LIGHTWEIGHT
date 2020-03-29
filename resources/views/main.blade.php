<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')LightWeight</title>
    
    <link rel="stylesheet" href="">
    @yield('css')
</head>
<body>
    @yield('content')
</body>
</html>