<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatusEnum;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function Symfony\Component\String\b;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if (auth()->check()) {

            $cart = Cart::with('products')->where('user_id', auth()->user()->id)->get();


            $order = Order::create([
                'user_id' => auth()->user()->id,
                'order_code' => str_pad('NO', '3', auth()->user()->id) . rand(1000, 2000),
                'status' => OrderStatusEnum::Wait->value,
                'total' => $cart->sum('price'),
                'discount' => 0,
            ]);


            foreach ($cart as $item) {
                $price_now = $item->products->price;
                $items = Item::create([
                    'order_id' => $order->id,
                    'product_id' => $item->products->id,
                    'product_name' => $item->products->name,
                    'quantity' => $item->quantity,
                    'total' => $item->price,
                    'price' => $price_now,


                ]);
            };

//            return view('pages.email',compact('order','cart'));

            $data['order'] = $order;
            $data['cart'] = $cart;

            $pdf2 = new TCPDF;

//            $pdf = PDF::loadView('pages.pdf', $data)
//                ->setOptions(['defaultFont' => 'sans-serif'])
//                ->setPaper('a4');
//            return $pdf->stream();
            Mail::send('pages.email', ['cart' => $cart, 'order' => $order], function ($message) use ($cart, $order) {
                $message->from(auth()->user()->email)
                    ->to('ehsan.gamor90@gmail.com')
                    ->subject('test');
            });
            $delet = Cart::where('user_id', auth()->user()->id)->delete();
            return redirect()->route('langs.index')->with(
                ['type' => 'success',
                    'message' =>__('words.order_sent')

                ]
            );

        }
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
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show($order)
    {
        $sum = 0;
        $items = Item::with('product')->where('order_id', '=', $order)->get();

        $sum = $items->sum('total');

        return view('pages.order-details', compact('items', 'sum', 'order'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
