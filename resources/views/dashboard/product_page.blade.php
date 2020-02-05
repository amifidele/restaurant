@extends('layouts.dashboard')
@section('content')
    <div class="w-100 bg-white-smoke py-5">
        <div class="w-80 mx-auto flex">
            <div class="w-30 mx-3">
                <a href="/products/create" class="no-underline">
                    <div class="w-100 rounded-full px-5 text-center pt-4 bg-white shadow-sm py-2 hover:shadow-md">
                        <p class="text-xl">Add New Product</p>
                    </div>
                </a>
            </div>
            <div class="w-30 mx-3">
                <a href="#" class="no-underline">
                    <div class="w-100 rounded-full px-5 bg-white pt-4 text-center shadow-sm py-2 hover:shadow-md">
                        <p class="text-xl">View All Products</p>
                    </div>
                </a>
            </div>
            <div class="w-30 mx-3">
                <a href="/menu" class="no-underline">
                <div class="w-100 rounded-full px-5 text-center pt-4 bg-white shadow-sm py-2 hover:shadow-md">
                    <p class="text-xl">View Menu</p>
                </div>
                </a>
            </div>
        </div>
    </div>
@endsection