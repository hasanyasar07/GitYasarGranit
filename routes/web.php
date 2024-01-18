<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('categori',[SiteController::class,'categori'])->name('categori');
Route::get('contact',[SiteController::class,'contact'])->name('contact');

Route::get('index',function(){return View('admin.adminLayout');});



Route::get('/upload',[SiteController::class,'showForm'])->name('upload.form');
Route::post('/upload',[SiteController::class,'upload'])->name('upload');

Route::controller(AdminController::class)->group(function(){
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



    Route::get('test','test')->name('test');
});
