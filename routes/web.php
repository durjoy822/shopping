<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function (){
//    return view('home');
//});
Route::get('/',[HomeController::class,'home'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/register', [AdminController::class, 'registerForm'])->name('admin.register');
    Route::post('/new', [AdminAuthController::class, 'newAdmin'])->name('admin.new');
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/auth', [AdminAuthController::class, 'authCheck'])->name('admin.auth');

    Route::middleware(admin::class)->group(function (){
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    });
});




