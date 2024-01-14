@extends('layouts.master')
@section('content')

    <html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    </head>

    <body>

    {{--@dd(auth()->user()->getMedia('users'))--}}
    <section class="my-5">
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="personal-image">
                                        <form action="{{route('langs.setImg')}}" method="post"
                                              enctype="multipart/form-data">
                                            <label class="label">

                                                @csrf
                                                <input type="file" name="photo" id="img" onchange="chang()"/>
                                                <figure class="personal-figure">

{{--                                                    <img src="{{auth()->user()->getFirstMediaUrl('users')}}"--}}
{{--                                                         class="personal-avatar">--}}
                                                    @if(auth()->user()->getFirstMediaUrl('users'))
                                                        <img src="{{auth()->user()->getFirstMediaUrl('users')}}" alt=" " class="personal-avatar">
                                                    @else
                                                        <img src="{{asset('assets/img/vec.png')}}" alt=" " class="personal-avatar">
                                                    @endif


                                                    <figcaption class="personal-figcaption">
                                                        <img
                                                            src="https://raw.githubusercontent.com/ThiagoLuizNunes/angular-boilerplate/master/src/assets/imgs/camera-white.png">
                                                    </figcaption>
                                                </figure>
                                                <button type="submit" name="ttt" class="btn rounded" id="btnupload" style="display: none; background-color: goldenrod;color: whitesmoke">Update</button>

                                            </label>

                                        </form>
                                    </div>

                                    <div class="mt-3">
                                        <h4>{{Auth()->user()->name}}</h4>

                                        <p class="text-secondary mb-1">{{Auth()->user()->email}}</p>
                                        <p class="text-muted font-size-sm">{{Auth()->user()->phone}}</p>
                                    </div>
                                </div>

                                <div class="list-group list-group-flush text-center mt-4">
                                    {{--                                    <a href="#" class="list-group-item list-group-item-action border-0 active">--}}
                                    {{--                                        Profile Informaton--}}
                                    {{--                                    </a>--}}
                                    {{--                                <a href="#" class="list-group-item list-group-item-action border-0">Orders</a>--}}
                                    {{--                                <a href="#" class="list-group-item list-group-item-action border-0">Address Book</a>--}}
                                    {{--                                <a href="#" class="list-group-item list-group-item-action border-0">Settings</a>--}}
                                    <div class="col-md-12 text-center">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-danger mt-4">تسجيل الخروج</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="top-status">
                                    <h5>الطلبات</h5>
                                    <ul>
                                        @foreach(Auth()->user()->orders as $order)

                                            <li class="active">
                                                <a href="{{route('langs.order_details',$order->id)}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                         data-name="Layer 1"
                                                         viewBox="0 0 512 512" width="50" height="50">
                                                        <title> Clock Delivery package </title>
                                                        <path
                                                            d="M316.96,424.4A96,96,0,1,1,400,472.22,95.391,95.391,0,0,1,316.96,424.4Z"
                                                            style="fill:#6fe3ff"/>
                                                        <path
                                                            d="M400,135.55V280.22A96.008,96.008,0,0,0,316.96,424.4L208,487.3V246.38L399.98,135.54Z"
                                                            style="fill:#c16752"/>
                                                        <polygon
                                                            points="208 246.38 141.14 207.78 333.13 96.94 399.98 135.54 208 246.38"
                                                            style="fill:#e48e66"/>
                                                        <polygon
                                                            points="333.13 96.94 141.14 207.78 92.21 179.53 284.19 68.69 333.13 96.94"
                                                            style="fill:#e5d45a"/>
                                                        <polygon
                                                            points="208 24.7 284.19 68.69 92.21 179.53 92.2 179.53 16.02 135.54 208 24.7"
                                                            style="fill:#af593c"/>
                                                        <polygon
                                                            points="208 246.38 208 487.3 16 376.45 16 135.55 16.02 135.54 92.2 179.53 92.2 339.28 115.45 329.68 140.8 358.48 140.8 207.98 141.14 207.78 208 246.38"
                                                            style="fill:#e48e66"/>
                                                        <polygon
                                                            points="141.14 207.78 140.8 207.98 140.8 358.48 115.45 329.68 92.2 339.28 92.2 179.53 92.21 179.53 141.14 207.78"
                                                            style="fill:#f8ec7d"/>
                                                        <path
                                                            d="M284.75,269.594l-17.9-18.959a7,7,0,0,0-11.256,1.49l-16.9,31.44a7,7,0,0,0,6.16,10.316,7.185,7.185,0,0,0,6.292-3.687L255,283.247V343.42a7,7,0,1,0,14,0V273.051l5.69,6.154a6.927,6.927,0,0,0,9.835.285A7,7,0,0,0,284.75,269.594Z"
                                                            style="fill:#6fe3ff"/>
                                                        <path
                                                            d="M40.83,378.37a7,7,0,0,1-7-7V345.45a7,7,0,0,1,14,0v25.92A7,7,0,0,1,40.83,378.37Z"
                                                            style="fill:#f8ec7d"/>
                                                        <path
                                                            d="M69.25,395a7,7,0,0,1-7-7V364.65a7,7,0,0,1,14,0V388A7,7,0,0,1,69.25,395Z"
                                                            style="fill:#f8ec7d"/>
                                                        <path
                                                            d="M97.68,411.41a7,7,0,0,1-7-7V383.85a7,7,0,0,1,14,0v20.56A7,7,0,0,1,97.68,411.41Z"
                                                            style="fill:#f8ec7d"/>
                                                        <path
                                                            d="M126.1,427.82a7,7,0,0,1-7-7V403.05a7,7,0,0,1,14,0v17.77A7,7,0,0,1,126.1,427.82Z"
                                                            style="fill:#f8ec7d"/>
                                                        <path
                                                            d="M154.52,444.61a7,7,0,0,1-7-7V422.25a7,7,0,0,1,14,0v15.36A7,7,0,0,1,154.52,444.61Z"
                                                            style="fill:#f8ec7d"/>
                                                        <path
                                                            d="M247.777,384.941a7,7,0,0,1-3.507-13.064l31.89-18.41a7,7,0,0,1,7,12.125L251.27,384A6.964,6.964,0,0,1,247.777,384.941Z"
                                                            style="fill:#f8ec7d"/>
                                                        <path
                                                            d="M432.039,413.22a6.975,6.975,0,0,1-4.783-1.89l-32.04-30A7,7,0,0,1,393,376.22V313.97a7,7,0,0,1,14,0v59.215l29.824,27.925a7,7,0,0,1-4.785,12.11Z"
                                                            style="fill:#2561a1"/>
                                                    </svg>
                                                </a>
                                                <span>{{$order->order_code}}</span>
                                                <span>{{$order->status}}</span>

                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
const img=document.getElementById('img');
const btn1=document.getElementById('btnupload');

function chang(){
    btn1.style.display="inline-block";
}
    </script>

    </body>
    </html>

@endsection
