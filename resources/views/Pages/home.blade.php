@extends('base')

@section('title')
    HOME
@endsection

@section('preloader')
    <!-- Pre Loader
============================================ -->
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>
@endsection

@section('slider')
    <!-- Home Slider
    ============================================ -->
    <div class="slider-area-2 top-header-space-2 ">
        <div id="mainSlider-2" class="nivoSlider slider-image">
            <a href="#"><img src="{{asset('img/slider/3.jpg')}}" alt="main slider" title="#htmlcaption1"/></a>
            <a href="#"><img src="{{asset('img/slider/4.jpg')}}" alt="main slider" title="#htmlcaption2"/></a>
        </div>
        <div id="htmlcaption1" class="nivo-html-caption">
            <div class="slide-text container">
                <div class="middle-text text-right">
                    <h1 class="cap-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">2016</h1>
                    <h2 class="cap-sub-title wow fadeInLeft" data-wow-duration=".9s" data-wow-delay="1.5s">SUPREME DESIGN COLLECTION</h2>
                    <p class="cap-dec wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="2.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br />Lorem ipsum dolor sit amet labore et dolore</p>
                    <a href="#" class="cap-readmore wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="3s">Shop Now</a>
                </div>
            </div>
        </div>
        <div id="htmlcaption2" class="nivo-html-caption">
            <div class="slide-text container">
                <div class="middle-text text-left">
                    <h1 class="cap-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">2016</h1>
                    <h2 class="cap-sub-title wow fadeInRight" data-wow-duration=".9s" data-wow-delay="1.5s">SUPREME DESIGN COLLECTION</h2>
                    <p class="cap-dec wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="2.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br />Lorem ipsum dolor sit amet labore et dolore</p>
                    <a href="#" class="cap-readmore wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="3s">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--
These fields are components of container section :
    -   bannerArea
    -   productArea
    -   arrivalArea
    -   mostViewProductArea
    -   miniProductArea
    -   blogArea
    -   shippingArea
--}}
@section('bannerArea')
    <!-- Banner Area
    ============================================ -->
    <div class="banner-area-2  pb-90 clearfix">
        <!-- Single Banner -->
        <div class="sin-banner-2 col-sm-4 col-xs-12">
            <img src="{{asset('img/banner/7.jpg')}}" alt="banner" />
            <div class="banner-content-2 right">
                <h1>2016</h1>
                <h4>brand new</h4>
                <h2>collection</h2>
                <a href="#">shop now</a>
            </div>
        </div>
        <!-- Single Banner -->
        <a href="#" class="sin-banner-2 col-sm-4 col-xs-12">
            <img src="{{asset('img/banner/8.jpg')}}" alt="banner" />
            <div class="banner-content-2 center">
                <h1>sale off</h1>
                <h2>up to 20%</h2>
            </div>
        </a>
        <!-- Single Banner -->
        <div class="sin-banner-2 col-sm-4 col-xs-12">
            <img src="{{asset('img/banner/9.jpg')}}" alt="banner" />
            <div class="banner-content-2 left">
                <h1>2016</h1>
                <h4>top trendy</h4>
                <h2>collection</h2>
                <a href="#">shop now</a>
            </div>
        </div>
    </div>
@endsection

@section('productArea')
    <!-- Products Area
    ============================================ -->
    <div class="products-area  pb-40">
        <div class="container">
            <div class="row">
                <ul class="product-tab-list col-xs-12 text-center mb-50">
                    <li><a href="#new-arrivals" data-toggle="tab">New Arrivals</a></li>
                    <li class="active"><a href="#popular-product" data-toggle="tab">Popular Product</a></li>
                    <li><a href="#best-seller" data-toggle="tab">Best Seller</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="product-tab-content tab-content">
                    <div class="product-tab tab-pane" id="new-arrivals">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">new</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/2.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/6.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">sale</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/4.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">new</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/5.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/6.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">sale</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/7.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/8.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/1.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab tab-pane active" id="popular-product">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/1.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">new</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/2.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/6.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">sale</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/4.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">new</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/5.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/6.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">sale</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/7.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/8.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab tab-pane" id="best-seller">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/6.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">sale</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/4.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">new</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/5.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/6.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">sale</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/7.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/8.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/1.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="sin-product">
                                <span class="pro-label">new</span>
                                <div class="pro-image fix">
                                    <a href="#" class="image"><img src="{{asset('img/product/2.jpg')}}" alt="" /></a>
                                    <div class="pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details text-center">
                                    <div class="top fix">
                                        <p class="pro-cat float-left">chair</p>
                                        <p class="pro-ratting float-right">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <span>(24)</span>
                                        </p>
                                    </div>
                                    <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                    <h3 class="pro-price">
                                        <span class="new">$40.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('arrivalArea')
    <!-- Arrival Area
    ============================================ -->
    <div class="arrival-area overlay  pt-90">
        <div class="container">
            <div class="row">
                <div class="section-title white text-center mb-50 col-xs-12">
                    <h2>Arrives This Month</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="arrival-slider">
                        <div class="single-arrival">
                            <div class="arrival-image col-md-5 col-xs-12">
                                <img src="{{asset('img/arrival/2.jpg')}}" alt="arrival" />
                            </div>
                            <div class="arrival-content-2 text-left col-md-7 col-xs-12">
                                <h3><a href="#">Anika Modern Sofa</a></h3>
                                <div class="arrival-price-ratting fix">
                                    <h3>$40.00</h3>
                                    <p class="pro-ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                        <span>(24)</span>
                                    </p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullas amco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                <a href="#"><i class="zmdi zmdi-shopping-cart"></i>add to cart</a>
                            </div>
                        </div>
                        <div class="single-arrival">
                            <div class="arrival-image col-md-5 col-xs-12">
                                <img src="{{asset('img/arrival/1.jpg')}}" alt="arrival" />
                            </div>
                            <div class="arrival-content-2 text-left col-md-7 col-xs-12">
                                <h3><a href="#">Anika Modern Sofa</a></h3>
                                <div class="arrival-price-ratting fix">
                                    <h3>$40.00</h3>
                                    <p class="pro-ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                        <span>(24)</span>
                                    </p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullas amco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                <a href="#"><i class="zmdi zmdi-shopping-cart"></i>add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('mostViewProductArea')
    <!-- Most View Product Area
    ============================================ -->
    <div class="most-view-product-area  pb-75 fix">
        <div class="section-title black text-center mb-35 col-xs-12">
            <h2>Most Viewd Product</h2>
        </div>
        <div class="product-slider product-slider-6 plr-60">
            <div class="col-xs-12">
                <div class="sin-product">
                    <span class="pro-label">new</span>
                    <div class="pro-image fix">
                        <a href="#" class="image"><img src="{{asset('img/product/2.jpg')}}" alt="" /></a>
                        <div class="pro-action">
                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                    <div class="pro-details text-center">
                        <div class="top fix">
                            <p class="pro-cat float-left">chair</p>
                            <p class="pro-ratting float-right">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <span>(24)</span>
                            </p>
                        </div>
                        <a href="#" class="pro-title">Wooden Furniture Chair</a>
                        <h3 class="pro-price">
                            <span class="new">$40.00</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="sin-product">
                    <div class="pro-image fix">
                        <a href="#" class="image"><img src="{{asset('img/product/6.jpg')}}" alt="" /></a>
                        <div class="pro-action">
                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                    <div class="pro-details text-center">
                        <div class="top fix">
                            <p class="pro-cat float-left">chair</p>
                            <p class="pro-ratting float-right">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <span>(24)</span>
                            </p>
                        </div>
                        <a href="#" class="pro-title">Wooden Furniture Chair</a>
                        <h3 class="pro-price">
                            <span class="new">$40.00</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="sin-product">
                    <span class="pro-label">sale</span>
                    <div class="pro-image fix">
                        <a href="#" class="image"><img src="{{asset('img/product/4.jpg')}}" alt="" /></a>
                        <div class="pro-action">
                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                    <div class="pro-details text-center">
                        <div class="top fix">
                            <p class="pro-cat float-left">chair</p>
                            <p class="pro-ratting float-right">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <span>(24)</span>
                            </p>
                        </div>
                        <a href="#" class="pro-title">Wooden Furniture Chair</a>
                        <h3 class="pro-price">
                            <span class="new">$40.00</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="sin-product">
                    <span class="pro-label">new</span>
                    <div class="pro-image fix">
                        <a href="#" class="image"><img src="{{asset('img/product/5.jpg')}}" alt="" /></a>
                        <div class="pro-action">
                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                    <div class="pro-details text-center">
                        <div class="top fix">
                            <p class="pro-cat float-left">chair</p>
                            <p class="pro-ratting float-right">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <span>(24)</span>
                            </p>
                        </div>
                        <a href="#" class="pro-title">Wooden Furniture Chair</a>
                        <h3 class="pro-price">
                            <span class="new">$40.00</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="sin-product">
                    <div class="pro-image fix">
                        <a href="#" class="image"><img src="{{asset('img/product/6.jpg')}}" alt="" /></a>
                        <div class="pro-action">
                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                    <div class="pro-details text-center">
                        <div class="top fix">
                            <p class="pro-cat float-left">chair</p>
                            <p class="pro-ratting float-right">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <span>(24)</span>
                            </p>
                        </div>
                        <a href="#" class="pro-title">Wooden Furniture Chair</a>
                        <h3 class="pro-price">
                            <span class="new">$40.00</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="sin-product">
                    <span class="pro-label">sale</span>
                    <div class="pro-image fix">
                        <a href="#" class="image"><img src="{{asset('img/product/7.jpg')}}" alt="" /></a>
                        <div class="pro-action">
                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                    <div class="pro-details text-center">
                        <div class="top fix">
                            <p class="pro-cat float-left">chair</p>
                            <p class="pro-ratting float-right">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <span>(24)</span>
                            </p>
                        </div>
                        <a href="#" class="pro-title">Wooden Furniture Chair</a>
                        <h3 class="pro-price">
                            <span class="new">$40.00</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="sin-product">
                    <div class="pro-image fix">
                        <a href="#" class="image"><img src="{{asset('img/product/8.jpg')}}" alt="" /></a>
                        <div class="pro-action">
                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                    <div class="pro-details text-center">
                        <div class="top fix">
                            <p class="pro-cat float-left">chair</p>
                            <p class="pro-ratting float-right">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <span>(24)</span>
                            </p>
                        </div>
                        <a href="#" class="pro-title">Wooden Furniture Chair</a>
                        <h3 class="pro-price">
                            <span class="new">$40.00</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="sin-product">
                    <div class="pro-image fix">
                        <a href="#" class="image"><img src="{{asset('img/product/1.jpg')}}" alt="" /></a>
                        <div class="pro-action">
                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                    <div class="pro-details text-center">
                        <div class="top fix">
                            <p class="pro-cat float-left">chair</p>
                            <p class="pro-ratting float-right">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <span>(24)</span>
                            </p>
                        </div>
                        <a href="#" class="pro-title">Wooden Furniture Chair</a>
                        <h3 class="pro-price">
                            <span class="new">$40.00</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('miniProductArea')
    <!-- Mini Product Area
    ============================================ -->
    <div class="mini-product-area pb-75">
        <div class="container">
            <div class="row">
                <div class="mini-product-wrapper left col-md-4 col-sm-4 col-xs-12">
                    <h4 class="no-border">featured products</h4>
                    <div class="mini-product-slider">
                        <div class="mini-product-item fix">
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/1.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/2.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/3.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="mini-product-item fix">
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/4.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/5.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/6.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-countdown-wrapper col-md-4 col-sm-4 col-xs-12">
                    <a href="#">
                        <img src="{{asset('img/banner/10.jpg')}}" alt="banner" />
                        <div class="countdown-banner-content center">
                            <h1>best</h1>
                            <h2>brand</h2>
                        </div>
                        <div class="banner-countdown" data-countdown="2017/12/01"></div>
                    </a>
                </div>
                <div class="mini-product-wrapper right col-md-4 col-sm-4 col-xs-12">
                    <h4 class="no-border">top rated products</h4>
                    <div class="mini-product-slider">
                        <div class="mini-product-item fix">
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/7.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/8.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="img/mini-product/9.jpg" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="mini-product-item fix">
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/1.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/2.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="sin-mini-product clearfix">
                                <div class="image float-left fix">
                                    <a href="#"><img src="{{asset('img/mini-product/3.jpg')}}" alt="" /></a>
                                    <div class="mini-pro-action">
                                        <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content text-center fix">
                                    <a href="#" class="title">Dummy Product Name</a>
                                    <p class="ratting">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </p>
                                    <h3 class="price fix">
                                        <span class="new">$185.00</span>
                                        <span class="old">$200.00</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('blogArea')
    <!-- Blog Area
    ============================================ -->
    <div class="blog-area pb-90">
        <div class="container">
            <div class="row">
                <div class="section-title black text-center mb-50 col-xs-12">
                    <h2>recent blog post</h2>
                </div>
            </div>
            <div class="row">
                <div class="sin-blog">
                    <div class="blog-image col-md-6 col-xs-12"><a href="#"><img src="{{asset('img/blog/1.jpg')}}" alt="" /></a></div>
                    <div class="blog-content content-left col-md-6 col-xs-12">
                        <div class="blog-content-wrapper">
                            <span class="blog-date"><i class="zmdi zmdi-time"></i> Date : 26 oct 2016</span>
                            <h4 class="blog-title"><a href="#">the best Blog Post Dummy Title 2016</a></h4>
                            <p>Aliqua. Ut enim ad minim veniam, quis nos trud exer citation ullamco laboris a nisi ut aliquip exat commodo conse quat Aliqua. Ut enim ad minim veniam, be quis nostrud exercitation ullamco labo ris nisi ut aliquip exat comm odo Ut  to enim ad minim veniam, be quis nostrud</p>
                            <div class="blog-foot fix">
                                <a href="#" class="read-more">read more<i class="zmdi zmdi-long-arrow-right"></i></a>
                                <div class="blog-meta float-right">
                                    <a href="#"><i class="zmdi zmdi-account"></i> Anika Mollik</a>
                                    <a href="#"><i class="zmdi zmdi-favorite"></i> 20 Likes</a>
                                    <a href="#"><i class="zmdi zmdi-comments"></i> 02 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sin-blog">
                    <div class="blog-image col-md-6 col-xs-12 float-right"><a href="#"><img src="{{asset('img/blog/2.jpg')}}" alt="" /></a></div>
                    <div class="blog-content content-right col-md-6 col-xs-12">
                        <div class="blog-content-wrapper">
                            <span class="blog-date"><i class="zmdi zmdi-time"></i> Date : 26 oct 2016</span>
                            <h4 class="blog-title"><a href="#">the best Blog Post Dummy Title 2016</a></h4>
                            <p>Aliqua. Ut enim ad minim veniam, quis nos trud exer citation ullamco laboris a nisi ut aliquip exat commodo conse quat Aliqua. Ut enim ad minim veniam, be quis nostrud exercitation ullamco labo ris nisi ut aliquip exat comm odo Ut  to enim ad minim veniam, be quis nostrud</p>
                            <div class="blog-foot fix">
                                <a href="#" class="read-more">read more<i class="zmdi zmdi-long-arrow-right"></i></a>
                                <div class="blog-meta float-right">
                                    <a href="#"><i class="zmdi zmdi-account"></i> Anika Mollik</a>
                                    <a href="#"><i class="zmdi zmdi-favorite"></i> 20 Likes</a>
                                    <a href="#"><i class="zmdi zmdi-comments"></i> 02 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('shippingArea')
    <!-- Shipping Area
    ============================================ -->
    <div class="shipping-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="shipping-wrapper-2 overlay">
                        <!-- Single Shipping -->
                        <div class="sin-shipping-2 text-center">
                            <div class="sin-ship-2-wrap">
                                <i class="zmdi zmdi-headset-mic"></i>
                                <h4>online SUPPORT</h4>
                                <p>Text of the printing and tysett ing industry. Lorem Ipsum </p>
                            </div>
                        </div>
                        <!-- Single Shipping -->
                        <div class="sin-shipping-2 text-center">
                            <div class="sin-ship-2-wrap">
                                <i class="zmdi zmdi-money"></i>
                                <h4>MONEY BACK</h4>
                                <p>Text of the printing and tysett ing industry. Lorem Ipsum </p>
                            </div>
                        </div>
                        <!-- Single Shipping -->
                        <div class="sin-shipping-2 text-center">
                            <div class="sin-ship-2-wrap">
                                <i class="zmdi zmdi-car"></i>
                                <h4>FREE shipping</h4>
                                <p>Text of the printing and tysett ing industry. Lorem Ipsum </p>
                            </div>
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

    @yield('productArea')

    @yield('arrivalArea')

    @yield('mostViewProductArea')

    @yield('miniProductArea')

    @yield('blogArea')

    @yield('shippingArea')

@endsection