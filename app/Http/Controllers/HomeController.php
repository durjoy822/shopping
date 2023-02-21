<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

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
            'product'=>Product::find($id),
        ]);
    }
    public function product($id){
        return view('home.product',[
            'product'=>Product::find($id),
        ]);
    }
    public function cart(){
        $product=Cart::where('user_id',Auth::id())->get();
        return view('home.card',[
            'cartItem'=>$product,
            ]);
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


}
