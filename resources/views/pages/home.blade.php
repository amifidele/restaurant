@extends('layouts.app')
@section('content')
    <div class="w-100 bg-white-smoke z-0">
        <div class="w-100 flex mx-auto ">
            <div class="w-60">
                <div class="w-75 mx-auto pl-1 mt-24 pt-5" data-aos="fade-down"
                     data-aos-easing="linear"
                     data-aos-duration="1000">
                    <h3 class="line-height-small text-xl font-weight-normal">The Best</h3>
                    <h1 class="text-4xl -mt-2"><b>Restaurant</b> <span class="text-xl font-weight-normal">In Rwanda</span></h1>
                    <p>it is a long established fact that a reader will be distracted<br> by the
                        readable content of page when looking .</p>
                    <span class="relative z-99"><a class="btn bg-red-lighter text-white" href="/menu"> View Full Menu</a><a class="btn border-solid border-1 border-grey-dark text-grey-darkest mx-3"> See Our Services</a></span>
                    <div class="absolute -mt-20 -ml-32 w-70 z-0">
                        <img class="w-70" src="{{ asset('image/icon_chain.svg') }}">
                    </div>
                    <div class="h-px-300"></div>
                </div>
            </div>
            <div class="w-40">
                <div class="absolute w-100 ml-32">
                    <img class="w-30" style="" src="{{ asset('image/desk_img.png') }}">
                </div>
                <div class="relative w-100 mt-16">
                    <img class="w-60 -ml-10" src="{{ asset('image/salad.png') }}">
                </div>
            </div>
        </div>
        <div class="border-1 border-solid bg-white-smoke border-grey-dark relative rounded-full mx-auto -mt-10" style="width: 25px; height: 40px">
            <div class="bg-grey-darkest mx-auto sliding-down-icon rounded-full" style="height: 3px; width: 3px"></div>
        </div>
    </div>
    <div class="w-100 bg-white-smoke  py-5 z-999 relative">
        @if(count($products) > 0)
        <div class="w-70 mx-auto text-center"  data-aos="fade-up"
             data-aos-easing="linear"
             data-aos-duration="1000">
            <p class="line-height-small text-xl">Some Of Our</p>
            <h1 class="line-height-small text-3xl">Famous Dishe's</h1>
        </div>
        <div class="absolute shadow-lg bg-red-lighter rounded-full l-2 mt-32 text-center pt-3 hover:shadow-none cursor-pointer" style="width: 50px; height: 50px">
            <i class="fas fa-angle-left text-xl text-white"></i>
        </div>
        <div class="absolute shadow-lg bg-red-lighter rounded-full r-2 mt-32 text-center pt-3 hover:shadow-none cursor-pointer" style="width: 50px; height: 50px">
            <i class="fas fa-angle-right text-xl text-white"></i>
        </div>
         <div class="w-85 mx-auto mt-5">
             <div class="w-100 grid grid-4 mx-auto">
        @foreach($products as $product)
                <div class="mx-2 bg-white shadow-sm hover:shadow-lg p-2 rounded-xl">
                    <div class="h-px-200 mx-auto py-2 px-2" style="width: 250px">
                        <img class="clip-full" src="/storage/product_images/{{ $product->image_of_product }}">
                    </div>
                    <div class="text-center">
                        <div class="w-80 mx-auto">
                            <p class="text-sm font-weight-bold">{{ $product->name_of_product }}</p>
                            <h1 class="text-xl font-weight-bold line-height-small">$ {{ $product->price_of_product }}</h1>
                        </div>
                    </div>
                </div>
        @endforeach
            </div>
         </div>
        @endif
    </div>
    <div class="w-100 bg-white-smoke pt-5">
        <div class="w-70 mx-auto text-center" data-aos="fade-up"
             data-aos-easing="linear"
             data-aos-duration="1000">
            <p class="line-height-small text-xl">Why Most</p>
            <h1 class="line-height-small text-3xl">People Choose Us</h1>
        </div>
        <div class="w-85 mx-auto">
            <div class="w-100 flex mt-5">
                <div class="w-25 bg-white mx-3 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg"  data-aos="fade-right"
                     data-aos-offset="200"
                     data-aos-easing="ease-in-sine">
                    <div>

                    </div>
                    <div>
                        <h1 class="text-lg font-weight-bold">Delicious Food</h1>
                        <p>It is a long established fact that a reader will be distracted</p>
                    </div>
                </div>
                <div class="w-25 bg-white mx-3 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg"  data-aos="fade-up"
                     data-aos-offset="200"
                     data-aos-easing="ease-in-sine">
                    <div>

                    </div>
                    <div>
                        <h1 class="text-lg font-weight-bold">Fast Service</h1>
                        <p>It is a long established fact that a reader will be distracted</p>
                    </div>
                </div>
                <div class="w-25 bg-white mx-3 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg"  data-aos="fade-down"
                     data-aos-offset="200"
                     data-aos-easing="ease-in-sine">
                    <div>

                    </div>
                    <div>
                        <h1 class="text-lg font-weight-bold">Health Option</h1>
                        <p>It is a long established fact that a reader will be distracted</p>
                    </div>
                </div>
                <div class="w-25 bg-white mx-3 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg"  data-aos="fade-left"
                     data-aos-offset="200"
                     data-aos-easing="ease-in-sine">
                    <div>

                    </div>
                    <div>
                        <h1 class="text-lg font-weight-bold">Easy Parking</h1>
                        <p>It is a long established fact that a reader will be distracted</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 bg-white-smoke pt-5">
{{--        @if(count($reviews) > 0)--}}
{{--            <div class="w-70 mx-auto text-center mt-5" data-aos="fade-up"--}}
{{--                 data-aos-easing="linear"--}}
{{--                 data-aos-duration="1000">--}}
{{--                <p class="line-height-small text-xl">Reviews From</p>--}}
{{--                <h1 class="line-height-small text-3xl">Our Happy Clients</h1>--}}
{{--            </div>--}}
{{--            <div class="absolute shadow-lg bg-red-lighter rounded-full l-2 mt-20 text-center pt-3 hover:shadow-none cursor-pointer" style="width: 50px; height: 50px">--}}
{{--                <i class="fas fa-angle-left text-xl text-white"></i>--}}
{{--            </div>--}}
{{--            <div class="absolute shadow-lg bg-red-lighter rounded-full r-2 mt-20 text-center pt-3 hover:shadow-none cursor-pointer" style="width: 50px; height: 50px">--}}
{{--                <i class="fas fa-angle-right text-xl text-white"></i>--}}
{{--            </div>--}}
{{--            <div class="w-85 mx-auto grid grid-3 mt-5">--}}
{{--                @foreach($reviews as $review)--}}
{{--                    <div class=" bg-white mx-4 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg">--}}
{{--                        <div class="absolute -ml-10 -mt-5" style="width: 50px; height: 50px">--}}
{{--                            <img class="clip-full rounded-full border-solid border-red-lighter border-4" src="/storage/avatar/{{ $review->avatar }}">--}}
{{--                        </div>--}}
{{--                        <div class="pt-4">--}}
{{--                            <p class="line-height-small">{{ $review->comment_of_reviewer }}</p>--}}
{{--                            <h1 class="text-sm font-weight-bold line-height-small">{{ $review->name_of_reviewer }}</h1>--}}
{{--                            <p class="text-sm line-height-small">{{ $review->company_title_of_reviewer }}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        @endif--}}
    </div>
    <div class="h-px-150 bg-white-smoke"></div>
@endsection