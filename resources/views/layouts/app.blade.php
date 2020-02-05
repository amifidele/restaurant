
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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
    <link href="https://fonts.googleapis.com/css?family=Nunito|Playfair+Display&display=swap" rel="stylesheet">
    <style>
        h1, h3{
            font-family: 'Playfair Display', serif;
        }
        p, a{
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<div class="w-100 bg-white shadow-sm z-9999 sticky-top">
    <div class="w-85 flex mx-auto py-1">
        <div class="w-30 pt-3">
            <p ><a href="/" class="text-xl text-red-lighter font-weight-bold no-underline">Restaurant's Web</a></p>
        </div>
        <div class="w-70 pt-2 text-right">
            <ul class="list inline-block">
                <li class="mx-3"><a class="no-underline" href="/">Home</a></li>
                <li class="mx-3"><a class="no-underline" href="/menu">Menu</a></li>
                <li class="mx-3"><a class="no-underline" href="/">Services</a></li>
                <li class="mx-3"><a class="no-underline" href="">Gallery</a></li>
                <li class="mx-3"><a class="no-underline" href="/">About us</a></li>
            </ul>
        </div>
    </div>
</div>
 @yield('content')
<div class="w-100 bg-white py-3">
   <div class="w-85 mx-auto">
        <div class="w-100 flex">
            <div class="w-25 py-3">
                <div class="pl-3">
                    <h1 class="text-lg font-weight-bold">Restaurant</h1>
                </div>
                <div class="w-100  border-solid border-grey-dark border-l-0 border-t-0 border-b-0 border-r-1 mt-4" style="height: 120px;">
                    <ul class="list">
                        <li class="pl-3"><p class="text-sm line-height-small"><a href="#">View Full Menu</a></p></li>
                        <li class="pl-3"><p class="text-sm line-height-small"><a href="#">Services</a></p></li>
                        <li class="pl-3"><p class="text-sm line-height-small"><a href="#">Gallery</a></p></li>
                        <li class="pl-3"><p class="text-sm line-height-small"><a href="#">About Us</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="w-25 py-3">
                <div class="pl-3">
                    <h1 class="text-lg font-weight-bold">Restaurant</h1>
                </div>
                <div class="w-100  border-solid border-grey-dark border-l-0 border-t-0 border-b-0 border-r-1 mt-4" style="height: 120px;">
                    <ul class="list">
                        <li class="pl-3"><p class="text-sm line-height-small"><a href="#">View Full Menu</a></p></li>
                        <li class="pl-3"><p class="text-sm line-height-small"><a href="#">Services</a></p></li>
                        <li class="pl-3"><p class="text-sm line-height-small"><a href="#">Gallery</a></p></li>
                        <li class="pl-3"><p class="text-sm line-height-small"><a href="#">About Us</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="w-25 py-3">
                <div class="pl-3">
                    <h1 class="text-lg font-weight-bold">Restaurant's Map</h1>
                </div>
                <div class="w-100  border-solid border-grey-dark border-l-0 border-t-0 border-b-0 border-r-1 mt-4" style="height: 120px;">
                    <div class="w-100">
                        <iframe class="ml-4" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15953.739104845767!2d29.6220911!3d-1.5089336!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89d76b96ef25584a!2sSusa%20Gardens!5e0!3m2!1sen!2srw!4v1580894919353!5m2!1sen!2srw" width="280" height="130" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <div class="w-25 py-3">
                <div class="pl-3">
                    <h1 class="text-lg font-weight-bold">Contact Us</h1>
                </div>
                <div class="w-100 mt-4" style="height: 120px;">
                    <ul class="list">
                        <li class="pl-3"><p class="text-sm line-height-small">Phone :  +250 780 000 000</p></li>
                        <li class="pl-3"><p class="text-sm line-height-small">Email :  hello@restaurant.com</p></li>
                        <li class="pl-3"><p class="text-sm line-height-small">Address :  RN 100 K</p></li>
                    </ul>
                </div>
            </div>
        </div>
   </div>
</div>
<div class="w-100 ">
    <div class="w-85 mx-auto py-2 flex ">
        <div class="text-left w-50 pt-3">
            <p class="text-grey-darkest text-sm font-weight-bold">© 2020 Restaurant</p>
        </div>
        <div class="text-right w-50 pt-3">
            <p class="text-red-light text-sm font-weight-bold"><a class="" href="https://www.umbrellagrp.rw">Umbrella Grp</a> Made It !</p>
        </div>

    </div>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
