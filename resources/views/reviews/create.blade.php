@extends('layouts.dashboard')
@section('content')
    <div class="w-80 mx-auto">
        <div class="w-60 mx-auto">
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