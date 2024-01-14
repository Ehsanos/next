<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Statics;
use App\Models\Themes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $slider=Slider::all();
//        return view('dashboard');
        $slider = Slider::where('type', '=', 'main')->get();

        $settings = Setting::first();
        $catigories = Category::where('is_active', true)->latest()->limit(10)->get();
        $prodcuts = Product::where('is_active', true)->latest()->limit(50)->get();
        $statics = Statics::all();
        $news = Post::latest()->limit(6)->get();
        $style=Themes::where('key','main')->first();

//        dd($slider);
        return view('pages.index', compact('slider', 'settings', 'prodcuts', 'catigories', 'statics', 'news','style'));
    }

    public function change_lang($lang)
    {
        if (in_array($lang, ['ar', 'es', 'en', 'du', 'tr'])) {
            session()->forget('lang');
            session()->put('lang', $lang);
        }else{
            session()->forget('lang');
            session()->put('lang', 'en');
        }

        return back();
    }


    public function about()
    {
        $settings = Setting::first();

//        dd($settings->address);
        $style=Themes::where('key','about')->first();

        $slider = Slider::where('type', '=', 'about')->get();

//        dd($slider);

        return view('pages.about', compact('slider','settings','style'));
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }


    public function test()
    {
        return view('livewire.test');
    }

    public function sendemail()
    {
        $data = User::all();
        view()->share('user', $data);
        $pdf = PDF::loadView('pages.pdf');

        return $pdf->stream();


        $cart = Cart::where('user_id', auth()->user()->id)->get();

        $sum = $cart->sum('price');
//        $data=array(['name'=>"ehsanos"]);

        return view('pages.email', compact('cart'));

    }

}
