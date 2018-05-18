@extends('base')

@section('title')
    CONTACT
@endsection

{{--
These fields are components of container section :
    -   bannerArea
    -   contactPage
--}}
@section('bannerArea')
    <!-- Page Banner Area
============================================ -->
    <div id="page-banner" class="page-banner-area top-header-space-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-banner text-center"><h2>Contact us</h2></div>
                    <ul class="breadcrumbs">
                        <li><a href="{{route('home')}}">home</a></li>
                        <li><span>Contact us</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <canvas class="particles-js-canvas-el" width="1309" height="249" style="width: 100%; height: 100%;"></canvas>
    </div>
@endsection

@section('contactPage')
    <!-- Contact Page
============================================ -->
    <div class="page-area pb-90 pt-90">
        <div class="container">
            <div class="row">
                <div class="contact-form col-lg-8  col-md-7 col-xs-12">
                    <h3>LEAVE A MESSAGE</h3>
                    <form id="contact-form" action="mail.php" method="post">
                        <div class="input-box-2 fix">
                            <div class="input-box float-left">
                                <input name="name" placeholder="Name*" type="text">
                            </div>
                            <div class="input-box float-left">
                                <input name="subject" placeholder="Subject" type="text">
                            </div>
                        </div>
                        <div class="input-box-2 fix">
                            <div class="input-box float-left">
                                <input name="email" placeholder="E-mail*" type="text">
                            </div>
                            <div class="input-box float-left">
                                <input name="phone" placeholder="Phone" type="text">
                            </div>
                        </div>
                        <div class="input-box review-box fix">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="input-box submit-box fix">
                            <input value="Send Message" type="submit">
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
                <div class="contact-info col-lg-4  col-md-5 col-xs-12">
                    <h3>GET INFORMED</h3>
                    <div class="sin-con-info fix">
                        <img src="img/contact-info/1.jpg" alt="">
                        <div class="content fix">
                            <p class="name">sam smith</p>
                            <p class="title">MANAGER of STUFF</p>
                            <p class="info"><i class="zmdi zmdi-phone-in-talk"></i><span>Phone : +061012345678</span></p>
                            <p class="info"><i class="zmdi zmdi-email"></i><span>anikamollik@outlook.com</span></p>
                        </div>
                    </div>
                    <div class="sin-con-info fix">
                        <img src="img/contact-info/2.jpg" alt="">
                        <div class="content fix">
                            <p class="name">anika mollik</p>
                            <p class="title">CEO of STUFF</p>
                            <p class="info"><i class="zmdi zmdi-phone-in-talk"></i><span>Phone : +061012345678</span></p>
                            <p class="info"><i class="zmdi zmdi-email"></i><span>anikamollik@outlook.com</span></p>
                        </div>
                    </div>
                    <div class="sin-con-info fix">
                        <img src="img/contact-info/3.jpg" alt="">
                        <div class="content fix">
                            <p class="name">jake plain</p>
                            <p class="title">DESIGNER of STUFF</p>
                            <p class="info"><i class="zmdi zmdi-phone-in-talk"></i><span>Phone : +061012345678</span></p>
                            <p class="info"><i class="zmdi zmdi-email"></i><span>anikamollik@outlook.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-wrapper"><div id="contact-map" class="mb-90"></div></div>
@endsection

{{--
=========================
   Container section
=========================
--}}
@section('container')

    @yield('bannerArea')

    @yield('contactPage')

@endsection

@section('javascript')
    <!-- Particles Active JS
============================================ -->
    <script src="{{asset('js/app.js')}}"></script>
    <!-- Google Map APi
    ============================================ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
    <script src="{{asset('js/map.js')}}"></script>
@endsection