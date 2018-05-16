@extends('base')

@section('title')
    NOT FOUND
@endsection

{{--
These fields are components of container section :
    -   bannerArea
    -   404
--}}

@section('bannerArea')
    <!-- Page Banner Area
============================================ -->
    <div id="page-banner" class="page-banner-area top-header-space-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-banner text-center"><h2>404</h2></div>
                    <ul class="breadcrumbs">
                        <li><a href="#">home</a></li>
                        <li><span>404</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <canvas class="particles-js-canvas-el" width="1309" height="249" style="width: 100%; height: 100%;"></canvas>
    </div>
@endsection

@section('404')
    <!-- 404 Page
============================================ -->
    <div class="page-area pb-90 pt-90">
        <div class="container">
            <div class="row">
                <div class="page-404 text-center col-xs-12">
                    <div class="image-404 mb-80"><img src="{{asset('img/404.png')}}" alt=""></div>
                    <h3>Oops! Sorry, we could not find the page</h3>
                    <a href="{{route('home')}}">go back home</a>
                    <div class="search-form">
                        <form action="#">
                            <input type="text" placeholder="What are you looking for?">
                            <button><i class="zmdi zmdi-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--
=========================
   Container section
=========================
--}}
@section('container')
    @yield('bannerArea')
    @yield('404')
@endsection

@section('javascript')
    <!-- Particles Active JS
============================================ -->
    <script src="js/app.js"></script>
@endsection