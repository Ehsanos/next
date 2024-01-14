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

                            <div class="w-100 img-div"
                                 style="background: url('{{$slide->getFirstMediaUrl('slider')}}') center / cover no-repeat;">

                                <div class="top-content-slider w-100 ">
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



    <main @if($style)style="background-color:{{$style->primary}}"@endif>
        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
            <div class="container-fluid py-5">
                <div class="row justify-content-center">
                    @foreach($posts as $post)
                        <div class="col-12 col-lg-4 mb-lg-0" style="padding: 10px;"><a
                                href="{{route('langs.showPost',['post'=>$post])}}">
                                <div class="hover hover-2 rounded" style="color: #ffffff;"><img class="img-fluid"
                                                                                                src="{{$post->getFirstMediaUrl('posts')}}"
                                                                                                alt="image">
                                    <div class="hover-overlay"></div>
                                    <div class="hover-1-content px-5 py-4">
                                        <h2 class="text-uppercase hover-2-title mb-0"
                                            style="font-weight: bold;">{!!getTrans($post,'tilte')!!}</h2>
                                        <p class="hover-2-description font-weight-light mb-0">{!!getTrans($post,'body')!!}</p>
                                    </div>
                                </div>
                            </a></div>
                    @endforeach

                </div>


            </div>


            <div class=" mt-2">
{{--                @dd($tags[0]->name[0]->ar)--}}

                @foreach($tags as $tag)
                    <a href="#" class="badge badge-dark tags-div py-2 px-2">{{$tag->name['ar']}}</a>
                @endforeach

            </div>

        </section>

    </main>
@endsection
