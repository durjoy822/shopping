<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use Auth;


class AdminAuthController extends Controller
{
    public function newAdmin(Request $request){
//        dd($request->all());
        $request->validate(
            [
                'name'          => 'required',
                'email'         => 'required',
                'password'      => 'required|min:8|max:64',
                'confirm_pass'  => 'required|min:8|max:64',
            ],
            [
                'name.required'     =>'Please input your name',
                'email.required'    =>'You foget  your email',
                'password.required' =>'Password is required',
                'password.min'      =>'Minimum 8 digit is required!',
                'password.max'      =>'More then 64 digit are not allowed!',
                'confirm_pass.required'      =>'You intered worng password!',
            ]);
            $admin=new Admin();
            $admin->name        =$request->name;
            $admin->email       =$request->email;
            $admin->password=FacadesHash::make($request->password);
            if($request->confirm_pass==$request->password){

            }else{
                return redirect(route('admin.register'));
            }
            $admin->save();
            if (Auth::guard('admin')->login($admin)){
                Session::flash('success',' successfully Login');
                return redirect(route('admin.dashboard'));
            }else{
                Session::flash('warning',' successfully login faild');
                return back();
            }
    }
    public  function authCheck(Request $request){
//            dd($request->all());
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))){
            Session::flash('success','login succes');
            return redirect(route('admin.dashboard'));
        }else{
                Session::flash('warning','OPS! You provided wrong information');
                return back();
            }
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }
}
