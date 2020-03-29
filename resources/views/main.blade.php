<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>@yield('title')LightWeight</title>
    
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/main.css">
    @yield('css')
</head>
<body>
    @include('nav')
    @yield('content')
    @yield('footer')
    
    <script src="js/app.js"></script>
    @yield('js')
</body>
</html>