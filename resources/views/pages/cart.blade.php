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

@if($sum>0)

    <div class="container mt-lg-5">
        <h1 class="text-black-50">{{lang('cart_name')}}</h1>


    </div>

    <div class="shopping-cart">

        <div class="column-labels">
            <label class="product-details">{{lang('code')}}</label>
            <label class="product-image">{{lang('img_product')}}</label>
            <label class="product-details">{{lang('name')}}</label>
            <label class="product-details">{{lang('packing')}}</label>
            <label class="product-price">{{lang('price_one')}}</label>
            <label class="product-quantity">{{lang('Quantity')}}</label>
            <label class="product-removal">{{lang('')}}</label>
            <label class="product-line-price">{{lang('one_price')}}</label>
        </div>

        @foreach($cart as $item)


            <div class="product">
                <div class="product-details">
                    <div class="product-title">{{$item->products->code}}</div>

                </div>

                <div class="product-image">
                    <a href="{{route('langs.product_details',$item->products->id)}}">
                        <img src="{{$item->products->getFirstMediaUrl('products')}}">
                    </a>
                </div>
                <div class="product-details">
                    <div class="product-title">{{getTrans($item->products,'name')}}</div>

                </div>

                <div class="product-details">
                    <div class="product-title">{{$item->products->pakcing}}</div>

                </div>
                <div class="product-price">{{$item->products->price}}</div>

                <div class="product-quantity d-flex">
                    <form action="{{route('langs.addToCart')}}" method="post" class="d-flex">
                        @csrf
                        <input type="number" onchange="change({{$loop->index}})" class="inqress "
                               value="{{$item->quantity}}" min="1" name="num">
                        <input hidden value="{{$item->products->id}}" name="product">

                        {{--            <livewire:incress/>--}}

                        <button type="submit" id="update-{{$loop->index}}" class="btn update"
                                style="color: green; display: none">
                            <i class="fas fa-refresh"></i>
                        </button>
                    </form>
                </div>


                <div class="product-removal">
                    <a class="remove-product fa fa-trash py-2 text-decoration-none"
                       href="{{route('langs.delCart',$item->id)}}">
                    </a>
                </div>
                <div class="product-line-price">{{$item->price}}</div>


            </div>
        @endforeach


        <div class="totals">
            <div class="totals-item">
                <label>{{lang('total')}}</label>
                <div class="totals-value" id="cart-subtotal">{{$sum}}</div>
            </div>
        </div>
        <form action="{{route('langs.create_order')}}" method="post">
            @csrf
            @if($sum>0)


                <input hidden name="user" value="{{auth()->user()->id}}"></input>
                <button type="submit" class="checkout btn-sign">{{lang('Offer_Price')}} </button>
        @endif
    </div>
    </form>
@else
    <div class="container d-flex align-items-center justify-content-center">
        <img height="80%" width="60%" src="{{asset('assets/img/empty-cart.gif')}}">

    </div>
@endif

<script src="{{asset('assets/js/cart.js')}}">
</script>

<script>
    const a = document.querySelector('.inqress');
    const btnn = document.getElementsByClassName('update');

    function change(e) {
        document.getElementById('update-' + e).style.display = "block"
    }

</script>


</body>
</html>

@endsection
