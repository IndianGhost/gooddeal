@extends('base')

@section('title')
    shop
@endsection

@section('bannerArea')
    <!-- Page Banner Area
============================================ -->
    <div id="page-banner" class="page-banner-area top-header-space-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-banner text-center"><h2>Shop Grid Left Sidebar</h2></div>
                    <ul class="breadcrumbs">
                        <li><a href="#">home</a></li>
                        <li><span>Shop Grid Left Sidebar</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('shopPage')
    <!-- Shop Page
    ============================================ -->
    <div class="page-area pb-90 pt-90">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12 float-right">
                    <div class="row">
                        <!-- Shop Top Bar -->
                        <div class="shop-top-bar text-center mb-50 col-xs-12">
                            <!-- Product View Mode -->
                            <ul class="view-mode float-left text-left">
                                <li class="active"><a href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-apps"></i></a></li>
                                <li><a href="#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                            </ul>
                            <!-- Product Short By -->
                            <div class="pro-short-by text-left">
                                <p>SHORT BY</p>
                                <select>
                                    <option value="1">Default</option>
                                    <option value="2">Feature</option>
                                    <option value="3">Best Selling</option>
                                    <option value="4">Alphabetically, A-Z</option>
                                    <option value="5">Alphabetically, Z-A</option>
                                    <option value="6">Price, low to high</option>
                                    <option value="7">Price, high to low</option>
                                    <option value="8">Date, new to old</option>
                                    <option value="9">Date, old to new</option>
                                </select>
                            </div>
                            <!-- Product Showing Per Page -->
                            <div class="pro-showing float-right text-left">
                                <p>showing</p>
                                <select>
                                    <option value="1">16</option>
                                    <option value="2">20</option>
                                    <option value="3">24</option>
                                    <option value="4">28</option>
                                    <option value="5">32</option>
                                </select>
                            </div>
                        </div>
                        <div class="product-tab-content tab-content">
                            <div class="product-tab tab-pane active" id="grid-view">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <span class="pro-label">new</span>
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/2.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/6.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <span class="pro-label">sale</span>
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/4.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <span class="pro-label">new</span>
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/5.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/6.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <span class="pro-label">sale</span>
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/7.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/8.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/1.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <span class="pro-label">new</span>
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/2.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/6.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <span class="pro-label">sale</span>
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/4.jpg" alt="" /></a>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="sin-product">
                                        <span class="pro-label">new</span>
                                        <div class="pro-image fix">
                                            <a href="#" class="image"><img src="img/product/5.jpg" alt="" /></a>
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
                            <div class="product-tab tab-pane" id="list-view">
                                <div class="sin-list-product clearfix">
                                    <div class="pro-image col-lg-4 col-sm-5 col-xs-12">
                                        <a href="#" class="image fix"><img src="img/product/1.jpg" alt="" /></a>
                                        <div class="pro-action">
                                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-pro-details col-lg-8 col-sm-7 col-xs-12">
                                        <div class="top fix">
                                            <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                            <p class="pro-ratting float-right">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <span>(24)</span>
                                            </p>
                                        </div>
                                        <h3 class="pro-price">
                                            <span class="new">$56.20</span>
                                            <span class="old">$80.00</span>
                                        </h3>
                                        <div class="list-pro-dec">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation ullaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure of dolor in reprehenderit in the voluptate </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sin-list-product clearfix">
                                    <div class="pro-image col-lg-4 col-sm-5 col-xs-12">
                                        <span class="pro-label">new</span>
                                        <a href="#" class="image fix"><img src="img/product/2.jpg" alt="" /></a>
                                        <div class="pro-action">
                                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-pro-details col-lg-8 col-sm-7 col-xs-12">
                                        <div class="top fix">
                                            <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                            <p class="pro-ratting float-right">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <span>(24)</span>
                                            </p>
                                        </div>
                                        <h3 class="pro-price">
                                            <span class="new">$56.20</span>
                                            <span class="old">$80.00</span>
                                        </h3>
                                        <div class="list-pro-dec">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation ullaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure of dolor in reprehenderit in the voluptate </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sin-list-product clearfix">
                                    <div class="pro-image col-lg-4 col-sm-5 col-xs-12">
                                        <a href="#" class="image fix"><img src="img/product/6.jpg" alt="" /></a>
                                        <div class="pro-action">
                                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-pro-details col-lg-8 col-sm-7 col-xs-12">
                                        <div class="top fix">
                                            <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                            <p class="pro-ratting float-right">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <span>(24)</span>
                                            </p>
                                        </div>
                                        <h3 class="pro-price">
                                            <span class="new">$56.20</span>
                                            <span class="old">$80.00</span>
                                        </h3>
                                        <div class="list-pro-dec">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation ullaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure of dolor in reprehenderit in the voluptate </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sin-list-product clearfix">
                                    <div class="pro-image col-lg-4 col-sm-5 col-xs-12">
                                        <span class="pro-label">new</span>
                                        <a href="#" class="image fix"><img src="img/product/7.jpg" alt="" /></a>
                                        <div class="pro-action">
                                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-pro-details col-lg-8 col-sm-7 col-xs-12">
                                        <div class="top fix">
                                            <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                            <p class="pro-ratting float-right">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <span>(24)</span>
                                            </p>
                                        </div>
                                        <h3 class="pro-price">
                                            <span class="new">$56.20</span>
                                            <span class="old">$80.00</span>
                                        </h3>
                                        <div class="list-pro-dec">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation ullaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure of dolor in reprehenderit in the voluptate </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sin-list-product clearfix">
                                    <div class="pro-image col-lg-4 col-sm-5 col-xs-12">
                                        <a href="#" class="image fix"><img src="img/product/9.jpg" alt="" /></a>
                                        <div class="pro-action">
                                            <a href="#" class="action-btn cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                            <a href="#" class="action-btn wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" class="action-btn quick-view"><i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-pro-details col-lg-8 col-sm-7 col-xs-12">
                                        <div class="top fix">
                                            <a href="#" class="pro-title">Wooden Furniture Chair</a>
                                            <p class="pro-ratting float-right">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <span>(24)</span>
                                            </p>
                                        </div>
                                        <h3 class="pro-price">
                                            <span class="new">$56.20</span>
                                            <span class="old">$80.00</span>
                                        </h3>
                                        <div class="list-pro-dec">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation ullaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure of dolor in reprehenderit in the voluptate </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Bottom Bar -->
                        <div class="shop-top-bar text-center col-xs-12">
                            <!-- Product Pagination -->
                            <div class="pagination float-left">
                                <p>Showing 1 - 16 of 97 items</p>
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- Product Showing Per Page -->
                            <div class="pro-showing float-right text-left">
                                <p>showing</p>
                                <select>
                                    <option value="1">16</option>
                                    <option value="2">20</option>
                                    <option value="3">24</option>
                                    <option value="4">28</option>
                                    <option value="5">32</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-wrapper col-md-3 col-xs-12">
                    <div class="single-sidebar">
                        <div class="sidebar-title"><h4>Categories</h4></div>
                        <ul class="cat-treeview">
                            <li class="closed"><a href="#">furniture</a>
                                <ul>
                                    <li><a href="#">Table</a></li>
                                    <li><a href="#">Lamp</a></li>
                                    <li><a href="#">Tops</a></li>
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">T-shirt</a></li>
                                </ul>
                            </li>
                            <li class="open"><a href="#">Chair</a>
                                <ul>
                                    <li><a href="#">Table</a></li>
                                    <li><a href="#">Lamp</a></li>
                                    <li><a href="#">Tops</a></li>
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">T-shirt</a></li>
                                </ul>
                            </li>
                            <li class="closed"><a href="#">Accessories</a>
                                <ul>
                                    <li><a href="#">Table</a></li>
                                    <li><a href="#">Lamp</a></li>
                                    <li><a href="#">Tops</a></li>
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">T-shirt</a></li>
                                </ul>
                            </li>
                            <li class="closed"><a href="#">Top Brands</a>
                                <ul>
                                    <li><a href="#">Table</a></li>
                                    <li><a href="#">Lamp</a></li>
                                    <li><a href="#">Tops</a></li>
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">T-shirt</a></li>
                                </ul>
                            </li>
                            <li class="closed"><a href="#">sofa</a>
                                <ul>
                                    <li><a href="#">Table</a></li>
                                    <li><a href="#">Lamp</a></li>
                                    <li><a href="#">Tops</a></li>
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">T-shirt</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="single-sidebar">
                        <div class="sidebar-title"><h4>Price</h4></div>
                        <div class="price-slider-wrap">
                            <div id="slider-range"></div>
                            <div id ="amount">
                                <input type ="text" name ="first_price" class="first_price" />
                                <span></span>
                                <input type ="text" name ="last_price" class="last_price"/>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <div class="sidebar-title"><h4>Size</h4></div>
                        <div class="size-wrap">
                            <a href="#">s</a>
                            <a href="#">m</a>
                            <a href="#">l</a>
                            <a href="#">xl</a>
                            <a href="#">xxl</a>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <div class="sidebar-title"><h4>Color</h4></div>
                        <div class="color-wrap">
                            <a href="#" class="color-1"><span></span></a>
                            <a href="#" class="color-2"><span></span></a>
                            <a href="#" class="color-3 active"><span></span></a>
                            <a href="#" class="color-4"><span></span></a>
                            <a href="#" class="color-5"><span></span></a>
                            <a href="#" class="color-6"><span></span></a>
                            <a href="#" class="color-7"><span></span></a>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <div class="sidebar-title"><h4>filter by brands</h4></div>
                        <ul>
                            <li><a href="#">rayban</a></li>
                            <li><a href="#">denim</a></li>
                            <li><a href="#">polo</a></li>
                            <li><a href="#">nike</a></li>
                            <li><a href="#">yellow</a></li>
                            <li><a href="#">arong</a></li>
                        </ul>
                    </div>
                    <div class="single-sidebar">
                        <div class="sidebar-title"><h4>recent items</h4></div>
                        <div class="sidebar-recent-item fix">
                            <a href="#" class="image float-left"><img src="img/sidebar-item/1.jpg" alt="" /></a>
                            <div class="content text-center fix">
                                <a href="#">Product Name</a>
                                <p class="ratting">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                </p>
                                <h4>$185.00</h4>
                            </div>
                        </div>
                        <div class="sidebar-recent-item fix">
                            <a href="#" class="image float-left"><img src="img/sidebar-item/2.jpg" alt="" /></a>
                            <div class="content text-center fix">
                                <a href="#">Product Name</a>
                                <p class="ratting">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                </p>
                                <h4>$185.00</h4>
                            </div>
                        </div>
                        <div class="sidebar-recent-item fix">
                            <a href="#" class="image float-left"><img src="img/sidebar-item/3.jpg" alt="" /></a>
                            <div class="content text-center fix">
                                <a href="#">Product Name</a>
                                <p class="ratting">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                </p>
                                <h4>$185.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('container')
    @yield('bannerArea')
    @yield('shopPage')
@endsection

@section('javascript')
    <!-- Particles Active JS
============================================ -->
    <script src="{{asset('js/app.js')}}"></script>
@endsection