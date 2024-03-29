<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.category.index',compact('categories'));
    }
    public function create()
    {
        $categories = Category::where('parent_id',null)->get();
        return view('admin.category.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);
            $category = new Category();
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            if ($request->logo){
                $category->logo = $this->saveFile($request);
            }
            $category->save();
            if ($category->id){
                Session::flash('success','store successfully');
                return redirect(route('admin.category.index'));

            }else{
                Session::flash('warning','store faild');
                return redirect()->route('admin.category.index');
            }
        }

        public function saveFile($request){
            $file = $request->file('logo');
            $fileName = rand().'.'.$file->getClientOriginalExtension();
            $dir = 'adminAsset/category/img/';
            $imgUrl = $dir.$fileName;
            $file->move($dir, $fileName);
            return $imgUrl;
        }

    public function edit($id=null)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('parent_id',null)->get();
        return view('admin.category.edit',compact('id','category','categories'));
    }


    public function update(Request $request)
    {
//        dd($request->all());
            $category = Category::findOrFail($request->id);
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            if ($request->file('logo')){
                if ($category->logo !=null){
                    unlink($category->logo);
                }
                $category->logo = $this->saveFile($request);
            }
            $category->save();
            if ($category->id){
                Session::flash('success','Updated successfully');
                return redirect(route('admin.category.index'));

            }else{
                Session::flash('warning','Updated faild');
                return redirect()->route('admin.category.edit');
            }

        }
    public function delete($id=null)
    {
           $category=Category::findOrFail($id);
           if ($category->logo !=null){
               unlink($category->logo);
           }
           $category->delete();
        if ($category->id){
            Session::flash('success','Delete successfully');
            return redirect(route('admin.category.index'));

        }else{
            Session::flash('warning','Delete faild');
            return back();
        }

    }
}
