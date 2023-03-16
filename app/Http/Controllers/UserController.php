<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function userLogin(){
        return view('home.user.userlogin');
    }
    public function userRegister(){
        return view('home.user.user_reg');
    }
    public function userForgotPass(){
        return view('home.email.forgot_password');
    }

    public function resetPasslinkSent(Request $request){
//        dd($request->all());
        $request->validate([
            'email'=>'required|email|exists:users'
        ]);
        $token=str::random(64);
        DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>carbon::now(),
        ]);
        Mail::send('home.email.reset_pass',['token'=>$token],function ($message) use($request){
            $message->to($request->email);
            $message->subject('Reset password');
        });
        return back()->with('success','We have emailed your password reset link');
    }
    public function userResetPassForm($token){
        return view('home.email.reset_password_form',['token'=>$token]);
    }
    public function resetPassSubmit(Request $request){
//        dd($request->all());
        $request->validate([
            'email'=>'required|email|exists:users',
            'password'=>'required|min:6',
            'password_confirmation'=>'required',
        ]);
        $token=DB::table('password_resets')->where([
           'email'=>$request->email,
           'token'=>$request->token,
        ])->first();
        if (!$token){
            return back()->with('warning','Reset link has expair!');
        }else{
            $user=User::where('email',$request->email)->update([
                'password'=>Hash::make($request->password),
            ]);
        }
        DB::table('password_resets')->where('email',$request->email)->delete();
        return redirect(route('login'))->with('success','Your password updated succesfully!');

    }




}
