@extends('layouts.dashboard')
@section('content')
    <div class="w-70 mx-auto mt-5">
        <div class="w-100 flex">
            <div class="w-30 mx-3 my-3">
                    <div class="absolute -ml-10 -mt-5" style="width: 50px; height: 50px">
                        <img class="clip-full rounded-full border-solid border-red-lighter border-4" src="{{ asset('image/avatar.jpg') }}">
                    </div>
                    <div class="pt-4">
                        <p class="line-height-small">It is a long established fact that a reader will be distracted by the readable content of page when looking .</p>
                        <h1 class="text-sm font-weight-bold line-height-small">Jack obi</h1>
                        <p class="text-sm line-height-small">CFO, Kookp tm</p>
                    </div>
            </div>
        </div>
    </div>
@endsection