@extends('layouts.master')
@section('content')



        <div class="top-content-slider">
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

                            <div class="top-content-slider w-100 img-div"
                                 style="background: url('{{$slide->getFirstMediaUrl('slider')}}') center / cover no-repeat;">

                                <div class=" w-100 ">
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
                <a class="carousel-control-prev h-50" href="#myCarousel" role="button" data-slide="prev"><span
                        class="carousel-control-prev-icon" aria-hidden="true"></span><span
                        class="sr-only">Previous</span></a><a class="carousel-control-next h-50" href="#myCarousel"
                                                              role="button" data-slide="next"><span
                        class="carousel-control-next-icon" aria-hidden="true"></span><span
                        class="sr-only">Next</span></a>
            </div>
        </div>



    <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2" @if($style) style="background-color:{{$style->primary}}" @endif>
        <div class="container">
            <div class="container">
                {{--                <div class="col-12 col-lg-3">--}}

                {{--                    <div class="row bg-gray pb-3 pt-4">--}}

                {{--                        @foreach($catalogs as $catalog)--}}
                {{--                        <div class="col-12 p-0 my-1">--}}
                {{--                            <div--}}
                {{--                                class="d-flex flex-row justify-content-start align-items-center py-1 border-bottom main-catalog">--}}
                {{--                                <div class="div-dash"></div>--}}
                {{--                                <a class="mx-3 text-decoration-none catalog-btn">{{getTrans($catalog,'name')}}</a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        @endforeach--}}




                {{--                    </div>--}}

                {{--                </div>--}}
                <div class="">
                    <div class="row py-2">
                        <div class="col p-0">
                            <div class="px-3">
                                <h2 class="text-dark">{{lang('catalog')}}</h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($catalogs as $catalog)
                            <div class="col-6 col-lg-4 mb-4">
                                <div class="product-main border py-1">
                                    <div class="product-img border-bottom mb-1">
                                        <div class="p-2"><img class="img-fluid"
                                                              src="{{$catalog->getFirstMediaUrl('catalogs')}}"></div>
                                    </div>
                                    <div class="product-desc px-3">
                                        <h5 class="text-dark m-0 py-1">{{getTrans($catalog,'name')}}</h5>
                                        <p class="text-dark m-0 py-2">{{getTrans($catalog,'description')}}</p>
                                    </div>
                                    <div class="product-btn px-3 py-2"><a type="button"
                                                                          class="text-decoration-none products-details"
                                                                          href="{{Storage::url($catalog->file)}}">{{lang('download')}} </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>

        </div>
        <div class=" mt-2">
            @foreach($tags as $tag )
                <a href="#" class="badge badge-dark tags-div py-2 px-2">{{$tag->name}}</a>

            @endforeach
        </div>
    </section>

@endsection
