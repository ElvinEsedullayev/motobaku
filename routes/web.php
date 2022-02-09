<?php

use App\Http\Controllers\Front\HomepageController;


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



Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');

Route::group(['prefix'=>'yonetim'],function(){
    Route::redirect('/','yonetim/login');
    Route::group(['middleware'=>'girisOlmuyubsa'],function(){
        Route::get('/login',[AuthController::class,'index'])->name('admin.login');
        Route::post('/login',[AuthController::class,'login'])->name('admin.login.post');
    });
    Route::group(['middleware'=>'girisOlubsa'],function(){
        Route::get('/home',[HomeController::class,'index'])->name('admin.home');

        Route::get('/users',[UserController::class,'index'])->name('admin.user.index');
        Route::get('/user/add',[UserController::class,'store'])->name('admin.user.store');
        Route::post('/user/add',[UserController::class,'create'])->name('admin.user.create');
        Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('admin.user.edit');
        Route::post('/user/update/{id}',[UserController::class,'update'])->name('admin.user.update');
        Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('admin.user.delete');


        Route::get('/setting',[SettingController::class,'index'])->name('admin.setting.index');
        Route::post('/setting/update/{id}',[SettingController::class,'update'])->name('admin.setting.update');


        Route::get('/about',[AboutController::class,'index'])->name('admin.about.index');
        Route::post('/about/update/{id}',[AboutController::class,'update'])->name('admin.about.update');


        Route::get('/products',[ProductController::class,'index'])->name('admin.product.index');
        Route::get('/product/add',[ProductController::class,'store'])->name('admin.product.store');
        Route::post('/product/add',[ProductController::class,'create'])->name('admin.product.create');
        Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('admin.product.edit');
        Route::post('/product/update/{id}',[ProductController::class,'update'])->name('admin.product.update');
        Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('admin.product.delete');


        Route::get('/slider',[SliderController::class,'index'])->name('admin.slider.index');
        Route::get('/slider/add',[SliderController::class,'store'])->name('admin.slider.store');
        Route::post('/slider/add',[SliderController::class,'create'])->name('admin.slider.create');
        Route::get('/slider/edit/{id}',[SliderController::class,'edit'])->name('admin.slider.edit');
        Route::post('/slider/update/{id}',[SliderController::class,'update'])->name('admin.slider.update');
        Route::get('/slider/delete/{id}',[SliderController::class,'delete'])->name('admin.slider.delete');
    });
    
    
});