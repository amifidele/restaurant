@extends('layouts.app')
@section('content')
    <div class="w-100 bg-white-smoke py-5">
        <div class="w-85 mx-auto">
            <div class="w-70 pt-2 mx-auto text-center">
                <h1 class="line-height-small text-3xl">Photo Gallery</h1>
            </div>
            @if(count($images) > 0)
                <div class="grid grid-4 pt-4">
                    @foreach($images as $image)
                        <div class="mx-2 my-2 shadow py-2 px-2 bg-white  hover:shadow-md">
                            <div class="h-px-200">
                                <img class="clip-full" src="/storage/images/{{ $image->image }}">
                            </div>
                            <div class="text-center pt-1">
                                <p>{{ $image->caption }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
@endsection