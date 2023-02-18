<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();
        $products = Product::latest()->paginate(20);
        return view('admin.product.index', compact('products', 'categories'));
    }
    public function create()
    {
        $cateories=Category::where('parent_id')->get();
        $subcats = Category::whereNotNull('parent_id')->get();
        return view('admin.product.add',compact('cateories','subcats'));
    }
    public function store(Request $request)
    {
//        dd($request->all());
        $validator = Validator::make($request->all(), [
            'old_price' => 'required',
            'price' => 'required',
            'tag' => 'required',
            'category' => 'required|integer',
            'sku' => 'required',
            'quantity' => 'required|integer',
            'name' => 'required',
            'details' => 'required',
            'image_one' => 'required|file',
            'image_two' => 'nullable|file',
            'image_three' => 'nullable|file',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $product = new Product();
            $product->old_price = $request->old_price;
            $product->price = $request->price;
            $product->status = $request->status;
            $product->tag = $request->tag;
            $product->category = $request->category;
            $product->sku = $request->sku;
            $product->quantity = $request->quantity;
            $product->name = $request->name;
            $product->details = $request->details;
            $product->image_one =  $this->saveFile($request, 'image_one');
            $product->image_two =  $this->saveFile($request, 'image_two');
            $product->image_three =  $this->saveFile($request, 'image_three');
            $product->save();
            return redirect()->route('admin.product.index');
        }
    }
    public function saveFile($request, $fieldName){
        $file = $request->file($fieldName);
        $fileName = rand().'.'.$file->getClientOriginalExtension();
        $dir = 'adminAsset/product/productImg/';
        $imgUrl = $dir.$fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }
    public function details($id)
    {
        $product = Product::findOrFail($id );
        return view('admin.product.details',compact('product'));
    }
    public function edit($id)
    {
        $category=Category::where('parent_id',null)->get();
        $subcat = Category::whereNotNull('parent_id')->get();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact( 'product','category','subcat'));
    }
    public function update(Request $request, $id = null)
    {
        $validator = Validator::make($request->all(), [
            'old_price' => 'required',
            'price' => 'required',
            'tag' => 'required',
            'category' => 'required|integer',
            'sku' => 'required',
            'quantity' => 'required|integer',
            'name' => 'required',
            'details' => 'required',
            'image_one' => 'nullable|file',
            'image_two' => 'nullable|file',
            'image_three' => 'nullable|file',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $product = Product::findOrFail($id);
            $product->old_price = $request->old_price;
            $product->price = $request->price;
            $product->status = $request->status;
            $product->tag = $request->tag;
            $product->category = $request->category;
            $product->sku = $request->sku;
            $product->quantity = $request->quantity;
            $product->name = $request->name;
            $product->details = $request->details;
            if ($request->image_one) {
                $product->image_one =  $this->saveFile($request, 'image_one');
            }
            if ($request->image_two) {
                $product->image_two =  $this->saveFile($request, 'image_two');
            }
            if ($request->image_three) {
                $product->image_three =  $this->saveFile($request, 'image_three');
            }
            $product->save();
            return redirect()->route('admin.product.index');
        }
    }
    public function delete(Request $request)
    {
//        dd($request->all());
        $product=Product::find($request->id);
            if ($product->image_one) {
                if (file_exists($product->image_one)){
                    unlink($product->image_one);
                }
            }
            if ($product->image_two){
                if (file_exists($product->image_two)){
                    unlink($product->image_two);
                }
            }
            if ($product->image_three){
                if (file_exists($product->image_three)){
                    unlink($product->image_three);
                }
            }
        $product->delete();
        return redirect()->route('admin.product.index');
    }
    public function findSubcat($id = null)
    {
        echo json_encode(Category::where('parent_id',$id)->get());
    }
}

