@extends('layouts.dashboard')
@section('content')
    <div class="w-80 mx-auto">
        <div class="absolute w-30 pt-2">
            <a href="/gallery" class="btn bg-red-light rounded-full text-white"><- Back</a>
        </div>
        <div class="w-70 pt-5 mx-auto text-center">
            <h1 class="line-height-small text-3xl">Add Images Here</h1>
        </div>
        <div class="w-60 mx-auto pt-4 pb-5">
            <form action="/gallery" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Image</label>
                    <input class="form-input" type="file" name="image">
                </div>
                <div>
                    <label>Caption</label>
                    <textarea class="form-input" type="text" name="caption"></textarea>
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-success text-center w-30" type="submit">Upload Image</button>
                </div>
            </form>
        </div>
    </div>
@endsection