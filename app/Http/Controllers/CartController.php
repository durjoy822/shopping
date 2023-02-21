<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function bag($id){
        if (Auth::check()){
            $cart= new Cart();
            $cart->user_id      = Auth::user()->id;
            $cart->product_id   =$id;
            $cart->price        =Product::findOrFail($id)->price;
            $cart->quantity     =1;
            $cart->total_price  = $cart->price * $cart->quantity;
            $cart->save();
            Session::flash('success','add to cart ');
            return redirect(route('shop'));
        }else{
            return redirect(route('user.login'));
        }
    }
    public function bagCart(Request $request ,$id){
        $cart= new Cart();
        $cart->user_id      = Auth::user()->id;
        $cart->product_id   =$id;
        $cart->price        =Product::findOrFail($id)->price;
        $cart->quantity     =$request->qty;
        $cart->total_price  = $cart->price * $cart->quantity;
        $cart->save();
        Session::flash('success','add to cart ');
        return redirect(route('shop'));
    }
    public function update(Request $request, $id){
        $cart=Cart::find($id);
        $cart->user_id      = Auth::user()->id;
        $cart->product_id   =$request->product_id;
        $cart->price        =Product::findOrFail($request->product_id)->price;
        $cart->quantity     =$request->qty;
        $cart->total_price  = $cart->price * $request->qty;
        $cart->save();
        Session::flash('success','update ');
        return redirect()->back();
    }

    public function bagDelete($id){
        $bagDel=Cart::find($id);
        $bagDel->delete();
        return back();
    }
}
