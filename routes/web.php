<?php

use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\FrontAuthController;


############################ BACK ###################################
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\HomeController;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\SettingController;
use App\Http\Controllers\Back\AboutController;
use App\Http\Controllers\Back\ProductController;
use App\Http\Controllers\Back\SliderController;

Route::get('/',[HomepageController::class,'index'])->name('front.home');
Route::get('/about',[HomepageController::class,'about'])->name('front.about');
Route::get('/front/logout',[FrontAuthController::class,'logout']);
//Route::get('/front/login',[FrontAuthController::class,'index'])->name('front.login');


Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');


    //Route::redirect('/','yonetim/login');
    
        Route::get('/yonetim/login',[AuthController::class,'index'])->name('admin.login');
        Route::post('/yonetim/login',[AuthController::class,'login'])->name('admin.login.post');
    
    
        Route::get('/yonetim/home',[HomeController::class,'index'])->name('admin.home');

        Route::get('/yonetim/users',[UserController::class,'index'])->name('admin.user.index');
        Route::get('/yonetim/user/add',[UserController::class,'store'])->name('admin.user.store');
        Route::post('/yonetim/user/add',[UserController::class,'create'])->name('admin.user.create');
        Route::get('/yonetim/user/edit/{id}',[UserController::class,'edit'])->name('admin.user.edit');
        Route::post('/yonetim/user/update/{id}',[UserController::class,'update'])->name('admin.user.update');
        Route::get('/yonetim/user/delete/{id}',[UserController::class,'delete'])->name('admin.user.delete');


        Route::get('/yonetim/setting',[SettingController::class,'index'])->name('admin.setting.index');
        Route::post('/yonetim/setting/update/{id}',[SettingController::class,'update'])->name('admin.setting.update');


        Route::get('/yonetim/about',[AboutController::class,'index'])->name('admin.about.index');
        Route::post('/yonetim/about/update/{id}',[AboutController::class,'update'])->name('admin.about.update');


        Route::get('/yonetim/products',[ProductController::class,'index'])->name('admin.product.index');
        Route::get('/yonetim/product/add',[ProductController::class,'store'])->name('admin.product.store');
        Route::post('/yonetim/product/add',[ProductController::class,'create'])->name('admin.product.create');
        Route::get('/yonetim/product/edit/{id}',[ProductController::class,'edit'])->name('admin.product.edit');
        Route::post('/yonetim/product/update/{id}',[ProductController::class,'update'])->name('admin.product.update');
        Route::get('/yonetim/product/delete/{id}',[ProductController::class,'delete'])->name('admin.product.delete');


        Route::get('/yonetim/slider',[SliderController::class,'index'])->name('admin.slider.index');
        Route::get('/yonetim/slider/add',[SliderController::class,'store'])->name('admin.slider.store');
        Route::post('/yonetim/slider/add',[SliderController::class,'create'])->name('admin.slider.create');
        Route::get('/yonetim/slider/edit/{id}',[SliderController::class,'edit'])->name('admin.slider.edit');
        Route::post('/yonetim/slider/update/{id}',[SliderController::class,'update'])->name('admin.slider.update');
        Route::get('/yonetim/slider/delete/{id}',[SliderController::class,'delete'])->name('admin.slider.delete');
   
    
    



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
