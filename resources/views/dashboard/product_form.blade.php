@extends('layouts.dashboard')
@section('content')
    <div class="w-80 mx-auto">
        <div class="absolute w-30 py-2">
            <a href="/products" class="btn bg-red-light rounded-full text-white"><- Back</a>
        </div>
        <div class="w-70 pt-5 mx-auto text-center">
            <h1 class="line-height-small text-2xl">Add Foods & Beverages on Menu</h1>
        </div>
        <div class="w-60 mx-auto pt-4 pb-5">
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
                    <label>Product Category</label>
                    <select class="form-control" name="category_id">
                        <option>--select--</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label>Product Image</label>
                    <input class="form-input" type="file" name="image_of_product">
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-success text-center w-30" type="submit">Add Product</button>
                </div>
            </form>
        </div>
    </div>
@endsection
