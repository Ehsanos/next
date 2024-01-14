@extends('layouts.master')
@section('content')



    <main @if($style) style="background-color:{{$style->primary}}" @endif>
        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="text-center d-flex justify-content-center">
                            @foreach($post->getMedia("*") as $index)

                                <img class="img-thumbnail" style="height: 250px; width: 100%;object-fit: cover"
                                     src="{{$index->getUrl()}}">
                            @endforeach
                        </div>
                    </div>

                    @if($post->video)
                        <iframe width="100%" height="315" class="m-auto mt-1 mt-md-4" src="{{$post->video}}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    @endif
                    <div class="col">
                        <p class="text-dark">{!!getTrans($post,'tilte')!!}</p>
                        <p class="text-dark"><span
                                style="font-weight: normal !important; font-style: normal !important; color: rgb(122, 122, 122);">
                             {!!getTrans($post,'body')!!}
                            </span><br><br></p>
                    </div>
                </div>
                <div class=" mt-2">
                    @foreach($tags as $tag)
                        <a href="#" class="badge badge-dark tags-div py-2 px-2">{{$tag->name}}</a>
                    @endforeach

                </div>


            </div>
        </section>
    </main>

@endsection


