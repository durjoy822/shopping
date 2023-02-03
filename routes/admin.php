<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;





//Admin route start from here

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
