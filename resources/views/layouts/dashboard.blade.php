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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
@yield('content')
</body>
</html>