<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use App\Models\About;
use App\Models\Countertop;
use App\Models\Collection;
use App\Models\Referance;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class SiteController extends Controller
{
    public function home(){
        $slides=Slide::get();
        $favorites=Product::where('is_favorite',true)->get();
        $collections=Collection::whereHas('category')->with('category')->get();
        $referances=Referance::get();

        return view("home",compact('slides','favorites','collections','referances'));
    }

    public function createUser(Request $data)    {

        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user=new User();
        $user->name=$data->name;
        $user->email=$data->email;
        $user->password=Hash::make($data->password);
        $user->save();
        return view("auth.login");

    }
    public function category($id){
        $category=Category::findOrFail($id);
        $products=Product::where('category_id',$id)->get();
        return view("category",compact('products','category'));
    }

    public function countertop($id){
        $product=Product::findOrFail($id);
        try {
            $countertops=Countertop::where('product_id',$id)->get();
            return view("countertop",compact('product','countertops'));
        } catch (\Throwable $th) {
            $countertops=new Countertop();
            return view("countertop",compact('product','countertops'));
        }


    }

    public function contact(){
        return view("contact");
    }



    public function about(){
        if(About::get()){
            $about=About::findOrFail(1);
            return view('about',compact('about'));
        }else{
            $about=new About();
        return view('about',compact('about'));

        }
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Giriş doğrulama işlemleri burada yapılacaktır.
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Başarılı giriş
            return redirect()->intended('/admin/dashboard');
        }

        // Başarısız giriş
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Giriş bilgileri hatalı']);
    }

}
