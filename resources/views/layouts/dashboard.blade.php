<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Dashboard Restaurant</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/desktop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mobile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tablet.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.1" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link href="{{ asset('fonts/_flaticon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Playfair+Display&display=swap" rel="stylesheet">
    <style>
        h1, h3{
            font-family: 'Playfair Display', serif;
        }
        p{
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
@yield('content')
</body>
</html>