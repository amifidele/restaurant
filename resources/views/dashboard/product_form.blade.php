@extends('layouts.dashboard')
@section('content')
    <div class="w-80 mx-auto">
        <div class="w-60 mx-auto ">
            <form class="" action="/products" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Product Name</label>
                    <input class="form-input" type="text" name="name_of_product">
                </div>
                <div>
                    <label>Product Description</label>
                    <input class="form-input" type="text" name="description_of_product">
                </div>
                <div>
                    <label>Product Price</label>
                    <input class="form-input" type="text" name="price_of_product">
                </div>
                <div>
                    <label>Product Image</label>
                    <input class="form-input" type="file" name="image_of_product">
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-success text-center w-30">Add Product</button>
                </div>
            </form>
        </div>
    </div>
@endsection
