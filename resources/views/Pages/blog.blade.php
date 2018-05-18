@extends('base')

@section('title')
    BLOG
@endsection

{{--
These fields are components of container section :
    -   bannerArea
    -   blogPageArea
--}}
@section('bannerArea')
    <!-- Page Banner Area
============================================ -->
    <div id="page-banner" class="page-banner-area top-header-space-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-banner text-center"><h2>Blog left sidebar</h2></div>
                    <ul class="breadcrumbs">
                        <li><a href="#">home</a></li>
                        <li><span>Blog left sidebar</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <canvas class="particles-js-canvas-el" width="1309" height="249" style="width: 100%; height: 100%;"></canvas>
    </div>
@endsection

@section('blogPageArea')
    <!-- Blog Page Area
============================================ -->
    <div class="blog-page-area pb-90 pt-90">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12 float-right">
                    <div class="row">
                        <div class="col-md-6 mb-40 col-xs-12">
                            <div class="sin-blog">
                                <div class="blog-image"><a href="#"><img src="{{asset('img/blog/1.jpg')}}" alt=""></a></div>
                                <div class="blog-content content-column">
                                    <div class="blog-content-wrapper">
                                        <span class="blog-date"><i class="zmdi zmdi-time"></i> Date : 26 oct 2016</span>
                                        <h4 class="blog-title"><a href="#">Blog Post Dummy Title</a></h4>
                                        <p>Aliqua. Ut enim ad minim veniam, quis nos trud exer the citation ullamco laboris a nisi veniam, quis nos trud exer the citation ullamco laboris a nisi.</p>
                                        <div class="blog-foot fix">
                                            <a href="{{route('readPost', 1)}}" class="read-more">read more<i class="zmdi zmdi-long-arrow-right"></i></a>
                                            <div class="blog-meta float-right">
                                                <a href="#"><i class="zmdi zmdi-account"></i> Mollik</a>
                                                <a href="#"><i class="zmdi zmdi-comments"></i> 02 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-40 col-xs-12">
                            <div class="sin-blog">
                                <div class="blog-image"><a href="#"><img src="{{asset('img/blog/3.jpg')}}" alt=""></a></div>
                                <div class="blog-content content-column">
                                    <div class="blog-content-wrapper">
                                        <span class="blog-date"><i class="zmdi zmdi-time"></i> Date : 26 oct 2016</span>
                                        <h4 class="blog-title"><a href="#">Blog Post Dummy Title</a></h4>
                                        <p>Aliqua. Ut enim ad minim veniam, quis nos trud exer the citation ullamco laboris a nisi veniam, quis nos trud exer the citation ullamco laboris a nisi.</p>
                                        <div class="blog-foot fix">
                                            <a href="{{route('readPost', 2)}}" class="read-more">read more<i class="zmdi zmdi-long-arrow-right"></i></a>
                                            <div class="blog-meta float-right">
                                                <a href="#"><i class="zmdi zmdi-account"></i> Mollik</a>
                                                <a href="#"><i class="zmdi zmdi-comments"></i> 02 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-40 col-xs-12">
                            <div class="sin-blog">
                                <div class="blog-image"><a href="#"><img src="{{asset('img/blog/4.jpg')}}" alt=""></a></div>
                                <div class="blog-content content-column">
                                    <div class="blog-content-wrapper">
                                        <span class="blog-date"><i class="zmdi zmdi-time"></i> Date : 26 oct 2016</span>
                                        <h4 class="blog-title"><a href="#">Blog Post Dummy Title</a></h4>
                                        <p>Aliqua. Ut enim ad minim veniam, quis nos trud exer the citation ullamco laboris a nisi veniam, quis nos trud exer the citation ullamco laboris a nisi.</p>
                                        <div class="blog-foot fix">
                                            <a href="{{route('readPost', 3)}}" class="read-more">read more<i class="zmdi zmdi-long-arrow-right"></i></a>
                                            <div class="blog-meta float-right">
                                                <a href="#"><i class="zmdi zmdi-account"></i> Mollik</a>
                                                <a href="#"><i class="zmdi zmdi-comments"></i> 02 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-40 col-xs-12">
                            <div class="sin-blog">
                                <div class="blog-image"><a href="#"><img src="{{asset('img/blog/2.jpg')}}" alt=""></a></div>
                                <div class="blog-content content-column">
                                    <div class="blog-content-wrapper">
                                        <span class="blog-date"><i class="zmdi zmdi-time"></i> Date : 26 oct 2016</span>
                                        <h4 class="blog-title"><a href="#">Blog Post Dummy Title</a></h4>
                                        <p>Aliqua. Ut enim ad minim veniam, quis nos trud exer the citation ullamco laboris a nisi veniam, quis nos trud exer the citation ullamco laboris a nisi.</p>
                                        <div class="blog-foot fix">
                                            <a href="{{route('readPost', 4)}}" class="read-more">read more<i class="zmdi zmdi-long-arrow-right"></i></a>
                                            <div class="blog-meta float-right">
                                                <a href="#"><i class="zmdi zmdi-account"></i> Mollik</a>
                                                <a href="#"><i class="zmdi zmdi-comments"></i> 02 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-40 col-xs-12">
                            <div class="sin-blog">
                                <div class="blog-image"><a href="#"><img src="{{asset('img/blog/5.jpg')}}" alt=""></a></div>
                                <div class="blog-content content-column">
                                    <div class="blog-content-wrapper">
                                        <span class="blog-date"><i class="zmdi zmdi-time"></i> Date : 26 oct 2016</span>
                                        <h4 class="blog-title"><a href="#">Blog Post Dummy Title</a></h4>
                                        <p>Aliqua. Ut enim ad minim veniam, quis nos trud exer the citation ullamco laboris a nisi veniam, quis nos trud exer the citation ullamco laboris a nisi.</p>
                                        <div class="blog-foot fix">
                                            <a href="{{route('readPost', 5)}}" class="read-more">read more<i class="zmdi zmdi-long-arrow-right"></i></a>
                                            <div class="blog-meta float-right">
                                                <a href="#"><i class="zmdi zmdi-account"></i> Mollik</a>
                                                <a href="#"><i class="zmdi zmdi-comments"></i> 02 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-40 col-xs-12">
                            <div class="sin-blog">
                                <div class="blog-image"><a href="#"><img src="{{asset('img/blog/6.jpg')}}" alt=""></a></div>
                                <div class="blog-content content-column">
                                    <div class="blog-content-wrapper">
                                        <span class="blog-date"><i class="zmdi zmdi-time"></i> Date : 26 oct 2016</span>
                                        <h4 class="blog-title"><a href="#">Blog Post Dummy Title</a></h4>
                                        <p>Aliqua. Ut enim ad minim veniam, quis nos trud exer the citation ullamco laboris a nisi veniam, quis nos trud exer the citation ullamco laboris a nisi.</p>
                                        <div class="blog-foot fix">
                                            <a href="{{route('readPost', 6)}}" class="read-more">read more<i class="zmdi zmdi-long-arrow-right"></i></a>
                                            <div class="blog-meta float-right">
                                                <a href="#"><i class="zmdi zmdi-account"></i> Mollik</a>
                                                <a href="#"><i class="zmdi zmdi-comments"></i> 02 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="pagination float-left">
                                <p>Showing 1 - 6 of 21 items</p>
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-wrapper col-md-3 col-xs-12">
                    <div class="single-sidebar">
                        <div class="sidebar-search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><i class="zmdi zmdi-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <div class="sidebar-title"><h4>Categories</h4></div>
                        <ul class="cat-treeview treeview">
                            <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">furniture</a>
                                <ul style="display: none;">
                                    <li><a href="#">Table</a></li>
                                    <li class="last"><a href="#">Lamp</a></li>
                                </ul>
                            </li>
                            <li class="open collapsable"><div class="hitarea open-hitarea collapsable-hitarea"></div><a href="#" class="">Chair</a>
                                <ul>
                                    <li><a href="#">Tops</a></li>
                                    <li class="last"><a href="#">Watch</a></li>
                                </ul>
                            </li>
                            <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">Accessories</a>
                                <ul style="display: none;">
                                    <li><a href="#">Watch</a></li>
                                    <li class="last"><a href="#">T-shirt</a></li>
                                </ul>
                            </li>
                            <li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea"></div><a href="#">Top Brands</a>
                                <ul style="display: none;">
                                    <li><a href="#">Lamp</a></li>
                                    <li class="last"><a href="#">Tops</a></li>
                                </ul>
                            </li>
                            <li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea"></div><a href="#" class="">sofa</a>
                                <ul style="display: none;">
                                    <li><a href="#">Table</a></li>
                                    <li class="last"><a href="#">T-shirt</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="single-sidebar">
                        <div class="sidebar-title"><h4>Latest post</h4></div>
                        <div class="sidebar-post">
                            <div class="sin-sidebar-post fix">
                                <a href="#" class="image float-left"><img src="{{asset('img/sidebar-post/1.jpg')}}" alt=""></a>
                                <div class="content fix">
                                    <a href="#">Blog image post</a>
                                    <p>10 August 2016</p>
                                </div>
                            </div>
                            <div class="sin-sidebar-post fix">
                                <a href="#" class="image float-left"><img src="{{asset('img/sidebar-post/2.jpg')}}" alt=""></a>
                                <div class="content fix">
                                    <a href="#">Blog image post</a>
                                    <p>10 August 2016</p>
                                </div>
                            </div>
                            <div class="sin-sidebar-post fix">
                                <a href="#" class="image float-left"><img src="{{asset('img/sidebar-post/3.jpg')}}" alt=""></a>
                                <div class="content fix">
                                    <a href="#">Blog image post</a>
                                    <p>10 August 2016</p>
                                </div>
                            </div>
                            <div class="sin-sidebar-post fix">
                                <a href="#" class="image float-left"><img src="{{asset('img/sidebar-post/4.jpg')}}" alt=""></a>
                                <div class="content fix">
                                    <a href="#">Blog image post</a>
                                    <p>10 August 2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <div class="sidebar-title"><h4>tags</h4></div>
                        <div class="sidebar-tags">
                            <a href="#">DESIGN</a>
                            <a href="#">INTERIOR</a>
                            <a href="#">VIDEO</a>
                            <a href="#">IMAGE</a>
                            <a href="#">GALLERY</a>
                            <a href="#">audio</a>
                            <a href="#">SOCIAL</a>
                            <a href="#">ART</a>
                            <a href="#">BRANDING</a>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <div class="sidebar-title"><h4>instagram feed</h4></div>
                        <div class="sidebar-instagram">
                            <a href="#"><img src="{{asset('img/instagram/1.jpg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/instagram/2.jpg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/instagram/3.jpg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/instagram/4.jpg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/instagram/5.jpg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/instagram/6.jpg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/instagram/7.jpg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/instagram/8.jpg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/instagram/9.jpg')}}" alt=""></a>
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
    @yield('blogPageArea')
@endsection

@section('javascript')
<!-- Particles Active JS
============================================ -->
<script src="{{asset('js/app.js')}}"></script>
@endsection