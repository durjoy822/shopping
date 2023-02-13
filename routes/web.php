<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


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
    Route::get('/forget_password', [AdminController::class, 'forgetPassword'])->name('login.forget.password');

    Route::middleware(admin::class)->group(function (){
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

        Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');

        Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/product/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/product/details/{id}',[ProductController::class,'details'])->name('admin.product.details');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::post('/product/delete', [ProductController::class, 'delete'])->name('admin.product.delete');

    });
});







