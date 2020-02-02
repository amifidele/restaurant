
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
<div class="w-100 bg-white shadow-sm z-9999">
    <div class="w-85 flex mx-auto py-1">
        <div class="w-30 pt-3">
            <p class="text-xl">Restaurant's Web</p>
        </div>
        <div class="w-70 pt-2 text-right">
            <ul class="list inline-block">
                <li class="mx-3">Home</li>
                <li class="mx-3">Menu</li>
                <li class="mx-3">Services</li>
                <li class="mx-3">Gallery</li>
                <li class="mx-3">About us</li>
            </ul>
        </div>
    </div>
</div>
 @yield('content')
</body>
</html>
