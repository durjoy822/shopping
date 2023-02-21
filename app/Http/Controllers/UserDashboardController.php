<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function userDashboard(){
        return view('home.user.user_dashboard',[
            'user'=>Auth::User(),
        ]);
    }
}
