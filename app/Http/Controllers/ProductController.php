<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Department;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Tag;
use App\Models\Themes;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($catId = null, $depId = null)
    {

        $cats = Category::where('is_active', true)->get();
        $slider = Slider::where('type', '=', 'product')->get();
        $departments = Department::when($catId, fn($q) => $q->whereCategoryId($catId))->whereIsActive(true)->get();
        if (isset($depId)) {
            $products = Product::with('media')->with('tags')->where([
                "department_id" => $depId,
                "is_active" => true,
            ])->get();

        } else {
            if (isset($catId)) {
                $products = Category::with('tags')->findOrFail($catId)->products;

            } else {
                $products = Product::with('tags')->with('department')->get();
//                dd($products[0]->tags()->get()[0]->name);
            }
        }


        $tags = Tag::where('type', 'product')->get();
        $lang = App()->getLocale();

        $style = Themes::where('key', 'product')->first();

        return view('pages.products', ["cats" => $cats, "departments" => $departments,
            "products" => $products, "tags" => $tags, "slider" => $slider, "lang" => $lang, "style" => $style]);

    }


    public function profile()
    {
        if (auth()->check())
            return view('pages.profile');
        else return redirect('login');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('media')->findOrfail($id);
        $imgs = Product::with('media')->findOrfail($id)->getMedia("*");

        //     dd($imgs);

//        $allproducts=Product::with('media')->get();
        $allproducts = Product::with('media')->where('department_id', $product->department_id)->get();

//        dd($allproducts);

        $tags = $product->tags()->get();

        return view('pages.product-details', compact('product', 'imgs', 'allproducts', 'id', 'tags'));
    }

    public function download($id)
    {
        $catlog = Catalog::findOfail($id);
        return Storage::url($catlog->file);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }


    public function search(Request $request ,$catId = null, $depId = null)
    {
        $cats = Category::where('is_active', true)->get();
        $departments = Department::when($catId, fn($q) => $q->whereCategoryId($catId))->whereIsActive(true)->get();

        if ($request->search != " ") {
            $products = Product::where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('name_en', 'LIKE', '%' . $request->search . '%')
                ->orWhere('name_tr', 'LIKE', '%' . $request->search . '%')
                ->orWhere('name_du', 'LIKE', '%' . $request->search . '%')
                ->orWhere('name_es', 'LIKE', '%' . $request->search . '%')
                ->orWhere('description', 'LIKE', '%' . $request->search . '%')
                ->orWhere('description_en', 'LIKE', '%' . $request->search . '%')
                ->orWhere('description_tr', 'LIKE', '%' . $request->search . '%')
                ->orWhere('description_du', 'LIKE', '%' . $request->search . '%')
                ->orWhere('description_es', 'LIKE', '%' . $request->search . '%')
                ->where('is_active', 'true')->get();
            return view('pages.product-search2', compact('products','departments','cats'));

        } else {
            $products = Product::where('is_active', true)->get();
            return view('pages.product-search', compact('products'));

        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
