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
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"><span
                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                    class="sr-only">Previous</span></a><a class="carousel-control-next" href="#myCarousel"
                                                          role="button" data-slide="next"><span
                    class="carousel-control-next-icon" aria-hidden="true"></span><span
                    class="sr-only">Next</span></a>
        </div>
    </div>

    <section class="contact-page-sec mt-5" @if($style) style="background-color:{{$style->primary}}" @endif>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marked"></i>
                            </div>
                            <div class="contact-info-text">
                                <h2>{{lang('address')}}</h2>
                                <span>{!!getTrans($settings,'address')!!} </span>
                                <span>{!!getTrans($settings,'phone')!!}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h2>{{lang('email')}}</h2>
                                <span>{{$settings->email}}</span>
                                <span>{{$settings->email2}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-info-text">
                                <h2>{{lang('openTime')}}</h2>
                                <span>Mon - Thu  9:00 am - 4.00 pm</span>
                                <span>Thu - Mon  10.00 pm - 5.00 pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-page-form" method="post">
                        <h2>{{lang('call_us')}}</h2>
                        <form action="{{route('sub')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="text" placeholder="{{lang('name')}}" name="name"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="email" placeholder="{{lang('email')}}" name="email" required/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="text" placeholder="{{lang('phone')}}" name="phone"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="text" placeholder="Subject" name="subject"/>
                                    </div>
                                </div>
                                <div class="col-md-12 message-input">
                                    <div class="single-input-field">
                                        <textarea  placeholder="{{lang('message')}}" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="single-input-fieldsbtn">
                                    <input type="submit" value="{{lang('send')}}"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact-page-map">
                        <iframe src="{{$settings->map}}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
