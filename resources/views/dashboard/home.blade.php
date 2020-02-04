@extends('layouts.dashboard')
@section('content')
<div class="w-100 mx-auto bg-white-smoke">
    <div class="w-100 flex mx-auto">
        <div class="w-20 sticky bg-white" style="height: 100vh">
            <div class="sticky bg-white">
                <div class="bg-red-lightest relative w-100 py-1 pt-2 my-auto ">
                    <p class="text-xl text-center">Restaurant's Dashboard</p>
                </div>
                <div class="relative mb-3 absolute mt-12 z-9999 bg-white">
                    <ul class="list pl-5">
                        <li class="my-4"><a href="#" target="content" class="no-underline hover:"><i class="fas fa-chart-line mx-2 text-red-lighter"></i>Dashboard</a></li>
                        <li class="my-4"><a href="/products/create" target="content" class="no-underline"><i class="fas fa-utensils mx-2 text-red-lighter"></i>Product</a></li>
                        <li class="my-4"><a href="#" target="content" class="no-underline"><i class="fas fa-user mx-2 text-red-lighter"></i>Manage Users</a></li>
                        <li class="my-4"><a href="/" class="no-underline"><i class="fas fa-globe mx-2 text-red-lighter"></i>Visit Website</a></li>
                        <li  class="my-4"><a href="#" target="content" class="no-underline"><i class="fas fa-smile-wink mx-2 text-red-lighter"></i>Reviews</a></li>
                        <li class="my-4"><a href="#" target="content" class="no-underline"><i class="far fa-images mx-2 text-red-lighter"></i>Gallery</a></li>
                        <li class="my-4"><a href="#" target="content" class="no-underline"><i class="fas fa-envelope mx-2 text-red-lighter"></i>Messages</a></li>
                        <li  class="my-4"><a href="{{ route('logout') }}" class="no-underline"><i class="fas fa-sign-out-alt mx-2 text-red-lighter"></i>Logout</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="w-80">
            <div class="w-100 mx-auto text-right bg-red-lightest pb-2 sticky pr-4 z-99">
                <div class="">
                    <ul class="list inline-block">
                        <li class="mx-1">Hi, {{ Auth::user()->name }} </li>
                        <li class="mx-1">
                            <div class="rounded-full" style="height: 40px; width: 40px">
                                <img class="clip-full rounded-full border-solid border-red border-2" src="{{ asset('image/avatar.jpg') }}">
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <div class=" mx-2 relative">
                <iframe class="w-100 mx-auto h-px-500" name="content" onload="window.parent.parent.scrollTo(0,0)">

                </iframe>
            </div>
        </div>
    </div>

    <div class="w-80 flex mx-auto mt-5">
        <div class="w-25 mx-2 relative">



        </div>

    </div>
    <div class="h-px-300"></div>
</div>
@endsection
