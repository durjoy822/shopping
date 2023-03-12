<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userLogin(){
        return view('home.user.userlogin');
    }
    public function userRegister(){
        return view('home.user.user_reg');
    }
    public function userForgotPass(){
        return view('home.user.forgot_password');
    }
}
