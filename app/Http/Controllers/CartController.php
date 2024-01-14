<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->check()) {
            $cart = Cart::with('products')->where('user_id', auth()->user()->id)->get();
//        dd(auth()->user()->id);
            $sum = $cart->sum('price');
//            dd($cart[0]->products->id);

            return view('pages.cart', compact('cart', 'sum'));
        } else
            return redirect('/login');


    }

    public function addToCart(Request $request)
    {
//dd($request->input('num'));
        if (auth()->check()) {


            $this->validate($request, [
                'num' => 'required|gt:0',
                'product' => 'required|exists:products,id'
            ]);
            $num = $request->input('num');
            $product_id = $request->input('product');


//        dd($num,$product_id);


            $product = Product::find($product_id);

            $cart = Cart::updateOrCreate([
                'product_id' => $product_id,

            ], [
                'quantity' => $num,
                'price' => $product->price * $num,
                'user_id' => auth()->user()->id,


            ]);


            return redirect()->back()->with([
                'type' => 'Success',
                'message' => __('words.addTocart')
            ]);


        } else


            return redirect('/login');

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
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd('inside delet');
        Cart::destroy($id);
        return redirect('cart')->with('flash_message',__('words.delete_done'));
    }
}
