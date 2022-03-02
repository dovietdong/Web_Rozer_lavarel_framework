@extends('layout.main')

@section('title', 'Rozer-shop')

@section('shop')
<!-- Shop Category Area Start -->
<div class="shop-category-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <!-- Left Side start -->
                    <div class="shop-tab nav d-flex">
                        <a class="active" href="#shop-1" data-bs-toggle="tab">
                            <i class="fa fa-th"></i>
                        </a>
                        <a href="#shop-2" data-bs-toggle="tab">
                            <i class="fa fa-list"></i>
                        </a>
                        <p>There Are 17 Products.</p>
                    </div>
                    <!-- Left Side End -->
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap d-flex">
                        <div class="shot-product">
                            <p>Sort By:</p>
                        </div>
                        <div class="shop-select">
                            <select>
                                <option value="">Sort by newness</option>
                                <option value="">A to Z</option>
                                <option value=""> Z to A</option>
                                <option value="">In stock</option>
                            </select>
                        </div>
                    </div>
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area mt-35">
                    <!-- Shop Tab Content Start -->
                    <div class="tab-content jump">
                        <!-- Tab One Start -->
                        <div id="shop-1" class="tab-pane active">
                            <div class="row responsive-md-class responsive-xl-class responsive-lg-class">
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy
                                                    Quilted T..</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€18.90</li>
                                                    <li class="current-price">€34.21</li>
                                                    <li class="discount-price">-5%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/19.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Fresh
                                                    Foam Ka..</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€18.90</li>
                                                    <li class="current-price">€15.12</li>
                                                    <li class="discount-price">-20%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/10.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                    CORNER</span></a>
                                            <h2><a href="single-product.html" class="product-link">Brixton Patrol All
                                                    Terrain..</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/9.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                    CORNER</span></a>
                                            <h2><a href="single-product.html" class="product-link">Juicy Couture Tricot
                                                    Logo S..</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/6.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi
                                                    Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/8.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                    CORNAR</span></a>
                                            <h2><a href="single-product.html" class="product-link">Fila Locker Room
                                                    Varsit...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/9.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Water and Wind
                                                    Resista..</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/10.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/10.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Luxury Men's Slim
                                                    Fi...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€29.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/17.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/19.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Originals Kaval
                                                    Win...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/18.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/8.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Brixton Patrol All
                                                    Terra...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/11.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/12.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Madden by Steve
                                                    Madden C...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€11.90</li>
                                                    <li class="current-price">€10.12</li>
                                                    <li class="discount-price">-15%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/19.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/9.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy
                                                    Quilted T..</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€35.90</li>
                                                    <li class="current-price">€34.11</li>
                                                    <li class="discount-price">-5%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy
                                                    Quilted T..</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€18.90</li>
                                                    <li class="current-price">€34.21</li>
                                                    <li class="discount-price">-5%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/19.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                    DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Fresh
                                                    Foam Ka..</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€18.90</li>
                                                    <li class="current-price">€15.12</li>
                                                    <li class="discount-price">-20%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/10.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                    CORNER</span></a>
                                            <h2><a href="single-product.html" class="product-link">Brixton Patrol All
                                                    Terra...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/9.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                    CORNER</span></a>
                                            <h2><a href="single-product.html" class="product-link">Juicy Couture Tricot
                                                    Log...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <!-- Tab One End -->
                        <!-- Tab Two Start -->
                        <div id="shop-2" class="tab-pane">
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/7.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/8.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Fila
                                                                Locker Room Varsity Jacket</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/9.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/10.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Juicy
                                                                Couture Tricot Logo Stripe Jacket</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/11.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/12.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">New
                                                                Balance Fresh Foam LAZR v1 Sport</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/13.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/14.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Juicy
                                                                Couture Solid Sleeve Puffer Jacket</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/15.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/16.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">New
                                                                Balance Fresh Foam Kaymin</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/17.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/18.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Water and
                                                                Wind Resistant Insulated Jacket</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/19.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/20.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html"
                                                                class="product-link">Trans-Weight Hooded Wind and Water
                                                                Resistant Shell</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/21.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/22.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Madden by
                                                                Steve Madden Cale 6</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/23.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/24.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Calvin
                                                                Klein Jeans Reflective Logo Full Zip</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/25.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/26.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">New
                                                                Balance Fresh Foam Arishi Sport</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/27.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/28.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                                DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Juicy
                                                                Couture Juicy Quilted Terry Track Jacket</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/29.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/17.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Fila
                                                                Locker Room Varsity Jacket</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/11.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/12.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Fila
                                                                Locker Room Varsity Jacket</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/17.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/18.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Fila
                                                                Locker Room Varsity Jacket</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30px scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/13.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/14.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Fila
                                                                Locker Room Varsity Jacket</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap scroll-zoom">
                                <div class="row list-product m-0px">
                                    <div class="col-md-12 padding-0px">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                <div class="left-img">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img"
                                                                src="assets/images/product-image/15.jpg" alt="" />
                                                            <img class="second-img"
                                                                src="assets/images/product-image/16.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                <div class="product-desc-wrap">
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC
                                                                CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Fila
                                                                Locker Room Varsity Jacket</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="product-intro-info">
                                                            <p>Create a cool and sporty look with the FILA® Locker Room
                                                                Varsity Jacket.</p>
                                                            <p>Comfortable cotton-blend fabrication.</p>
                                                            <p>Classic varsity jacket features brand details throughout.
                                                            </p>
                                                            <p>Flat knit collar.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-inner">
                                                        <div class="in-stock">Availability: <span>299 In Stock</span>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€9.90</li>
                                                            </ul>
                                                        </div>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li class="cart"><a title="Add to cart" class="cart-btn"
                                                                        href="#">ADD TO CART </a></li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to wishlist"><i
                                                                            class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i
                                                                            class="icon-shuffle"></i> Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Two End -->
                    </div>
                    <!-- Shop Tab Content End -->
                    <!--  Pagination Area Start -->
                    <div class="pro-pagination-style text-center mb-60px mt-30px">
                        <ul>
                            <li>
                                <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                            </li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li>
                                <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--  Pagination Area End -->
                </div>
                <!-- Shop Bottom Area End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                <div class="shop-sidebar-wrap">
                    <div class="sidebar-widget padding-30px bg-light-gray-2 mb-30px">
                        <h3 class="sidebar-title">Electronics</h3>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne" class="collapsed">Hot
                                        Category</a>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample" >
                                    <div class="card-body">
                                        <ul class="category-list">
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                            <li><a href="#">Sweaters</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Blouses &amp; Shirts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">Outerwear &amp; Jackets</a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample" >
                                    <div class="card-body">
                                        <ul class="category-list">
                                            <li><a href="#">Basic Jackets</a></li>
                                            <li><a href="#">Real Fur</a></li>
                                            <li><a href="#">Down Coats</a></li>
                                            <li><a href="#">Blazers</a></li>
                                            <li><a href="#">Trench Coats </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <a href="#" class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">Weddings &amp; Events</a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="category-list">
                                            <li><a href="#">Wedding Dresses</a></li>
                                            <li><a href="#">Evening Dresses</a></li>
                                            <li><a href="#">Prom Dresses </a></li>
                                            <li><a href="#">Bridesmaid Dresses</a></li>
                                            <li><a href="#">Wedding Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <a href="#" class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">Bottoms</a>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="category-list">
                                            <li><a href="#">Skirts</a></li>
                                            <li><a href="#">Leggings</a></li>
                                            <li><a href="#">Pants &amp; Capris</a></li>
                                            <li><a href="#">Wide Leg Pants</a></li>
                                            <li><a href="#">Shorts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <a href="#" class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">Tops &amp; Sets</a>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="category-list">
                                            <li><a href="#">Tank Tops</a></li>
                                            <li><a href="#">Suits &amp; Sets</a></li>
                                            <li><a href="#">Jumpsuits</a></li>
                                            <li><a href="#">Rompers</a></li>
                                            <li><a href="#">Sleep &amp; Lounge</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <a href="#" class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">Accessories</a>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="category-list">
                                            <li><a href="#">Eyewear &amp; Accessories</a></li>
                                            <li><a href="#">Hats &amp; Caps</a></li>
                                            <li><a href="#">Belts &amp; Cummerbunds</a></li>
                                            <li><a href="#">Scarves &amp; Wraps</a></li>
                                            <li><a href="#">Gloves &amp; Mittens</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- card -->
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget-group mt-20 padding-30px">
                        <h3 class="sidebar-title">Filter By</h3>
                        <div class="sidebar-widget mt-20">
                            <h4 class="pro-sidebar-title">Price</h4>
                            <div class="price-filter mt-10">
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-30">
                            <h4 class="pro-sidebar-title">Size</h4>
                            <div class="sidebar-widget-list">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" /> <a href="#">X<span>(4)</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">M<span>(4)</span></a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">L<span>(4)</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">XL<span>(4)</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget no-cba mt-20">
                            <h4 class="pro-sidebar-title">Colour</h4>
                            <div class="sidebar-widget-list">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" /> <a href="#">Grey<span>(2)</span> </a>
                                            <span class="checkmark grey"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">White<span>(4)</span></a>
                                            <span class="checkmark white"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">Black<span>(4)</span> </a>
                                            <span class="checkmark black"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">Camel<span>(4)</span> </a>
                                            <span class="checkmark camel"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-30">
                            <h4 class="pro-sidebar-title">Brand</h4>
                            <div class="sidebar-widget-list">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" /> <a href="#">Studio Design<span>(10)</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">Graphic
                                                Corner<span>(7)</span></a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget tag mt-30px">
                        <div class="main-heading">
                            <h3 class="sidebar-title">Tags</h3>
                        </div>
                        <div class="sidebar-widget-tag">
                            <ul>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Audio & Video</a></li>
                                <li><a href="#">Video Games</a></li>
                                <li><a href="#">Camera & Photo</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Shop Category Area End -->

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px">
                                 <!-- Swiper -->
                                  <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/11.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/12.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/13.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/14.jpg" alt="">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/11.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/12.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/13.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/14.jpg" alt="">
                                          </div>
                                        </div>
                                  </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Originals Kaval Windbr</h2>
                                    <p class="reference">Reference:<span> demo_17</span></p>
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                    <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                    <div class="pro-details-size-color">
                                        <div class="pro-details-color-wrap">
                                            <span>Color</span>
                                            <div class="pro-details-color-content">
                                                <ul>
                                                    <li class="blue"></li>
                                                    <li class="maroon active"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#"> + Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-wish-com">
                                        <div class="pro-details-wishlist">
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-social-info">
                                        <span>Share</span>
                                        <div class="social-info">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-google"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
@stop()