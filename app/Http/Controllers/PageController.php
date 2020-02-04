<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        return view('pages.home');
    }
    public function dashProducts(){
        return view('dashboard.products');
    }
    public function product_form(){
        return view('dashboard.product_form');
    }
}
