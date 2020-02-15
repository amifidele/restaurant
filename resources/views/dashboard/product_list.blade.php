@extends('layouts.dashboard')
@section('content')
    <div class="w-90 mx-auto pb-5">
        <div class="absolute w-30 py-2">
            <a href="/product-page" class="btn bg-red-lighter rounded-full text-white"><- Back</a>
        </div>
        <div class="w-70 pt-5 mx-auto text-center" data-aos="fade-up"
             data-aos-easing="linear"
             data-aos-duration="1000">
            <p class="line-height-small text-xl">List of</p>
            <h1 class="line-height-small text-3xl">Foods & Beverages</h1>
        </div>
        @if(count($products) > 0)
            <div class="grid grid-3 pt-4">
        @foreach($products as $product)
            <div class="mx-2 my-2 shadow py-2 bg-white rounded-xl hover:shadow-md">
                <div class="flex w-90 mx-auto">
                    <div class="w-30">
                        <div class="h-px-100">
                            <img class="clip-full" src="/storage/product_images/{{ $product->image_of_product }}">
                        </div>
                    </div>
                    <div class="w-50 pl-1">
                        <h1 class="text-sm font-weight-bold">{{ $product->name_of_product }}</h1>
                        <p class="text-xs line-height-small">{{ $product->description_of_product }}</p>
                    </div>
                    <div class="w-20 text-center pt-4">
                        <h1 class="text-2xl">$ {{ $product->price_of_product }}</h1>
                    </div>
                </div>

            </div>
        @endforeach
            </div>
        @endif
        <div class="h-px-200"></div>
    </div>
@endsection    