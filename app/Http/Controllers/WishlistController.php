<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function wishList(){
        $wishlist=Wishlist::where('user_id',Auth::user()->id)->get();
        return view('home.wishlist',[
            'wishlists'=>$wishlist,
        ]);
    }
    public function wishListAdd($id){
//        dd($id);
        if(Auth::check()){
            $wishlist= new wishlist();
            $wishlist->user_id=Auth::user()->id;
            $wishlist->product_id=$id;
            $wishlist->name=Product::find($id)->name;
            $wishlist->price=Product::find($id)->price;
            $wishlist->save();
            if ($wishlist->id){
                Session::flash('success',' Product add wishlist');
                return back();
            }else{
                return redirect(route('user.login'));
            }
        }
    }
    public function wishListDelete(Request $request)
    {
        $wishlist = Wishlist::find($request->id);
        $wishlist->delete();
        if ($wishlist->id) {
            Session::flash('success', 'Wishlist item removed ');
            return back();
        }
    }
}
