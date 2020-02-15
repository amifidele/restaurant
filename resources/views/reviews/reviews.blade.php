@extends('layouts.dashboard')
@section('content')
    <div class="w-90 mx-auto">
        <div class="absolute w-30 py-2">
            <a href="/review-page" class="btn bg-red-lighter rounded-full text-white"><- Back</a>
        </div>
        <div class="w-70 pt-5 mx-auto text-center">
            <h1 class="line-height-small text-3xl">All Reviews Here</h1>
        </div>
        <div class="w-100 py-5">
            @if(count($reviews) > 0)
                <div class="grid-3 grid pt-3">
                    @foreach($reviews as $review)
                        <div class=" mx-3 my-3 bg-white rounded-xl px-3 shadow hover:shadow-md">
                            <div class="absolute -ml-10 -mt-5" style="width: 50px; height: 50px">
                                <img class="clip-full rounded-full border-solid border-red-lighter border-4" src="storage/avatar/{{ $review->avatar }}">
                            </div>
                            <div class="pt-4">
                                <p class="line-height-small pt-1">{{ $review->comment_of_reviewer }}</p>
                                <h1 class="text-sm font-weight-bold line-height-small">{{ $review->name_of_reviewer }}</h1>
                                <p class="text-sm line-height-small">{{ $review->company_title_of_reviewer }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
@endsection