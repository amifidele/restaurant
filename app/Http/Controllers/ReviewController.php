<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name_of_reviewer' => 'required',
            'company_title_of_reviewer' => 'required',
            'comment_of_reviewer' => 'required',
            'avatar' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('cover_image')){
            //get file with extension
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            //get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get extension
            $extension = $request->file('avatar')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('avatar')->storeAs('public/avatar', $fileNameToStore);

        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }

        $review = new Review;
        $review->name_of_reviewer = $request->input('name_of_reviewer');
        $review->company_title_of_reviewer = $request->input('company_title_of_reviewer');
        $review->comment_of_reviewer = $request->input('comment_of_reviewer');
        $review->avatar = $fileNameToStore;
        $review->user_id = auth()->user()->id;
        $review->save();

        return redirect('/reviews');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
