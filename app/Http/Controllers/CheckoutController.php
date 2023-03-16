<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function CheckOut()
    {
        $shippings = Shipping::where('user_id', Auth::id())->get();
        return view('home.checkout', compact('shippings'));
    }

    public function shippingAddress(Request $request)
    {
        $shipping = new Shipping();
        $shipping->user_id = Auth::id();
        $shipping->name = $request->name;
        $shipping->address = $request->address;
        $shipping->city = $request->city;
        $shipping->state = $request->state;
        $shipping->postal_code = $request->zip;
        $shipping->country = $request->country;
        $shipping->phone = $request->phone;
        $shipping->email = $request->email;
        $shipping->save();
        return back();
    }
    public function order(Request $request)
    {
//        dd($request->all());

        if($request->cashondevelvery){
            $payment_id=0;
        }else{


        $payment = new Payment();
        $payment->payment_method = $request->cash_on_delevery;
        $payment->transaction_id = "70QACT4HZ/none";
        $payment->amount = Cart::where('user_id', Auth::id())->sum('total_price') + 50.0;
        $payment->save();
        $payment_id=$payment->id;

    }
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->shipping_id = $request->shipping_id;
        $order->payment_id = $payment_id;
        $order->total_price = Cart::where('user_id', Auth::id())->sum('total_price') + 50.0;
        $order->status = 'pending';
        $order->save();

        $carts = Cart::where('user_id',Auth::id())->get();
        foreach($carts as $cart){
            $details = new Order_details();
            $details->order_id = $order->id;
            $details->product_id = $cart->product_id;
            $details->price = $cart->price;
            $details->quantity = $cart->quantity;
            $details->total_price = $cart->total_price;
            $details->save();
            $product = Product::findOrfail($cart->product_id);
            $product->quantity = $product->quantity - $cart->quantity;
            $product->save();
            $cart->delete();
        }
        return redirect()->route('home');
    }
}
