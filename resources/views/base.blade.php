<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <meta name="description" content=""/>
    <meta name="author" content="achraf bellaali"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"/>

    <!-- CSS -->
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <!-- Icon Font CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}"/>
    <!-- Plugins Import CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/import.css')}}"/>
    <!-- Style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('style.css')}}"/>
    <!-- Responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>

    <link href="{{asset('css/color/color-1.css')}}" rel="stylesheet"/>

    <!-- Modernizer JS
    ============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    @yield('style')

</head>
<body>
    @yield('preloader')
<!-- Body main wrapper start -->
<div class="wrapper bg-white fix">

    <!-- Header 4
    ============================================ -->
    <div class="header-area header-area-4  clearfix">
        <!-- Header Top 4 -->
        <div class="header-top header-top-4">
            <div class="container">
                <div class="row">
                    <!-- Header Top Left 4 -->
                    <div class="header-top-left header-top-left-4 col-xs-4 text-left">
                        <!-- Header Search -->
                        <div class="header-search header-search-4 float-left">
                            <button data-toggle="dropdown" class="search-toggle"><i class="zmdi zmdi-search"></i></button>
                            <div class="search-dropdown dropdown-menu left">
                                <form action="#">
                                    <input type="text" placeholder="Search Product..." />
                                    <input type="submit" class="search-submit">
                                </form>
                            </div>
                        </div>
                        <!-- Language & Currency -->
                        <div class="language-currency language-currency-4 float-left hidden-xs">
                            <ul class="language">
                                <li><a href="#" data-toggle="dropdown">eng</a>
                                    <ul class="dropdown-menu left">
                                        <li><a href="#">Bengali</a></li>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="currency">
                                <li><a href="#" data-toggle="dropdown">usd</a>
                                    <ul class="dropdown-menu left">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">Uero</a></li>
                                        <li><a href="#">Taka</a></li>
                                        <li><a href="#">Pound</a></li>
                                        <li><a href="#">Rupi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Center 4 -->
                    <div class="header-top-center header-top-center-4 col-xs-4 text-center">
                        <a href="{{route('home')}}" class="logo-2"><img src="{{asset('img/logo.png')}}" alt="logo" /></a>
                    </div>
                    <!-- Header Top Right 4 -->
                    <div class="header-top-right header-top-right-4 col-xs-4 text-right">
                        <!-- Account Menu -->
                        <div class="account-menu account-menu-6 float-right hidden-lg hidden-md">
                            <button data-toggle="dropdown" class="acc-menu-toggle"><i class="zmdi zmdi-settings"></i></button>
                            <ul class="acc-menu-dropdown dropdown-menu right">
                                <li><a href="#">account</a></li>
                                <li><a href="#">check out</a></li>
                                <li><a href="#">shop</a></li>
                                <li><a href="#">wishlist</a></li>
                                <li><a href="#">log in</a></li>
                                <li><a href="#">cart</a></li>
                            </ul>
                        </div>
                        <!-- Mini Cart -->
                        <div class="mini-cart-wrapper mini-cart-wrapper-4 float-right">
                            <a href="#" data-toggle="dropdown" class="mini-cart-btn"><span><i class="zmdi zmdi-shopping-cart"></i><span class="cart-number">2</span></span></a>
                            <div class="mini-cart dropdown-menu right">
                                <div class="mini-cart-product fix">
                                    <a href="#" class="image"><img src="{{asset('img/mini-cart/1.jpg')}}" alt="" /></a>
                                    <div class="content fix">
                                        <a href="#" class="title">wooden furniture</a>
                                        <p>Color: Black</p>
                                        <p>Size: SL</p>
                                        <button class="remove"><i class="zmdi zmdi-close"></i></button>
                                    </div>
                                </div>
                                <div class="mini-cart-product fix">
                                    <a href="#" class="image"><img src="{{asset('img/mini-cart/2.jpg')}}" alt="" /></a>
                                    <div class="content fix">
                                        <a href="#" class="title">wooden furniture</a>
                                        <p>Color: Black</p>
                                        <p>Size: SL</p>
                                        <button class="remove"><i class="zmdi zmdi-close"></i></button>
                                    </div>
                                </div>
                                <div class="mini-cart-product fix">
                                    <a href="#" class="image"><img src="{{asset('img/mini-cart/3.jpg')}}" alt="" /></a>
                                    <div class="content fix">
                                        <a href="#" class="title">wooden furniture</a>
                                        <p>Color: Black</p>
                                        <p>Size: SL</p>
                                        <button class="remove"><i class="zmdi zmdi-close"></i></button>
                                    </div>
                                </div>
                                <div class="mini-cart-checkout text-center">
                                    <a href="#">checkout</a>
                                </div>
                            </div>
                        </div>
                        <!-- Header Top Link -->
                        <div class="header-top-link float-right hidden-sm hidden-xs">
                            <a href="#">account</a>
                            <a href="#">check out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom 4 -->
        <div class="header-bottom sticky header-bottom sticky-4">
            <div class="container">
                <div class="row">
                    <!-- Menu Wrapper 4 -->
                    <div class="menu-wrapper menu-wrapper-4 text-center col-xs-12 hidden-sm hidden-xs">
                        <div class="menu menu-4">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <a href="{{route('home')}}">home</a>
                                    </li>
                                    <li><a href="#">element</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Header</a>
                                                <ul class="sub-menu">
                                                    <li><a href="header-1.html">Header 1</a></li>
                                                    <li><a href="header-2.html">Header 2</a></li>
                                                    <li><a href="header-3.html">Header 3</a></li>
                                                    <li><a href="header-4.html">Header 4</a></li>
                                                    <li><a href="header-5.html">Header 5</a></li>
                                                    <li><a href="header-6.html">Header 6</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Footer</a>
                                                <ul class="sub-menu">
                                                    <li><a href="footer-1.html">Footer 1</a></li>
                                                    <li><a href="footer-2.html">Footer 2</a></li>
                                                    <li><a href="footer-3.html">Footer 3</a></li>
                                                    <li><a href="footer-4.html">Footer 4</a></li>
                                                    <li><a href="footer-5.html">Footer 5</a></li>
                                                    <li><a href="footer-6.html">Footer 6</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="alerts.html">Alerts</a></li>
                                            <li><a href="banner.html">Banner</a></li>
                                            <li><a href="button.html">Button</a></li>
                                            <li><a href="collapse.html">Collapse</a></li>
                                            <li><a href="progress.html">Progress bar</a></li>
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="tab.html">Tab</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="image-gallery.html">Image gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <div class="mega-menu">
                                            <ul>
                                                <li><a href="#">table's</a></li>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Collections</a></li>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">jens pant’s</a></li>
                                                <li><a href="#">sports shoes</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">chair's</a></li>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Collections</a></li>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">jens pant’s</a></li>
                                                <li><a href="#">sports shoes</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">accessaories</a></li>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Collections</a></li>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">jens pant’s</a></li>
                                                <li><a href="#">sports shoes</a></li>
                                            </ul>
                                            <div class="menu-banner">
                                                <a href="#">
                                                    <img src="{{asset('img/menu-banner.jpg')}}" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Shop pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shop grid</a></li>
                                                    <li><a href="shop-list.html">Shop list</a></li>
                                                    <li><a href="shop-left-sidebar.html">Shop grid left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop grid right sidebar</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">Shop list Left sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop list right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Product details</a>
                                                <ul class="sub-menu">
                                                    <li><a href="product-details-1.html">Product details V1</a></li>
                                                    <li><a href="product-details-2.html">Product details V2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog default</a></li>
                                                    <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                                    <li><a href="blog-details.html">Blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="checkout.html">Check out</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('blog')}}">blog</a>
                                    </li>
                                    <li><a href="{{route('contact')}}">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu Wrapper 2 -->
                    <div class="mobile-menu-wrapper mobile-menu-wrapper-2 hidden-md hidden-lg col-xs-12">
                        <div class="mobile-menu mobile-menu-2">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <a href="{{route('home')}}">home</a>
                                    </li>
                                    <li><a href="#">element</a>
                                        <ul>
                                            <li><a href="#">Header</a>
                                                <ul>
                                                    <li><a href="header-1.html">Header 1</a></li>
                                                    <li><a href="header-2.html">Header 2</a></li>
                                                    <li><a href="header-3.html">Header 3</a></li>
                                                    <li><a href="header-4.html">Header 4</a></li>
                                                    <li><a href="header-5.html">Header 5</a></li>
                                                    <li><a href="header-6.html">Header 6</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Footer</a>
                                                <ul>
                                                    <li><a href="footer-1.html">Footer 1</a></li>
                                                    <li><a href="footer-2.html">Footer 2</a></li>
                                                    <li><a href="footer-3.html">Footer 3</a></li>
                                                    <li><a href="footer-4.html">Footer 4</a></li>
                                                    <li><a href="footer-5.html">Footer 5</a></li>
                                                    <li><a href="footer-6.html">Footer 6</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="alerts.html">Alerts</a></li>
                                            <li><a href="banner.html">Banner</a></li>
                                            <li><a href="button.html">Button</a></li>
                                            <li><a href="collapse.html">Collapse</a></li>
                                            <li><a href="progress.html">Progress bar</a></li>
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="tab.html">Tab</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="image-gallery.html">Image gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul>
                                            <li><a href="#">table's</a>
                                                <ul>
                                                    <li><a href="#">Blazers</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Collections</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                    <li><a href="#">jens pant’s</a></li>
                                                    <li><a href="#">sports shoes</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">chair's</a>
                                                <ul>
                                                    <li><a href="#">Blazers</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Collections</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                    <li><a href="#">jens pant’s</a></li>
                                                    <li><a href="#">sports shoes</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">accessaories</a>
                                                <ul>
                                                    <li><a href="#">Blazers</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Collections</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                    <li><a href="#">jens pant’s</a></li>
                                                    <li><a href="#">sports shoes</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="#">Shop pages</a>
                                                <ul>
                                                    <li><a href="shop.html">Shop grid</a></li>
                                                    <li><a href="shop-list.html">Shop list</a></li>
                                                    <li><a href="shop-left-sidebar.html">Shop grid left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop grid right sidebar</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">Shop list Left sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop list right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Product details</a>
                                                <ul>
                                                    <li><a href="product-details-1.html">Product details V1</a></li>
                                                    <li><a href="product-details-2.html">Product details V2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog default</a></li>
                                                    <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                                    <li><a href="blog-details.html">Blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="checkout.html">Check out</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('blog')}}">blog</a>
                                    </li>
                                    <li><a href="{{route('contact')}}">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('slider')

    @yield('container')

    <!-- Brand Area
    ============================================ -->
    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="brand-slider">
                        <div class="sin-brand"><img src="{{asset('img/brands/1.png')}}" alt="" /></div>
                        <div class="sin-brand"><img src="{{asset('img/brands/2.png')}}" alt="" /></div>
                        <div class="sin-brand"><img src="{{asset('img/brands/3.png')}}" alt="" /></div>
                        <div class="sin-brand"><img src="{{asset('img/brands/4.png')}}" alt="" /></div>
                        <div class="sin-brand"><img src="{{asset('img/brands/5.png')}}" alt="" /></div>
                        <div class="sin-brand"><img src="{{asset('img/brands/1.png')}}" alt="" /></div>
                        <div class="sin-brand"><img src="{{asset('img/brands/2.png')}}" alt="" /></div>
                        <div class="sin-brand"><img src="{{asset('img/brands/3.png')}}" alt="" /></div>
                        <div class="sin-brand"><img src="{{asset('img/brands/4.png')}}" alt="" /></div>
                        <div class="sin-brand"><img src="{{asset('img/brands/5.png')}}" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top Area
    ============================================ -->
    <div class="footer-top-area pb-70 pt-150">
        <div class="container">
            <div class="row">
                <div class="footer-contact col-md-4 col-sm-6 col-xs-12">
                    <img src="{{asset('img/logo-2.png')}}" alt="" />
                    <div><span>Address :</span> <p>28 Green Tower, Street Name, <br />New York City, USA</p></div>
                    <div><span>Cell-Phone :</span> <p>+8880 44338899</p></div>
                    <div><span>Email :</span> <a href="#">yourmail@outlook.com</a></div>
                    <div class="footer-social fix">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    </div>
                </div>
                <div class="footer-account col-md-2 col-sm-6 col-xs-12">
                    <h4>accounts</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">My Cart</a></li>
                        <li><a href="#">Sign In</a></li>
                        <li><a href="#">Check out</a></li>
                    </ul>
                </div>
                <div class="footer-shipping col-md-2 col-sm-6 col-xs-12">
                    <h4>shipping</h4>
                    <ul>
                        <li><a href="#">New Products</a></li>
                        <li><a href="#">Top Sellers</a></li>
                        <li><a href="#">Manufactirers</a></li>
                        <li><a href="#">Suppliers</a></li>
                        <li><a href="#">Specials</a></li>
                    </ul>
                </div>
                <div class="footer-newsletter col-md-4 col-sm-6 col-xs-12">
                    <h4>Email Newsletters</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incididunt.</p>
                    <form id="mc-form" class="mc-form" >
                        <input id="mc-email" type="email" autocomplete="off" placeholder="Enter Address..." />
                        <input id="mc-submit" type="submit" value="subscribe" />
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts text-centre">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div><!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area
    ============================================ -->
    <div class="footer-bottom-area pb-20 pt-20">
        <div class="container">
            <div class="row">
                <div class="copyright text-left col-sm-6 col-xs-12">
                    <p>Copyright &copy; 2016 <a href="http://hastech.company/" target="_blank">Hastech</a>. All Right Reserved.</p>
                </div>
                <div class="payment-method text-right col-sm-6 col-xs-12">
                    <img src="{{asset('img/payment/1.png')}}" alt="payment" />
                    <img src="{{asset('img/payment/2.png')}}" alt="payment" />
                    <img src="{{asset('img/payment/3.png')}}" alt="payment" />
                    <img src="{{asset('img/payment/4.png')}}" alt="payment" />
                    <img src="{{asset('img/payment/5.png')}}" alt="payment" />
                </div>
            </div>
        </div>
    </div>


</div>
<!-- Body main wrapper end -->


<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap JS
============================================ -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Body main wrapper end -->
<!-- Plugins JS
============================================ -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- Main JS
============================================ -->
<script src="{{asset('js/main.js')}}"></script>
@yield('javascript')
</body>
</html>
