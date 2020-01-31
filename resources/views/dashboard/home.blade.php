@extends('layouts.dashboard')

@section('content')
<div class="w-100 mx-auto bg-red-lightest">
    <div class="w-80 flex mx-auto py-2">
        <div class="w-30 pt-2">
            <p class="text-xl">Restaurant's Dashboard</p>
        </div>
        <div class="w-70">
            <div class="w-100 mx-auto text-right">
                <ul class="list inline-block">
                    <li class="mx-1">Hi, UserName</li>
                    <li class="mx-1">
                        <div class="rounded-full" style="height: 40px; width: 40px">
                            <img class="clip-full rounded-full" src="{{ asset('image/avatar.jpg') }}">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="w-80 flex mx-auto mt-5">
        <div class="w-25 mx-2 relative">

            <div class="bg-white relative mb-3 absolute rounded-xxl py-3 px-3 border-1 border-solid border-grey-dark">
                <ul class="list pl-5">
                    <li class="my-3"><a href="#" class="no-underline"><i class="fi flaticon-alarm-1"></i>Dashboard</a></li>
                    <li class="my-3"><a href="#" class="no-underline">Product</a></li>
                    <li class="my-3"><a href="#" class="no-underline">Manage Users</a></li>
                </ul>
            </div>
            <div class="bg-white relative mb-3 absolute rounded-xxl py-3 px-3  border-1 border-solid border-grey-dark">
                <ul class="list pl-5">
                    <li  class="my-3"><a href="#" class="no-underline">Testimonials</a></li>
                    <li class="my-3"><a href="#" class="no-underline">Gallery</a></li>
                    <li class="my-3"><a href="#" class="no-underline">Messages</a></li>
                </ul>
            </div>
        </div>
        <div class="w-75 mx-2 rounded-xxl relative">
            <div class="w-95 mx-auto bg-white py-3 rounded-xxl">
                <div class="w-90 mx-auto flex">
                    <div class="w-30 mx-2 bg-white-smoke pt-1 rounded-xxl hover:shadow-none shadow-sm">
                        <p class="text-center">Google Analytics</p>
                    </div>
                    <div class="w-30 mx-2 bg-white-smoke pt-1 rounded-xxl hover:shadow-none  shadow-sm">
                        <p class="text-center">Total Rates</p>
                    </div>
                    <div class="w-30 mx-2 bg-white-smoke pt-1 rounded-xxl hover:shadow-none shadow-sm">
                        <p class="text-center">Total Messages</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="h-px-300"></div>
</div>
@endsection
