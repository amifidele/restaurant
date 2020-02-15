<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Products;
use App\Review;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function homepage(){
        return view('pages.home');
    }
    public function dashProducts(){
        return view('dashboard.products');
    }
    public function product_page(){
        $products = Products::orderBy('created_at', 'desc')->paginate('4');
        return view('pages.home')->with('products', $products);
    }
    public function gallery_page(){
        $images = Gallery::all();
        return view('gallery.home')->with('images', $images);
    }
    public function reviews_page(){
        $reviews = Review::all();
        return view('pages.home')->with('reviews', $reviews);
    }

}
