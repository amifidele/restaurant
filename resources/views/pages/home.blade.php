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
                    <span><a class="btn bg-red-lighter text-white" href="/menu"> View Full Menu</a><a class="btn border-solid border-1 border-grey-dark text-grey-darkest mx-3"> See Direction's</a></span>

                    <div class="h-px-300"></div>
                </div>
            </div>
            <div>

            </div>
        </div>
        <div class="border-1 border-solid bg-white-smoke border-grey-dark relative rounded-full mx-auto -mt-10" style="width: 25px; height: 40px">
            <div class="bg-grey-darkest mx-auto sliding-down-icon rounded-full" style="height: 7px; width: 3px"></div>
        </div>
    </div>
    <div class="w-100 bg-white-smoke  py-5">
        <div class="w-70 mx-auto text-center">
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
            <div class="w-100 flex mx-auto">
                <div class="w-25 mx-3 bg-white shadow-sm hover:shadow-lg hover: p-2 rounded-xl">
                    <div class="h-px-250 mx-auto py-4 px-4" style="width: 250px">
                        <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                    </div>
                    <div class="text-center">
                        <div class="w-80 mx-auto">
                            <p class="text-lg">Vegetarian Pasta Meal</p>
                            <p class="text-xl font-weight-bold line-height-small">$ 15</p>
                        </div>
                    </div>
                </div>
                <div class="w-25 mx-3 bg-white shadow-sm hover:shadow-lg hover: p-2 rounded-xl">
                    <div class="h-px-250 mx-auto py-4 px-4" style="width: 250px">
                        <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                    </div>
                    <div class="text-center">
                        <div class="w-80 mx-auto">
                            <p class="text-lg">Vegetarian Pasta Meal</p>
                            <p class="text-xl font-weight-bold line-height-small">$ 15</p>
                        </div>
                    </div>
                </div>
                <div class="w-25 mx-3 bg-white shadow-sm hover:shadow-lg hover: p-2 rounded-xl">
                    <div class="h-px-250 mx-auto py-4 px-4" style="width: 250px">
                        <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                    </div>
                    <div class="text-center">
                        <div class="w-80 mx-auto">
                            <p class="text-lg">Vegetarian Pasta Meal</p>
                            <p class="text-xl font-weight-bold line-height-small">$ 15</p>
                        </div>
                    </div>
                </div>
                <div class="w-25 mx-3 bg-white shadow-sm hover:shadow-lg hover: p-2 rounded-xl">
                    <div class="h-px-250 mx-auto py-4 px-4" style="width: 250px">
                        <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                    </div>
                    <div class="text-center">
                        <div class="w-80 mx-auto">
                            <p class="text-lg">Vegetarian Pasta Meal</p>
                            <p class="text-xl font-weight-bold line-height-small">$ 15</p>
                        </div>
                    </div>
                </div>


            </div>
         </div>
    </div>
    <div class="w-100 bg-white-smoke pt-5">
        <div class="w-70 mx-auto text-center">
            <p class="line-height-small text-xl">Why Most</p>
            <h1 class="line-height-small text-3xl">People Choose Us</h1>
        </div>
        <div class="w-85 mx-auto">
            <div class="w-100 flex mt-5">
                <div class="w-25 bg-white mx-3 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg">
                    <div>

                    </div>
                    <div>
                        <h1 class="text-lg font-weight-bold">Delicious Food</h1>
                        <p>It is a long established fact that a reader will be distracted</p>
                    </div>
                </div>
                <div class="w-25 bg-white mx-3 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg">
                    <div>

                    </div>
                    <div>
                        <h1 class="text-lg font-weight-bold">Fast Service</h1>
                        <p>It is a long established fact that a reader will be distracted</p>
                    </div>
                </div>
                <div class="w-25 bg-white mx-3 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg">
                    <div>

                    </div>
                    <div>
                        <h1 class="text-lg font-weight-bold">Health Option</h1>
                        <p>It is a long established fact that a reader will be distracted</p>
                    </div>
                </div>
                <div class="w-25 bg-white mx-3 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg">
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
        <div class="w-70 mx-auto text-center mt-5">
            <p class="line-height-small text-xl">Reviews From</p>
            <h1 class="line-height-small text-3xl">Our Happy Clients</h1>
        </div>
        <div class="absolute shadow-lg bg-red-lighter rounded-full l-2 mt-20 text-center pt-3 hover:shadow-none cursor-pointer" style="width: 50px; height: 50px">
            <i class="fas fa-angle-left text-xl text-white"></i>
        </div>
        <div class="absolute shadow-lg bg-red-lighter rounded-full r-2 mt-20 text-center pt-3 hover:shadow-none cursor-pointer" style="width: 50px; height: 50px">
            <i class="fas fa-angle-right text-xl text-white"></i>
        </div>
        <div class="w-85 mx-auto flex mt-5">
            <div class="w-30 bg-white mx-4 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg">
                <div class="absolute -ml-10 -mt-5" style="width: 50px; height: 50px">
                    <img class="clip-full rounded-full border-solid border-red-lighter border-4" src="{{ asset('image/avatar.jpg') }}">
                </div>
                <div class="pt-4">
                    <p class="line-height-small">It is a long established fact that a reader will be distracted by the readable content of page when looking .</p>
                    <h1 class="text-sm font-weight-bold line-height-small">Luis Fidele</h1>
                    <p class="text-sm line-height-small">CTO, Jizz Group</p>
                </div>
            </div>
            <div class="w-30 bg-white mx-4 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg">
                <div class="absolute -ml-10 -mt-5" style="width: 50px; height: 50px">
                    <img class="clip-full rounded-full border-solid border-red-lighter border-4" src="{{ asset('image/avatar.jpg') }}">
                </div>
                <div class="pt-4">
                    <p class="line-height-small">It is a long established fact that a reader will be distracted by the readable content of page when looking .</p>
                    <h1 class="text-sm font-weight-bold line-height-small">Jack obi</h1>
                    <p class="text-sm line-height-small">CFO, Kookp tm</p>
                </div>
            </div>
            <div class="w-30 bg-white mx-4 py-3 px-3 rounded-xl shadow-sm hover:shadow-lg">
                <div class="absolute -ml-10 -mt-5" style="width: 50px; height: 50px">
                    <img class="clip-full rounded-full border-solid border-red-lighter border-4" src="{{ asset('image/avatar.jpg') }}">
                </div>
                <div class="pt-4">
                    <p class="line-height-small">It is a long established fact that a reader will be distracted by the readable content of page when looking .</p>
                    <h1 class="text-sm font-weight-bold line-height-small">John Doe</h1>
                    <p class="text-sm line-height-small">CEO, Infotech</p>
                </div>
            </div>
        </div>
    </div>
    <div class="h-px-150 bg-white-smoke"></div>
@endsection