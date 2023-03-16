<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\UserController;

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
Route::get('/shop',[HomeController::class, 'shop'])->name('shop');
Route::get('/product_details/{id}',[HomeController::class, 'ProductDetails'])->name('all.details');
Route::get('/product/{id}',[HomeController::class, 'product'])->name('product');




Route::get('/userlogin',[UserController::class, 'userLogin'])->name('login');
Route::post('/login',[UserAuthController::class, 'login'])->name('user.login');
Route::get('/user_reg',[UserController::class, 'userRegister'])->name('register');
Route::post('/register',[UserAuthController::class,'store'])->name('user.register');
Route::get('/logout',[UserAuthController::class,'logout'])->name('user.logout');
Route::get('/user_dashboard',[UserDashboardController::class,'userDashboard'])->name('user.dashboard');


Route::get('/user_forgot_pass',[UserController::class, 'userForgotPass'])->name('user.forgot.pass');
Route::post('/forgot_pass_submit',[UserController::class,'resetPasslinkSent'])->name('reset.pass.link.submit');
Route::get('/reset_pass_form/{token}',[UserController::class,'userResetPassForm'])->name('reset.pass.form');
Route::post('/reset_pass_submit',[UserController::class,'resetPassSubmit'])->name('reset.pass.submit');

Route::middleware(['auth'])->group(function () {

    Route::get('/cart',[HomeController::class, 'cart'])->name('cart');
    Route::get('/bag/{id}',[CartController::class,'bag'])->name('bag');
    Route::post('/bag_cart/{id}',[CartController::class,'bagCart'])->name('bag.cart');
    Route::post('/bag_cart/update/{id}',[CartController::class,'update'])->name('bag.update');
    Route::get('/bag_delete/{id}',[CartController::class,'bagDelete'])->name('bag.delete');

    Route::get('/wishlist',[WishlistController::class, 'wishList'])->name('wishlist');
    Route::get('/wishlist_add/{id}',[WishlistController::class, 'wishListAdd'])->name('wishlist.add');
    Route::post('/wishlist_delete',[WishlistController::class, 'wishListDelete'])->name('wishlist.delete');

    Route::post('/shipping_address',[CheckoutController::class, 'shippingAddress'])->name('shipping.add');

    Route::get('payment_method',[HomeController::class,'paymentMethod'])->name('payment.method');
    Route::get('/checkout',[CheckoutController::class,'CheckOut'])->name('check.out');
    Route::post('/order',[CheckoutController::class,'order'])->name('order');


});


//Admin Route here
Route::group(['prefix' => 'admin'], function () {
    Route::get('/register', [AdminController::class, 'registerForm'])->name('admin.register');
    Route::post('/new', [AdminAuthController::class, 'newAdmin'])->name('admin.new');
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/auth', [AdminAuthController::class, 'authCheck'])->name('admin.auth');

    Route::get('/forget_password', [AdminController::class, 'forgetPassword'])->name('login.forget.password');
    Route::post('/forget/pass/submit', [AdminController::class, 'forgetPassSubmit'])->name('forget.password.submit');
    Route::get('/reset/pasword/{token}', [AdminController::class, 'ShowResetPasswordForm'])->name('reset.password.get');
    Route::post('/reset/pasword', [AdminController::class, 'resetPasswordForm'])->name('reset.password.post');
    Route::post('/password/update', [AdminController::class, 'resetPassword'])->name('reset.password');


    Route::middleware(admin::class)->group(function (){
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

        Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/category/update', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');

        Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/product/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/product/details/{id}',[ProductController::class,'details'])->name('admin.product.details');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/product/update', [ProductController::class, 'update'])->name('admin.product.update');
        Route::post('/product/delete', [ProductController::class, 'delete'])->name('admin.product.delete');

        Route::get('/product/subcategory/{id}', [ProductController::class, 'findSubcat']);
        Route::get('/product/edit/subcategory/{id}', [ProductController::class, 'findSubcat']);

        Route::get('/product/details', [ProductDetailsController::class, 'proDetailsIndex'])->name('admin.product.details');
        Route::post('/product/details/store', [ProductDetailsController::class, 'proDetailsStore'])->name('admin.pro.details.store');


    });
});







