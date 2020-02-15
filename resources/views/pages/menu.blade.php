@extends('layouts.app')
@section('content')
    <div class="w-100 mx-auto bg-white-smoke">
        <div class="w-70 mx-auto text-center pt-5">
            <p class="line-height-small text-xl">View All</p>
            <h1 class="line-height-small text-3xl">Food and Beverage</h1>
        </div>
        <div class="w-85 mx-auto pt-5">
            <div class="w-100 flex bg-white shadow-sm hover:shadow-md py-2 pt-2 rounded-full">
                <div class="w-20 text-center border-solid border-grey-dark border-b-0 border-t-0 border-l-0 border-r-1 pt-3 cursor-pointer">
                    <p><a href="#">All Meals</a></p>
                </div>
                <div class="w-20 text-center border-solid border-grey-dark border-b-0 border-t-0 border-l-0 border-r-1 pt-3 cursor-pointer">
                    <p><a href="#">BreakFast</a></p>
                </div>
                <div class="w-20 text-center border-solid border-grey-dark border-b-0 border-t-0 border-l-0 border-r-1 pt-3 cursor-pointer">
                    <p><a href="#">Lunch</a></p>
                </div>
                <div class="w-20 text-center border-solid border-grey-dark border-b-0 border-t-0 border-l-0 border-r-1 pt-3 cursor-pointer">
                    <p><a href="#">Dinner</a></p>
                </div>
                <div class="w-20 text-center pt-3 cursor-pointer">
                    <p><a href="#">Snacks</a></p>
                </div>
            </div>
        </div>
        <div class="w-85 mx-auto mt-5 py-3">
            <div class="w-100 flex mx-auto my-2">
                <div class="w-30 mx-2 py-1 pt-3 px-3 bg-white shadow-sm hover:shadow-md rounded-xl">
                    <div class="w-100 flex">
                        <div class="w-20" style="height: 60px">
                            <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                        </div>
                        <div class="w-60 px-2">
                            <h1 class="text-sm font-weight-bold line-height-small">Vegetarian Pasta Meal</h1>
                            <p class="text-xs line-height-small">it is a long established fact that a reader will be distracted</p>
                        </div>
                        <div class="w-20 text-center pt-3">
                            <h1 class="text-2xl font-weight-bold">$ 15</h1>
                        </div>
                    </div>
                </div>
                <div class="w-30 mx-2 py-1 pt-3 px-3 bg-white shadow-sm hover:shadow-md rounded-xl">
                    <div class="w-100 flex">
                        <div class="w-20" style="height: 60px">
                            <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                        </div>
                        <div class="w-60 px-2">
                            <h1 class="text-sm font-weight-bold line-height-small">Vegetarian Pasta Meal</h1>
                            <p class="text-xs line-height-small">it is a long established fact that a reader will be distracted</p>
                        </div>
                        <div class="w-20 text-center pt-3">
                            <h1 class="text-2xl font-weight-bold">$ 15</h1>
                        </div>
                    </div>
                </div>
                <div class="w-30 mx-2 py-1 pt-3 px-3 bg-white shadow-sm hover:shadow-md rounded-xl">
                    <div class="w-100 flex">
                        <div class="w-20" style="height: 60px">
                            <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                        </div>
                        <div class="w-60 px-2">
                            <h1 class="text-sm font-weight-bold line-height-small">Vegetarian Pasta Meal</h1>
                            <p class="text-xs line-height-small">it is a long established fact that a reader will be distracted</p>
                        </div>
                        <div class="w-20 text-center pt-3">
                            <h1 class="text-2xl font-weight-bold">$ 15</h1>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-100 flex mx-auto my-2">
                <div class="w-30 mx-2 py-1 pt-3 px-3 bg-white shadow-sm hover:shadow-md rounded-xl">
                    <div class="w-100 flex">
                        <div class="w-20" style="height: 60px">
                            <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                        </div>
                        <div class="w-60 px-2">
                            <h1 class="text-sm font-weight-bold line-height-small">Vegetarian Pasta Meal</h1>
                            <p class="text-xs line-height-small">it is a long established fact that a reader will be distracted</p>
                        </div>
                        <div class="w-20 text-center pt-3">
                            <h1 class="text-2xl font-weight-bold">$ 15</h1>
                        </div>
                    </div>
                </div>
                <div class="w-30 mx-2 py-1 pt-3 px-3 bg-white shadow-sm hover:shadow-md rounded-xl">
                    <div class="w-100 flex">
                        <div class="w-20" style="height: 60px">
                            <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                        </div>
                        <div class="w-60 px-2">
                            <h1 class="text-sm font-weight-bold line-height-small">Vegetarian Pasta Meal</h1>
                            <p class="text-xs line-height-small">it is a long established fact that a reader will be distracted</p>
                        </div>
                        <div class="w-20 text-center pt-3">
                            <h1 class="text-2xl font-weight-bold">$ 15</h1>
                        </div>
                    </div>
                </div>
                <div class="w-30 mx-2 py-1 pt-3 px-3 bg-white shadow-sm hover:shadow-md rounded-xl">
                    <div class="w-100 flex">
                        <div class="w-20" style="height: 60px">
                            <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                        </div>
                        <div class="w-60 px-2">
                            <h1 class="text-sm font-weight-bold line-height-small">Vegetarian Pasta Meal</h1>
                            <p class="text-xs line-height-small">it is a long established fact that a reader will be distracted</p>
                        </div>
                        <div class="w-20 text-center pt-3">
                            <h1 class="text-2xl font-weight-bold">$ 15</h1>
                        </div>
                    </div>
                </div>
            </div>



            <div class="w-100 flex mx-auto my-2">
                <div class="w-30 mx-2 py-1 pt-3 px-3 bg-white shadow-sm hover:shadow-md rounded-xl">
                    <div class="w-100 flex">
                        <div class="w-20" style="height: 60px">
                            <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                        </div>
                        <div class="w-60 px-2">
                            <h1 class="text-sm font-weight-bold line-height-small">Vegetarian Pasta Meal</h1>
                            <p class="text-xs line-height-small">it is a long established fact that a reader will be distracted</p>
                        </div>
                        <div class="w-20 text-center pt-3">
                            <h1 class="text-2xl font-weight-bold">$ 15</h1>
                        </div>
                    </div>
                </div>
                <div class="w-30 mx-2 py-1 pt-3 px-3 bg-white shadow-sm hover:shadow-md rounded-xl">
                    <div class="w-100 flex">
                        <div class="w-20" style="height: 60px">
                            <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                        </div>
                        <div class="w-60 px-2">
                            <h1 class="text-sm font-weight-bold line-height-small">Vegetarian Pasta Meal</h1>
                            <p class="text-xs line-height-small">it is a long established fact that a reader will be distracted</p>
                        </div>
                        <div class="w-20 text-center pt-3">
                            <h1 class="text-2xl font-weight-bold">$ 15</h1>
                        </div>
                    </div>
                </div>
                <div class="w-30 mx-2 py-1 pt-3 px-3 bg-white shadow-sm hover:shadow-md rounded-xl">
                    <div class="w-100 flex">
                        <div class="w-20" style="height: 60px">
                            <img class="clip-full" src="{{ asset('image/vege.jpg') }}">
                        </div>
                        <div class="w-60 px-2">
                            <h1 class="text-sm font-weight-bold line-height-small">Vegetarian Pasta Meal</h1>
                            <p class="text-xs line-height-small">it is a long established fact that a reader will be distracted</p>
                        </div>
                        <div class="w-20 text-center pt-3">
                            <h1 class="text-2xl font-weight-bold">$ 15</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="h-px-30"></div>
        <div class="h-px-30"></div>
    </div>
@endsection