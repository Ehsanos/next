<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale()=='ar'?'rtl':'ltr'}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Altin Mix 34</title>

    @if(app()->getLocale()=='ar')
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-rtl.min.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    @endif


    {{--    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/css/agent.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
    <link rel="icon" href="{!! asset('assets/img/Altinmix.svg') !!}"/>


    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100i,200,200i,300,300i,400,400i,500,500i&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/ws-ctrl-convex.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ws-ctrl-twist.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/Animated-numbers-section-styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/best-carousel-slide.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Bold-BS4-Image-Caption-Hover-Effect-2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/details-product.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet"
          href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Off-Canvas-Sidebar-Drawer-Navbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slide-animation-test.css')}}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>

    @livewireStyles
</head>
@php
    $setting=App\Models\Setting::first();
    $products=App\Models\Product::where('is_active',true)->get();
    $cats=App\Models\Category::where('is_active',true)->get();

@endphp

<body class="p-0">
<main>
    <nav class="navbar navbar-light navbar-expand-lg sticky-top navbar-shrink py-3 border-bottom "
         id="mainNav">
        <div class="container-fluid"><a href="{{route('langs.index')}}"
                                        class="navbar-brand d-flex align-items-center"></a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item flex-column justify-content-start align-items-center main-link" id="nav1"><a
                            class="nav-link font-weight-bolder  @if (\Request::route()->getName() =='langs.index') active @endif"
                            href="{{route('langs.index')}}">{{lang('home')}}</a></li>


                    <li class="nav-item main-link" id="nav-product"><a
                            class="nav-link dropdown font-weight-bolder  @if (\Request::route()->getName() =='langs.products') active @endif"
                            href="{{route('langs.products')}}">{{lang('product')}}</a></li>
                    <li class="nav-item main-link" id="nav2"><a
                            class="nav-link font-weight-bolder @if (\Request::route()->getName() =='langs.catalog') active @endif"
                            href="{{route('langs.catalog')}}">{{lang('services')}}</a></li>
                    <li class="nav-item main-link" id="nav3"><a
                            class="nav-link font-weight-bolder @if (\Request::route()->getName() =='langs.agents') active @endif"
                            href="{{route('langs.agents')}}">{{lang('agents')}}</a></li>
                    {{--                    <li class="nav-item main-link"><a--}}
                    {{--                            class="nav-link font-weight-bolder @if (\Request::route()->getName() =='langs.delegte') active @endif"--}}
                    {{--                            href="{{route('langs.delegte')}}">{{lang('delegte')}}</a></li>--}}
                    {{--                    <li class="nav-item main-link"><a--}}
                    {{--                            class="nav-link font-weight-bolder @if (\Request::route()->getName() =='langs.jobs') active @endif"--}}
                    {{--                            href="{{route('langs.jobs')}}">{{lang('jobs')}}</a></li>--}}
                    <li class="nav-item main-link" id="nav4"><a
                            class="nav-link font-weight-bolder @if (\Request::route()->getName() =='langs.news') active @endif"
                            href="{{route('langs.news')}}">{{lang('news')}}</a></li>
                    <li class="nav-item main-link" id="nav5"><a
                            class="nav-link text-nowrap font-weight-bolder @if (\Request::route()->getName() =='langs.about') active @endif"
                            href="{{route('langs.about')}}">{{lang('we_are')}}</a></li>
                    <li class="nav-item d-none d-lg-block mx-2">
                        <div class="center d-sm-block" mt-3="">

                            <form class="form-inline srch-form" action="{{route('langs.search')}}">
                                <div class="srch-wrapper">
                                    <input type="text" class="srch-input" name="search" placeholder="Search...">
                                    <button class="srch-button" type="submit">
                                        <em class="icon-search"></em>
                                        <i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <div class="float-left float-md-right my-3 mt-md-0 search-area">
                            <form action="{{route('langs.search')}}">
                                <i class="fas fa-search float-left search-icon"></i>
                                <input class="float-left float-sm-right custom-search-input" type="search" name=""
                                       placeholder="">
                            </form>
                        </div>
                    </li>
                </ul>
                @if(Auth::check())


                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{{route('langs.cart')}}">
                            <div class="mx-3 d-flex align-items-center justify-content-center">
                                <i class=" m-0 " style="font-size: 22px">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                         viewBox="0 0 576 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V299.6l-94.7 94.7c-8.2 8.2-14 18.5-16.8 29.7l-15 60.1c-2.3 9.4-1.8 19 1.4 27.8H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/>
                                    </svg>
                                </i>
                                <span
                                    class="badge mb-lg-4 mb-2 bg-warning text-white " style="border-radius:40%">
                                    <livewire:counter/>
                                </span>
                            </div>
                        </a>

                        <a href="{{route('langs.profile')}}">
                            @if(auth()->user()->getFirstMediaUrl('users'))
                                <img style="height: 50px; width:50px; border-radius: 50% "
                                     src="{{auth()->user()->getFirstMediaUrl('users')}}" alt=" ">
                            @else
                                <img style="height: 50px; width:50px; border-radius: 50% "
                                     src="{{asset('assets/img/vec.png')}}" alt=" ">
                            @endif
                        </a>
                    </div>


                @else
                    <div>
                        <a class="btn shadow btn-sign" href="{{route('login')}}" role="button">{{lang('login')}}</a>
                        <a class="btn shadow btn-sign" href="{{route('register')}}"
                           role="button">{{lang('register')}}</a>

                    </div>

                @endif

                <div class="dropdown d-lg-flex align-items-lg-center mx-4 py-2">
                    <a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                             viewBox="0 0 16 16" class="bi bi-globe fa-lg">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"></path>
                        </svg>
                    </a>


                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('change.lang',['lang'=>'ar'])}}">اللغة العربية</a>
                        <a class="dropdown-item" href="{{route('change.lang',['lang'=>'en'])}}">EN</a>
                        <a class="dropdown-item" href="{{route('change.lang',['lang'=>'tr'])}}">TR</a>
                        {{--                        <a class="dropdown-item" href="{{route('change.lang',['lang'=>'du'])}}">DU</a>--}}
                        {{--                        <a class="dropdown-item" href="{{route('change.lang',['lang'=>'es'])}}">ES</a>--}}

                    </div>
                </div>


            </div>
        </div>
    </nav>

    <div class="products-div p-3" id="products_div">
        {{--<span><i class="fas fa-window-close" id="close"></i></span>--}}
        @foreach($cats as $cat)
            <a href="{{route('langs.fofo',$cat)}}" class="product-show-div">
                <li class="m-1 list-products">

                    {{getTrans($cat,'name')}}

                </li>
            </a>

        @endforeach

    </div>
    <div class="products-div" id="products_div">

        @foreach($cats as $cat)
            <li class="m-1 list-products">{{$cat->id}}</li>
        @endforeach

    </div>

    @yield('content');


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.me/{{$setting->whatsapp1?? $setting->whatsapp2}}" class="floatbb" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <footer class="footer">
        <div class="container py-4 py-lg-5">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col-12 col-md-4">
                    <div class="font-weight-bold text-lg-right d-flex align-items-center mb-2"><span
                            class="text-dark">{{lang('emails')}}</span></div>
                    <div class="pt-2">
                        <form method="post" action="{{route('sub')}}">
                            @csrf
                            <div class="mb-3"><input class="shadow form-control" type="email" id="email-1" name="email"
                                                     placeholder="{{lang('email')}}"></div>
                            <div>
                                <button class="btn btn-primary shadow btn-sign d-block w-100"
                                        type="submit">{{lang('send')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-lg-left d-flex flex-column">
                    <div class="p-3">
                        <h3 class="font-weight-bold text-center text-lg-right fs-6 text-dark">{{lang('pages')}}</h3>
                        <ul class="list-unstyled text-center text-lg-right">
                            <li><a href="{{route('langs.index')}}">{{lang('home')}}</a></li>
                            <li><a href="{{route('langs.products')}}">{{lang('product')}}</a></li>
                            <li><a href="{{route('langs.catalog')}}">{{lang('services')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-lg-left d-flex flex-column">
                    <div class="p-3">
                        <h3 class="font-weight-bold text-center text-lg-right fs-6 text-dark">{{lang('about')}}</h3>
                        <ul class="list-unstyled text-center text-lg-right">
                            <li><a href="{{route('langs.about')}}">{{lang('we_are')}}</a></li>
                            <li><a href="{{route('langs.policy')}}">{{lang('policy')}}</a></li>
                            <li><a href="{{route('langs.about')}}">{{lang('call_us')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">{{lang('rights')}} AlTinMIX </p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="{{$setting->facebook}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                 viewBox="0 0 16 16" class="bi bi-facebook">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                            </svg>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                             viewBox="0 0 16 16" class="bi bi-twitter">
                            <a href="{{$setting->twitter}}">


                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{$setting->instagram}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                 viewBox="0 0 16 16" class="bi bi-instagram">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</main>
<script src="//code.tidio.co/wo5ts73xsjvokgdmqdfqszqytforywxp.js" async></script>

@livewireScripts
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/aos.min.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
<script src="{{asset('assets/js/Animated-numbers-section-script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/startup-modern.js')}}"></script>
<script src="{{asset('assets/js/Off-Canvas-Sidebar-Drawer-Navbar-swipe.js')}}"></script>
<script src="{{asset('assets/js/Off-Canvas-Sidebar-Drawer-Navbar-off-canvas-sidebar.js')}}"></script>
<script src="{{asset('assets/js/details-product.js')}}"></script>
<script src="{{asset('assets/js/slide-animation-test.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>
</body>

</html>
