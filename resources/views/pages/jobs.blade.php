@extends('layouts.master')
@section('content')

    <header class="">
{{--        <div class="top-content">--}}
{{--            <div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
{{--                <ol class="carousel-indicators">--}}
{{--                    @foreach($slider as $slide)--}}
{{--                        <li data-target="#myCarousel" data-slide-to="{{$loop->index}}"--}}
{{--                            @if($loop->first) class="active" @endif></li>--}}
{{--                    @endforeach--}}
{{--                    --}}{{--                        <li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--                    --}}{{--                        <li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--                </ol>--}}
{{--                <div class="carousel-inner">--}}

{{--                    @foreach($slider as $slide)--}}
{{--                        <div class="carousel-item @if($loop->first)active @endif">--}}

{{--                            <div class="h-100 w-100 img-div"--}}
{{--                                 style="background: url('{{$slide->getFirstMediaUrl('slider')}}') center / cover no-repeat;">--}}

{{--                                <div class="h-100 w-100 ">--}}
{{--                                    <div class="slide_style_right">--}}
{{--                                        <div class="row justify-content-center align-items-center">--}}
{{--                                            <div class="col-12 text-center align-self-center slide-text">--}}
{{--                                                --}}{{--                                                <p class="animate__animated animate__fadeInUp px-4">Bootstrap now touch enable slide.</p>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    @endforeach--}}

{{--                </div>--}}
{{--                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"><span--}}
{{--                        class="carousel-control-prev-icon" aria-hidden="true"></span><span--}}
{{--                        class="sr-only">Previous</span></a><a class="carousel-control-next" href="#myCarousel"--}}
{{--                                                              role="button" data-slide="next"><span--}}
{{--                        class="carousel-control-next-icon" aria-hidden="true"></span><span--}}
{{--                        class="sr-only">Next</span></a>--}}
{{--            </div>--}}
{{--        </div>--}}


        <div class="container policy mt-2 mt-md-4 mt-lg-5" @if($style) style="background-color:{{$style->primary}}" @endif>
            <h1 class="title-policy ">{{lang('policy')}}</h1>

            <p >
             {!!getTrans($setting,'description')!!}
            </p>
        </div>
    </header>


@endsection
