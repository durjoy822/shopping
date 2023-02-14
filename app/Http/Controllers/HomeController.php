<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.index');
    }
    public function shop(){
        return view('home.shop',[
            'products'=>Product::all(),
        ]);
    }
    public function ProductDetails($id){
        return view('home.shop',[
            'products'=>Product::find($id),
        ]);
    }
    public function product(){
        return view('home.product');
    }

    public function compare(){
        return view('home.compare');
    }
    public function card(){
        return view('home.card');
    }
}
