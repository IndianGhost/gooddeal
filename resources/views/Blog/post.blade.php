@extends('base')

@section('title')
    Post {{$id}} Title
@endsection

{{--
These fields are components of container section :
    -   bannerArea
    -   blogDetailsPage
--}}
@section('bannerArea')
    <!-- Page Banner Area
============================================ -->
    <div id="page-banner" class="page-banner-area top-header-space-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-banner text-center"><h2>Blog Details</h2></div>
                    <ul class="breadcrumbs">
                        <li><a href="{{route('home')}}">home</a></li>
                        <li><span>Blog Details</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('blogDetailsPage')
    <!-- Blog Details Page
    ============================================ -->
    <div class="blog-details-page pb-90 pt-90">
        <div class="container">
            <div class="row">
                <div class="sin-blog-details col-xs-12">
                    <div class="blog-details-image"><img src="img/blog/blog-details.jpg" alt=""></div>
                    <div class="blog-details-content">
                        <div class="blog-content-wrapper">
                            <div class="blog-details-head fix">
                                <div class="blog-top-left float-left">
                                    <p class="date">20<span>may</span></p>
                                    <a href="#"><i class="zmdi zmdi-account"></i> Anika Mollik</a>
                                </div>
                                <div class="blog-top-right float-right">
                                    <div class="blog-social">
                                        <p>Share:</p>
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                        <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                                        <a href="#"><i class="zmdi zmdi-dribbble"></i></a>
                                    </div>
                                    <div class="blog-meta">
                                        <a href="#"><i class="zmdi zmdi-favorite"></i> 20 Likes</a>
                                        <a href="#"><i class="zmdi zmdi-comments"></i> 02 Comments</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="blog-details-title">Blog Post Dummy Title</h3>
                            <p>Lorem ipsum dolor sit amet, consect etur adipisici ng elit, sed do eiu smod tempor incidi dunt ut labore et dolore magna aliqua. Ut at enim ad minim veniam, quis nostrud exerci tation ullamco laboris nisi ut aliq uip ex ea commodo cons equat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut the enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea com modo conse quat. Duis aute irure dolor in reprehend erit in volupt ate velit esse cillum dolore eu fugiat nulla pari atur. Except eur sint occa ecat cupi datat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusantium the doloremque lauda ntium, totam rem aper iam, eaque ipsa quae ab illo inven tore verit atis et quasi archi tecto beatae vitae dicta sunt explicabo.</p>
                            <p>Nemo enim ipsam voluptatem quia volu ptas sit asper natur aut odit aut fugit, sed quia consequ untur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolo rem ipsum quia dolor sit amet, conse ctetur, adipisci velit, sed quia a non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut new newenim ad im veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        </div>
                        <div class="blog-details-author fix">
                            <img src="img/comment/author.jpg" alt="" />
                            <div class="content fix">
                                <h4>About:  <span>Anika mollik</span></h4>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusmod tempor incidid unt ut labore et dolore the our magn aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                            </div>
                        </div>
                        <div class="blog-comments fix">
                            <h3>all comments</h3>
                            <ul class="comment-list">
                                <li>
                                    <div class="sin-comment">
                                        <div class="image float-left"><img src="img/comment/1.jpg" alt="" /></div>
                                        <div class="content fix">
                                            <h4>Salim Rana</h4>
                                            <span>2016 15 July</span>
                                            <a href="#"><i class="zmdi zmdi-mail-reply-all"></i></a>
                                            <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby. at Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</p>
                                        </div>
                                    </div>
                                    <ul class="comment-list">
                                        <li>
                                            <div class="sin-comment">
                                                <div class="image float-left"><img src="img/comment/2.jpg" alt="" /></div>
                                                <div class="content fix">
                                                    <h4>Momen Bhuiyan</h4>
                                                    <span>2016 15 July</span>
                                                    <a href="#"><i class="zmdi zmdi-mail-reply-all"></i></a>
                                                    <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical the four loko.Tumblr letterpress iPhone vegan retro selvage literally</p>
                                                </div>
                                            </div>
                                            <ul class="comment-list">
                                                <li>
                                                    <div class="sin-comment">
                                                        <div class="image float-left"><img src="img/comment/3.jpg" alt="" /></div>
                                                        <div class="content fix">
                                                            <h4>M S Newaz</h4>
                                                            <span>2016 15 July</span>
                                                            <a href="#"><i class="zmdi zmdi-mail-reply-all"></i></a>
                                                            <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes And at son ethical the our four loko.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="sin-comment">
                                        <div class="image float-left"><img src="img/comment/4.jpg" alt="" /></div>
                                        <div class="content fix">
                                            <h4>N Sharif</h4>
                                            <span>2016 15 July</span>
                                            <a href="#"><i class="zmdi zmdi-mail-reply-all"></i></a>
                                            <p>Shabby chic selfies pickled Tumblr letter press iPhone. Wolf vegan retro selvage lite rally Wes Anderson ethical four our aloko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx convut to lomo.Shabby.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comments-form fix">
                            <h3>leave a comment</h3>
                            <form action="#">
                                <div class="input-box-2 fix">
                                    <div class="input-box float-left">
                                        <input id="name" placeholder="Name*" type="text">
                                    </div>
                                    <div class="input-box float-left">
                                        <input placeholder="E-mail*" type="text">
                                    </div>
                                </div>
                                <div class="input-box review-box fix">
                                    <textarea placeholder="Message*"></textarea>
                                </div>
                                <div class="input-box submit-box text-center fix">
                                    <input value="submit comment" type="submit">
                                </div>
                            </form>
                        </div>
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
    @yield('blogDetailsPage')
@endsection

@section('javascript')
    <!-- Particles Active JS
============================================ -->
    <script src="{{asset('js/app.js')}}"></script>
@endsection