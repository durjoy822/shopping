<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function CheckOut(){
        return view('home.checkout');
    }

    public function shippingAddress(Request $request){
        dd($request->all());
    }
}
