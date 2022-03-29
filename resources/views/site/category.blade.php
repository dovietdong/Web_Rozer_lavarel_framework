@extends('layout.main')

@section('title', 'Category')

@section('category')

<div class="shop-category-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
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
                            <div class="row responsive-md-class">
                                @foreach($products as $pro)
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="{{ url('uploads') }}/{{$pro->image}}" alt="">
                                                <img class="second-img" src="{{ url('uploads') }}/{{$pro->image}}" alt="">
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
                                            <a class="inner-link" href="shop-4-column.html"><span>{{$pro->cat->name}}</span></a>
                                            <h2><a href="single-product.html" class="product-link">{{$pro->name}}</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€{{$pro->price}}</li>
                                                    <li class="current-price">€{{$pro->sale_price}}</li>
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
                                @endforeach
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
                                                                src="assets/images/product-image/7.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/8.jpg" alt="">
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
                                                                src="assets/images/product-image/9.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/10.jpg" alt="">
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
                                                                src="assets/images/product-image/11.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/12.jpg" alt="">
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
                                                                src="assets/images/product-image/13.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/14.jpg" alt="">
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
                                                                src="assets/images/product-image/15.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/16.jpg" alt="">
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
                                                                src="assets/images/product-image/17.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/18.jpg" alt="">
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
                                                                src="assets/images/product-image/19.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/20.jpg" alt="">
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
                                                                src="assets/images/product-image/21.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/22.jpg" alt="">
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
                                                                src="assets/images/product-image/23.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/24.jpg" alt="">
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
                                                                src="assets/images/product-image/25.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/26.jpg" alt="">
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
                                                                src="assets/images/product-image/27.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/28.jpg" alt="">
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
                                                                src="assets/images/product-image/29.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/17.jpg" alt="">
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
                                                                src="assets/images/product-image/11.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/12.jpg" alt="">
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
                                                                src="assets/images/product-image/17.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/18.jpg" alt="">
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
                                                                src="assets/images/product-image/13.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/14.jpg" alt="">
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
                                                                src="assets/images/product-image/15.jpg" alt="">
                                                            <img class="second-img"
                                                                src="assets/images/product-image/16.jpg" alt="">
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
                    {{$products->links()}}
                    </div>
                    <!--  Pagination Area End -->
                </div>
                <!-- Shop Bottom Area End -->
            </div>
        </div>
    </div>
</div>
@stop()