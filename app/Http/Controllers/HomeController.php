<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.index');
    }
    public function shop(){
        return view('home.shop',[
            'products'=>Product::all(),
            'category'=>Category::where('parent_id',null)->get(),
            'subCat'=>Category::whereNotNull('parent_id')->get(),
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
    public function card(){
        return view('home.card');
    }
    public function userLogin(){
        return view('home.user.userlogin');
    }
    public function userRegister(){
        return view('home.user.user_reg');
    }
    public function userForgotPass(){
        return view('home.user.forgot_password');
    }
    public function skill(){
        return view('home.user.forgot_password');
    }

}
