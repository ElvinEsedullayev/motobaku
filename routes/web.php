<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\HomeController;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\SettingController;
use App\Http\Controllers\Back\AboutController;



Route::get('/', function () {
    return view('welcome');
});




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
        Route::post('/about/update',[AboutController::class,'update'])->name('admin.about.update');
    });
    
    
});