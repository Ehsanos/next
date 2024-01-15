@extends('layouts.master')
@section('content')

    <main @if($style) style="background-color:{{$style->primary}}" @endif>
        {{--   <h1 class="bg-danger">{{Auth()->user()->name ?? 'none'}} </h1>--}}
        @if(Session::has('message'))

            <div class="w-25" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            </div>
        @endif
        <header class="mt-1">
            <a class="bg-primary" href="{{route('langs.google')}}">freee</a>
            <div class="top-content">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
{{--                    <ol class="carousel-indicators">--}}
{{--                        @foreach($slider as $slide)--}}
{{--                            <li data-target="#myCarousel" data-slide-to="{{$loop->index}}"--}}
{{--                                @if($loop->first) class="active" @endif></li>--}}
{{--                        @endforeach--}}
{{--                        --}}{{--                        <li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--                        --}}{{--                        <li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--                    </ol>--}}
                    <div class="carousel-inner">

                        @foreach($slider as $slide)
                            <div class="carousel-item @if($loop->first)active @endif">
                                <a @if($slide->cats) href="{{route('langs.fofo',$slide->cats)}}" @else href="{{$slide->url}}" @endif >
                                    <div class="h-75 w-100"
                                         style="background: url('{{$slide->getFirstMediaUrl('slider')}}') center / cover no-repeat;">

                                <div class="h-75 w-100 ">

                                    @if(app()->getLocale()=='ar')
                                        <div class="slide_style_left">
                                            <div class="row justify-content-center align-items-center">
                                                <div
                                                    class="col-12 text-center align-self-center slide-text mt-5">

                                                    <p class="animate__animated animate__fadeInUp px-4 mt-5">{{getTrans($slide,'discrption')}}</p>
                                                </div>

                                            </div>
                                        </div>

                                    @else
                                        <div class="slide_style_right">
                                            <div class="row justify-content-center align-items-center">
                                                <div
                                                    class="col-12 text-center align-self-center slide-text  mt-5">

                                                    <p class="animate__animated animate__fadeInUp px-4 mt-5">{{getTrans($slide,'discrption')}}</p>
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                                </a>
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


        {{--Products slider section--}}
        <section class="d-flex flex-column justify-content-center align-items-center  sections-s">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div id="sections" class="owl-carousel">

                            @foreach($prodcuts as $product)
                                <div class="px-3 product-item" onmouseover="show(this)" onmouseleave="hide(this)">
                                    <div class="adding-hidden" id="add">
                                        <form action="{{route('langs.addToCart')}}" method="post">
                                            @csrf


                                            <input hidden value="{{$product->id}}" name="product">
                                            <input hidden type="number" min="0" value="1" name="num">
                                            <button type="submit" class="btn">
                                                <i class="fas fa-plus-circle icn"></i>
                                            </button>
                                        </form>

                                    </div>

                                    <a class="text-decoration-none"
                                                                  href="{{route('langs.product_details',[$product])}}">
                                        <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="img-fluid rounded-img"
                                                                          src="{{$product->getFirstMediaUrl('products')}}">
                                            </div>
                                            <div class="card-body after">
                                                <p class="card-text sub-text-color">{{getTrans($product,'name')}}</p>
                                                {{--                                            <p class="card-text cardbody-sub-text">{!!getTrans($product,'description')!!}</p>--}}
                                            </div>
                                        </div>
                                    </a></div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{--Category sliders section--}}
        <section class="d-flex flex-column justify-content-center align-items-center pb-5 products">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-9">
                        <div id="products" class="owl-carousel py-4">


                            @foreach($catigories as $cat)
                                <div class="px-3 product-item"><a class="text-decoration-none"
                                                                  href="{{route('langs.fofo',$cat)}}">
                                        <div class="card cards-shadown cards-hover  w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="rounded-img"
                                                                          src="{{$cat->getFirstMediaUrl('categories')}}">
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text sub-text-color">{{$cat->name}}</p>
                                                {{--                                            <p class="card-text cardbody-sub-text">{{$cat->description}}</p>--}}
                                            </div>
                                        </div>
                                    </a></div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{--Statics--}}
        <section class="wrapper-numbers">

            <div class="container">
                <div class="row countup text-center">
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-box-open" aria-hidden="true"></i></p>
                        <p><span class="count replay">{{$statics[1]->number}}</span></p>
                        <h2>{{$statics[1]->discrption}}</h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-th" aria-hidden="true"></i></p>
                        <p><span class="count replay">{{$statics[3]->number}}</span></p>
                        <h2>{{$statics[3]->discrption}}</h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-bookmark" aria-hidden="true"></i></p>
                        <p><span class="count replay">{{$statics[2]->number}}</span></p>
                        <h2>{{$statics[2]->discrption}}</h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fa fa-user" aria-hidden="true"></i></p>
                        <p><span class="count replay">{{$statics[0]->number}}</span></p>
                        <h2>{{$statics[0]->discrption}}</h2>
                    </div>
                </div>
            </div>
        </section>


        <section class="d-flex flex-column justify-content-center align-items-center pt-5 sec-news">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div id="news" class="owl-carousel py-4">

                            @foreach($news as $new)
                                <div class="px-3 product-item"><a class="text-decoration-none"
                                                                  href="{{route('langs.showPost',['post'=>$new])}}">
                                        <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="img-fluid rounded-img"
                                                                          src="{{$new->getFirstMediaUrl('posts')}}">
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text sub-text-color">{!!getTrans($new,'tilte')!!}</p>
                                                {{--                                        <p class="card-text cardbody-sub-text">{{getTrans($new,'body')}}</p>--}}
                                            </div>
                                        </div>
                                    </a></div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-12 py-4">
                        <div class="text-center"><a class="more-news py-3 px-5 text-decoration-none"
                                                    href="{{route('langs.news')}}">{{lang('more_news')}}</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="info pb-4 pt-5">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6">
                        <div class="d-md-none">
                            <iframe allowfullscreen="" frameborder="0"
                                    src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%"
                                    height="100%"></iframe>
                        </div>
                        <div class="d-none d-md-block position-absolute" style="top: 0;left: 0;right: 0;bottom: 0;">
                            <iframe src="{{$settings->map}}" width="600" height="450" style="border:0;"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div>
                            <form class="bg-white border rounded shadow p-3 p-sm-4 p-lg-5" method="post"
                                  style="background: var(--bs-body-bg);" action="{{route('sub')}}">
                                @csrf
                                <h3 class="font-weight-bold text-center text-black-50 mb-3">{{lang('call_us')}}</h3>
                                <div class="mb-3"><input class="form-control" type="text" name="name"
                                                         placeholder="{{lang('name')}}">
                                </div>
                                <div class="mb-3"><input class="form-control" type="email" name="email"
                                                         placeholder="{{lang('email')}}"></div>
                                <div class="mb-3"><textarea class="form-control" name="message"
                                                            placeholder="{{lang('message')}}"
                                                            rows="6"></textarea></div>
                                <div class="mb-3">
                                    <button class="btn btn-primary btn-sign" type="submit">{{lang('send')}}</button>
                                </div>
                                <div>{!!htmlFormSnippet()!!}</div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
