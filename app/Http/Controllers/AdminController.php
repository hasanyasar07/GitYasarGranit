<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;




class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.welcome');
    }
// ***************   Category Field ********************

    public function categoryGet(){
        $categories=Category::withTrashed()->get();
        return view('admin.category',compact('categories'));
    }
    public function categoryCreate(Request $request){
        $category=new Category();
        $category->name=$request->name;
        $category->save();
        return redirect()->back();
    }

    public function categoryUpdate(Request $request){
        $category=Category::findOrFail($request->id);
        $category->name=$request->name;
        $category->save();

        return redirect()->back();
    }

    public function categoryDelete($id){
        $category=Category::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function categoryRestore($id){
        $category=Category::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }


// ***************   product Field ********************

public function productGet(){
    $products=Product::get();
    $categories=Category::get();
    return view('admin.product',compact('products','categories'));
}
public function productCreate(Request $request){
    $request->validate([
        'big_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Örnek: JPEG veya PNG, maksimum 2MB
    ]);
    $request->validate([
        'small_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Örnek: JPEG veya PNG, maksimum 2MB
    ]);


    if ($request->hasFile('big_photo') && $request->hasFile('small_photo')) {
        $big_photo = $request->file('big_photo');
        $big=Image::make($big_photo);
        $big->resize(1200,800);
        $big_photoName = 'big'.time() . '.' . $big_photo->getClientOriginalExtension();
        $big->save(storage_path($big_photoName));


        $small_photo = $request->file('small_photo');
        $small=Image::make($small_photo);
        $small->crop(450,300);
        $small_photoName = 'small'.time() . '.' . $small_photo->getClientOriginalExtension();
        $small->save(storage_path($small_photoName));

        return "Resim başarıyla yüklendi ve kaydedildi!";
    }

    return "Resim yüklenirken bir hata oluştu.";

}

public function productUpdate(Request $request){


    return redirect()->back();
}

public function productDelete($id){

    return redirect()->back();
}

public function productRestore($id){

    return redirect()->back();
}




// ***************   test Field ********************
    public function test()
    {
        $category=Category::withTrashed()->get();
        return view('admin.test',compact('category'));

    }



}
