<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate( [
            'name_of_product' => 'required',
            'description_of_product' => 'required',
            'price_of_product' => 'required',
            'image_of_product' => 'image|nullable|max:1999'
        ]);
        if ($request->hasFile('cover_image')){
            //get file with extension
            $filenameWithExt = $request->file('image_of_product')->getClientOriginalName();
            //get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get extension
            $extension = $request->file('image_of_product')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image_of_product')->storeAs('public/product_images', $fileNameToStore);

        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }

        $product = new Products;
        $product->name_of_product = $request->input('name_of_product');
        $product->description_of_product = $request->input('description_of_product');
        $product->price_of_product = $request->input('price_of_product');
        $product->image_of_product = $fileNameToStore;
        $product->user_id = auth()->user()->id;
        $product->save();

        return redirect('/menu')->with('success', 'Album Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.product_detail', ['product' => '$product']);
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
