<?php

namespace App\Http\Controllers;

use App\Models\ProductDetails;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function proDetailsIndex(){
        return view('admin.product_details.add');
    }
    public function proDetailsStore(Request $request){
        $proDetails=new ProductDetails();
        $proDetails=Product::find('id');
        $proDetails->quantity=$request->quantity;
        $proDetails->color=$request->color;
        $proDetails->size=$request->size;
        $proDetails->save();
    }

}
