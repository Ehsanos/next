@extends('layouts.master')
@section('content')
<header class="h-100">
    <div class="top-content">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($slider as $slide)
                    <li data-target="#myCarousel" data-slide-to="{{$loop->index}}"
                        @if($loop->first) class="active" @endif></li>
                @endforeach
                {{--                        <li data-target="#myCarousel" data-slide-to="1"></li>--}}
                {{--                        <li data-target="#myCarousel" data-slide-to="2"></li>--}}
            </ol>
            <div class="carousel-inner">

                @foreach($slider as $slide)
                    <div class="carousel-item @if($loop->first)active @endif">

                        <div class="h-100 w-100 img-div"
                             style="background: url('{{$slide->getFirstMediaUrl('slider')}}') center / cover no-repeat;">

                            <div class="h-100 w-100 ">
                                <div class="slide_style_right">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-12 text-center align-self-center slide-text">
                                            {{--                                                <p class="animate__animated animate__fadeInUp px-4">Bootstrap now touch enable slide.</p>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"><span
                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                    class="sr-only">Previous</span></a><a class="carousel-control-next" href="#myCarousel"
                                                          role="button" data-slide="next"><span
                    class="carousel-control-next-icon" aria-hidden="true"></span><span
                    class="sr-only">Next</span></a>
        </div>
    </div>
</header>

<div class="container mt-5">

    <div class="row clearfix">

        <div class="row clearfix">
            @foreach($delegtes as $deleget)

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card agent ">
                        <div class="agent-avatar">
                            <a class="agent-name " href="agent-profile.html">
                                <img src="{{$deleget->getFirstMediaUrl('users')}}" class="img-fluid " alt="">
                            </a>
                        </div>
                        <div class="agent-content">
                            <div class="agent-name agent-color">
                                <h4><a class="agent-color" href="agent-profile.html">{{$deleget->name}}</a></h4>
                                <span class="agent-color">{{$deleget->country->name}}</span>
                            </div>
                            <ul class="agent-contact-details">
                                <li><i class="zmdi zmdi-phone"></i><span>{{$deleget->phone}}</span><br></li>
                                <li><i class="zmdi zmdi-whatsapp"></i>{{$deleget->whatsapp}}<br></li>
                                <li><i class="zmdi zmdi-email"></i>{{$deleget->email}}</li>

                            </ul>
                            <ul class="social-icons">
                                <li><a class="facebook agent-color" href="{{$deleget->facebook}}"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a class="twitter agent-color" href="{{$deleget->twitter}}"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a class="gplus agent-color" href="{{$deleget->insegram}}"><i class="zmdi zmdi-google-plus"></i></a></li>
                                <li><a class="linkedin agent-color" href="{{$deleget->instegram}}"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

        <div class=" mt-2">
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
            <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>





        </div>



    </div>
</div>

@endsection
