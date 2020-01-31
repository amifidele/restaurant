<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Dashboard Restaurant</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/desktop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mobile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tablet.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/_flaticon.css') }}" rel="stylesheet">
</head>
<body>
@yield('content')
</body>
</html>