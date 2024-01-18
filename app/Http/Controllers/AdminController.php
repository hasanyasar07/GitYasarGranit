<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;




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
    //category lerden silinmiş olanlar varsa onların product larını liste dışı bırak
    $products = Product::whereHas('category')->with('category')->get();
    $categories=Category::get();
    return view('admin.product',compact('products','categories'));
}
public function productCreate(Request $request){
    $request->validate([
        'big_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example: JPEG or PNG, max 2MB
        'small_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example: JPEG or PNG, max 2MB
    ]);

    if ($request->hasFile('big_photo') && $request->hasFile('small_photo')) {
        $big_photo = $request->file('big_photo');
        $big_photoName = 'big' . time() . '.' . $big_photo->getClientOriginalExtension();
        $big_photo->move(public_path('uploads'), $big_photoName);

        $small_photo = $request->file('small_photo');
        $small_photoName = 'small' . time() . '.' . $small_photo->getClientOriginalExtension();
        $small_photo->move(public_path('uploads'), $small_photoName);

        $product=new Product();
        $product->category_id=$request->category_name;
        $product->name=$request->name;
        $product->big_photo_path=$big_photoName;
        $product->small_photo_path=$small_photoName;
        $product->save();
        return redirect()->back();
    }

    return "An error occurred while uploading images.";

}


public function productDelete($id){

    $product=Product::findOrFail($id);

    $small_photoPath = public_path('uploads') . '/' . $product->small_photo_path;

    if (File::exists($small_photoPath)) {
        File::delete($small_photoPath);
        // Silme işlemi başarılı olduysa burada başka bir şey yapabilirsiniz.
    } else {
        // Silme işlemi başarısız olduysa burada başka bir şey yapabilirsiniz.
    }
    $big_photoPath = public_path('uploads') . '/' . $product->big_photo_path;

    if (File::exists($big_photoPath)) {
        File::delete($big_photoPath);
        // Silme işlemi başarılı olduysa burada başka bir şey yapabilirsiniz.
    } else {
        // Silme işlemi başarısız olduysa burada başka bir şey yapabilirsiniz.
    }
    $product->delete();


    return redirect()->back();
}






// ***************   test Field ********************
    public function test()
    {
        $category=Category::withTrashed()->get();
        return view('admin.test',compact('category'));

    }



}
