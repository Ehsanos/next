@extends('layouts.master')
@section('content')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/cart.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>

<div class="container mt-lg-5">
    <h1 class="text-black-50">{{lang('order_content')}}:{{$items[0]->order->order_code ?? ''}}</h1>
    {{--   <h1 class="bg-info"> {{$items}}</h1>--}}

</div>

<div class="shopping-cart ">

    <div class="product">
        <label class="product-image">{{lang('img_product')}}</label>
        <label class="product-details">{{lang('name')}}</label>
        <label class="product-details">{{lang('price_one')}}</label>
        <label class="product-details">{{lang('quantity')}}</label>

        <label class="product-details">{{lang('one_price')}}</label>
    </div>


    @foreach($items as $item)
        <div class="product ">
            <div class="product-image">
                <a href="{{route('langs.product_details',$item->product->id)}}">
                    <img src="{{$item->product->getFirstMediaUrl('products')}}">
                </a>
            </div>
            <div class="product-details">
                <div class="product-title">{{getTrans($item->product,'name')}}</div>
                <p class="product-description">{{getTrans($item->product,'discrption')}}</p>
            </div>
            <div class="product-details">{{$item->price}}</div>
            <div class="product-details">{{$item->quantity}}</div>

            <div class="product-details">{{$item->total}}</div>
        </div>
    @endforeach


    <div class="totals">
        <div class="totals-item">
            <label>{{lang('sub_total')}}</label>
            <div class="sum d-none">

            </div>


            <div class="totals-value " id="cart-subtotal">{{$sum}}</div>


        </div>

        <div class="totals-item w-25 float-right  d-flex justify-content-end date">

            <div class="product-detail  mb-0"><h6>{{lang('history')}}: {{date('d-m-y',strtotime($items[0]->created_at))}}</h6>
            </div>


        </div>

    </div>

</div>

<script src="{{asset('assets/js/cart.js')}}">


</script>

</body>
</html>

@endsection
