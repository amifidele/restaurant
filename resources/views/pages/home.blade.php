@extends('layouts.app')
@section('content')
    <div class="w-100 bg-white-smoke z-0">
        <div class="w-85 flex mx-auto ">
            <div class="w-60">
                <div class="w-100 mt-24 pt-5">
                    <h3 class="line-height-small text-xl font-weight-normal">The Best</h3>
                    <h1 class="text-4xl -mt-2">Restaurant <span class="text-xl font-weight-normal">In Rwanda</span></h1>
                    <p>it is a long established fact that a reader will be distracted<br> by the
                        readable content of page when looking .</p>
                    <span><a class="btn bg-red-lighter text-white"> View Full Menu</a><a class="btn border-solid border-1 border-grey-dark text-grey-darkest mx-3"> See Direction's</a></span>

                    <div class="h-px-350"></div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
    <div class="w-100 bg-white-smoke ">
        <div class="w-70 mx-auto text-center">
            <p class="line-height-small text-xl">Some Of Our</p>
            <h1 class="line-height-small text-3xl">Famous Dishee's</h1>
        </div>
        <div class="absolute bg-red-lighter"></div>
         <div class="w-85 mx-auto mt-5">
            <div class="w-100 flex mx-auto">
                <div class="w-20 mx-3 bg-white shadow-sm hover:shadow-lg hover: p-2 rounded-xl">
                    <div class="h-px-250 mx-auto py-4 px-4" style="width: 250px">
                        <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                    </div>
                    <div class="text-center">
                        <div class="w-80 mx-auto">
                            <p class="text-lg">Vegetlian Pasta Meal</p>
                            <p class="text-xl font-weight-bold line-height-small">$ 15</p>
                        </div>
                    </div>
                </div>
                <div class="w-20 mx-3 bg-white shadow-sm hover:shadow-lg hover: p-2 rounded-xl">
                    <div class="h-px-250 mx-auto py-4 px-4" style="width: 250px">
                        <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                    </div>
                    <div class="text-center">
                        <div class="w-80 mx-auto">
                            <p class="text-lg">Vegetlian Pasta Meal</p>
                            <p class="text-xl font-weight-bold line-height-small">$ 15</p>
                        </div>
                    </div>
                </div>
                <div class="w-20 mx-3 bg-white shadow-sm hover:shadow-lg hover: p-2 rounded-xl">
                    <div class="h-px-250 mx-auto py-4 px-4" style="width: 250px">
                        <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                    </div>
                    <div class="text-center">
                        <div class="w-80 mx-auto">
                            <p class="text-lg">Vegetlian Pasta Meal</p>
                            <p class="text-xl font-weight-bold line-height-small">$ 15</p>
                        </div>
                    </div>
                </div>
                <div class="w-20 mx-3 bg-white shadow-sm hover:shadow-lg hover: p-2 rounded-xl">
                    <div class="h-px-250 mx-auto py-4 px-4" style="width: 250px">
                        <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                    </div>
                    <div class="text-center">
                        <div class="w-80 mx-auto">
                            <p class="text-lg">Vegetlian Pasta Meal</p>
                            <p class="text-xl font-weight-bold line-height-small">$ 15</p>
                        </div>
                    </div>
                </div>


            </div>
         </div>
        <div class="h-px-150"></div>
    </div>
@endsection