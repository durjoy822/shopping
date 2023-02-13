<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
