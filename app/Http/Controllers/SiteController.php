<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class SiteController extends Controller
{
    public function home(){

        return view("home");
    }
    public function category($id){
        $category=Category::findOrFail($id);
        $products=Product::where('category_id',$id)->get();
        //dd($category,$products);
        return view("category",compact('products','category'));
    }
    public function contact(){
        return view("contact");
    }


public function resizeAndSaveImage(Request $request)
{
    $image = $request->file('image');

    // Resmi aç
    $img = Image::make($image);

    // Yeni boyutları ayarla


    $img->crop(300, 200);
    //$img->resize(300, 200);

    // Yeniden boyutlandırılmış resmi farklı bir dosya adıyla kaydet
    $newFileName = 'resized_image.jpg';
    $img->save(storage_path ( $newFileName));

    return 'Resim başarıyla boyutlandırıldı ve kaydedildi!';
}

public function showForm()
{
    return view('admin.imageResize');
}

public function upload(Request $request)
{

    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Örnek: JPEG veya PNG, maksimum 2MB
    ]);


    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);

        return "Resim başarıyla yüklendi ve kaydedildi!";
    }

    return "Resim yüklenirken bir hata oluştu.";
}

}
