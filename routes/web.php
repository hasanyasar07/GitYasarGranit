<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


Auth::routes(['password.confirm'=>false,'password.email'=>false,'password.request'=>false,
'password.reset'=>false,'password.update'=>false,'register'=>false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('house');
//Route::get('/home', [AdminController::class, 'categoryGet'])->name('house');




Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('category/{id}',[SiteController::class,'category'])->name('category');
Route::get('contact',[SiteController::class,'contact'])->name('contact');
Route::get('about',[SiteController::class,'about'])->name('about');
Route::get('countertop/{id}',[SiteController::class,'countertop'])->name('countertop');
Route::post('createUser',[SiteController::class,'createUser'])->name('createUser');

//Route::get('login', [SiteController::class, 'showLoginForm'])->name('admin.login');
//Route::post('login', [SiteController::class, 'login'])->name('admin.login.submit');





Route::controller(AdminController::class)->middleware('auth')->group(function(){
    Route::get('admin/dashboard','dashboardGet')->name('dashboardGet');
    Route::get('admin/category','categoryGet')->name('categoryGet');
    Route::post('admin/category/create','categoryCreate')->name('categoryCreate');
    Route::post('admin/category/update','categoryUpdate')->name('categoryUpdate');
    Route::get('admin/category/delete/{id}','categoryDelete')->name('categoryDelete');
    Route::get('admin/category/restore/{id}','categoryRestore')->name('categoryRestore');

    Route::get('admin/product','productGet')->name('productGet');
    Route::post('admin/product/create','productCreate')->name('productCreate');
    Route::get('admin/product/delete/{id}','productDelete')->name('productDelete');

    Route::get('admin/countertop','countertopGet')->name('countertopGet');
    Route::post('admin/countertop/create','countertopCreate')->name('countertopCreate');
    Route::get('admin/countertop/delete/{id}','countertopDelete')->name('countertopDelete');

    Route::get('admin/slide','slideGet')->name('slideGet');
    Route::post('admin/slide/create','slideCreate')->name('slideCreate');
    Route::get('admin/slide/delete/{id}','slideDelete')->name('slideDelete');

    Route::get('admin/favorite','favoriteGet')->name('favoriteGet');
    Route::put('admin/favorite/update/{id}','favoriteUpdate')->name('favoriteUpdate');

    Route::get('admin/collection','collectionGet')->name('collectionGet');
    Route::post('admin/collection/create','collectionCreate')->name('collectionCreate');
    Route::get('admin/collection/delete/{id}','collectionDelete')->name('collectionDelete');

    Route::get('admin/referance','referanceGet')->name('referanceGet');
    Route::post('admin/referance/create','referanceCreate')->name('referanceCreate');
    Route::get('admin/referance/delete/{id}','referanceDelete')->name('referanceDelete');

    Route::get('admin/about','aboutGet')->name('aboutGet');
    Route::post('admin/about/update','aboutUpdate')->name('aboutUpdate');

});




