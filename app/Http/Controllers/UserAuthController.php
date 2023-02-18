<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
//use function Symfony\Component\Finder\name;
use Auth;

class UserAuthController extends Controller
{
    public function store(Request $request){
//        dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        if ($user->id){
            Session::flash('success','User Register Successfull');
            Auth::login($user);
            return redirec()->route('home');
        }else{
            Session::flash('warning','User Login Faild');
            return back();
        }
    }

    public function login(Request $request){
//        dd($request->all());
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            Session::flash('success','login success');
            return redirect()->route('home');
        }else{
            return redirect()->back()->withInput()->withErrors(['email' => 'Invalid Credentials']);
        }
    }
    public function logout(){
        Auth::logout();
        Session::flash('success','User Logout Successfull');
        return redirect()->route('home');
    }

}
