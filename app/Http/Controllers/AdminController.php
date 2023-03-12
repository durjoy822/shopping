<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\Concerns\Has;


class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function registerForm(){
        return view('admin.register');
    }
    public function loginForm(){
        return view('admin.loginForm');
    }
    public function forgetPassword(){
        return view('admin.forgetPassword');
    }

    public function forgetPassSubmit(Request $request){
        $request->validate([
//            'email'=>'email|exists:admins,email '
           'email' => 'required|email|exists:admins,email'
        ]);
        $token=str::random(65);
        DB::table('password_resets')->insert([
            'email'     =>$request->email,
            'token'     =>$token,
            'created_at'=>Carbon::now(),
        ]);
        Mail::send('admin.mailforget',['token'=>$token],function ($message)use($request){
            $message->to($request->email);
            $message->subject('Reset password');
        });
        return back()->with('success','we have emailed your password reset link ');
    }

    public function ShowResetPasswordForm($token){
        return view('admin.resetpass',['token'=>$token]);
    }
    public function resetPassword(Request $request){
//        dd($request->all());
        $request->validate([
            'email'     =>'required|email|exists:admins,email',
            'password'  =>'required|min:6|confirmed',
            'password_confirmation'=>'required',
        ]);
        $checkToken=DB::table('password_resets')
            ->where([
                'email'     =>$request->email,
                'token'  =>$request->token,
            ])->first();
        if (!$checkToken){
            return back()->with('success','Reset link has been expaired!');
        }else{
            $admin=Admin::where('email',$request->email)->update([
                'password'=>Hash::make($request->password),
            ]);
            DB::table('password_resets')->where('email',$request->email)->delete();
            return  redirect(route('admin.login'))->with('success','Your password has been changed !');

        }


    }




}
