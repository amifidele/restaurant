@extends('layouts.dashboard')
@section('content')
    <div class="w-80 mx-auto">
        <div class="absolute w-30 pt-2">
            <a href="/reviews" class="btn bg-red-light rounded-full text-white"><- Back</a>
        </div>
        <div class="w-70 pt-5 mx-auto text-center">
            <h1 class="line-height-small text-3xl">Add Reviews Here</h1>
        </div>
        <div class="w-60 mx-auto pt-4">
            <form action="/reviews" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Name Of Reviewer</label>
                    <input class="form-input" type="text" name="name_of_reviewer">
                </div>
                <div>
                    <label>Company Title</label>
                    <input class="form-input" type="text" name="company_title_of_reviewer">
                </div>
                <div>
                    <label>Comment</label>
                    <textarea class="form-input" type="text" name="comment_of_reviewer"></textarea>
                </div>
                <div>
                    <label>Image / Avatar</label>
                    <input class="form-input" type="file" name="avatar">
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-success text-center w-30" type="submit">Add Review</button>
                </div>
            </form>
        </div>
    </div>
@endsection