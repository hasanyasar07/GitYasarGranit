<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Countertop;
use App\Models\Slide;
use App\Models\Collection;
use App\Models\Referance;
use App\Models\About;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;




class AdminController extends Controller
{
    public function dashboardGet(){
        return view('admin.dashboard');
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



// ***************   Countertop Field ********************

public function countertopGet(){

    $countertops=Countertop::whereHas('product')->with('product')->get();
    $products=Product::get();

    return view('admin.countertop',compact('countertops','products'));

}


public function countertopCreate(Request $request){
    $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example: JPEG or PNG, max 2MB
    ]);

    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoName = 'cnt' . time() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('uploads'), $photoName);
        $countertop=new Countertop();
        $countertop->product_id=$request->product_name;
        $countertop->photo_path=$photoName;
        $countertop->save();
        return redirect()->back();

    }
}


public function countertopDelete($id){

    $countertop=Countertop::findOrFail($id);

    $photoPath = public_path('uploads') . '/' . $countertop->photo_path;

    if (File::exists($photoPath)) {
        File::delete($photoPath);
        // Silme işlemi başarılı olduysa burada başka bir şey yapabilirsiniz.
    } else {
        // Silme işlemi başarısız olduysa burada başka bir şey yapabilirsiniz.
    }

    $countertop->delete();

    return redirect()->back();
}


// ***************   Slide Field ********************

public function slideGet(){

    $slides=Slide::get();

    return view('admin.slide',compact('slides'));

}


public function slideCreate(Request $request){
    $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example: JPEG or PNG, max 2MB
    ]);

    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoName = 'sld' . time() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('uploads'), $photoName);
        $slide=new Slide();
        $slide->header=$request->header;
        $slide->photo_path=$photoName;
        $slide->save();
        return redirect()->back();

    }
}


public function slideDelete($id){

    $slide=Slide::findOrFail($id);

    $photoPath = public_path('uploads') . '/' . $slide->photo_path;

    if (File::exists($photoPath)) {
        File::delete($photoPath);
        // Silme işlemi başarılı olduysa burada başka bir şey yapabilirsiniz.
    } else {
        // Silme işlemi başarısız olduysa burada başka bir şey yapabilirsiniz.
    }

    $slide->delete();

    return redirect()->back();
}

// ***************   Favorite Field ********************

public function favoriteGet(){
    $products=Product::get();
    return view('admin.favorite',compact('products'));
}
public function favoriteUpdate(Request $request, $id)
{
    $product = Product::find($id);
    $product->is_favorite = $request->input('is_favorite');
    $product->save();

    return response()->json(['success' => true]);

}


// ***************   Countertop Field ********************

public function collectionGet(){

    $collections = Collection::with('category')->get();

    // İlişkili kategori ID'lerini içeren bir dizi
    $excludedCategoryIds = $collections->pluck('category_id')->toArray();

    // İlişkili olmayan kategorileri al
    $categories = Category::whereNotIn('id', $excludedCategoryIds)->get();


    return view('admin.collection',compact('collections','categories'));

}


public function collectionCreate(Request $request){
    $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example: JPEG or PNG, max 2MB
    ]);

    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoName = 'col' . time() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('uploads'), $photoName);
        $collection=new Collection();
        $collection->category_id=$request->category_name;
        $collection->photo_path=$photoName;
        $collection->save();
        return redirect()->back();

    }
}


public function collectionDelete($id){

    $collection=Collection::findOrFail($id);

    $photoPath = public_path('uploads') . '/' . $collection->photo_path;

    if (File::exists($photoPath)) {
        File::delete($photoPath);
        // Silme işlemi başarılı olduysa burada başka bir şey yapabilirsiniz.
    } else {
        // Silme işlemi başarısız olduysa burada başka bir şey yapabilirsiniz.
    }

    $collection->delete();

    return redirect()->back();
}

public function referanceGet(){
    $referances=Referance::get();
    return view('admin.referance',compact('referances'));
}

public function referanceCreate(Request $request){
    $referance=new Referance();
    $referance->company=$request->company;
    $referance->name=$request->name;
    $referance->save();
    return redirect()->back();

}

public function referanceDelete($id){
    $referance=Referance::findOrfail($id);
    $referance->delete();
    return redirect()->back();
}

public function aboutGet(){
    try {
        $about=About::findOrFail(1);
    } catch (\Throwable $th) {
        $about=new About();
    }
    return view('admin.about',compact('about'));
}
public function aboutUpdate(Request $request){

    if(About::get()){
        $about=About::findOrFail(1);
        $about->content=$request->content;
        $about->save();
    }else{

        $about=new About();
        $about->content=$request->content;
        $about->save();

    }
    return redirect()->back();
}

}
