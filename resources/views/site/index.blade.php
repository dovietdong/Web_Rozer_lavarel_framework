@extends('layout.main')

@section('title', 'Rozer')

@section('home')
<!-- Slider Start -->
<div class="slider-area slider-height-3">
    <div class="hero-slider swiper-container">
        <div class="swiper-wrapper">
            <!-- Single Slider  -->
            <div class="swiper-slide bg-img d-flex"
                style="background-image: url(assets/images/slider-image/sample-5.jpg);">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                        <span class="animated color-gray">NEW SMALL GPAD PRO</span>
                        <h1 class="animated color-black">
                            GPad Pro 9-Inch <br />
                            <strong>Now Available</strong>
                        </h1>
                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Single Slider  -->
            <div class="swiper-slide bg-img d-flex"
                style="background-image: url(assets/images/slider-image/sample-6.jpg);">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                        <span class="animated color-gray">WIRELESS BLUETOOTH GAMING</span>
                        <h1 class="animated color-black">
                            Wireless Gamepad <br />
                            <strong>GPEGA PG-9023</strong>
                        </h1>
                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Single Slider  -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
    </div>
</div>
<!-- Slider End -->
<!-- Static Area Start -->
<div class="static-area mtb-60px">
    <div class="container">
        <div class="static-area-wrap">
            <div class="row">
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                    <div class="single-static">
                        <img src="assets/images/icons/static-icons-1.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Free Shipping</h4>
                            <p>On all orders over $75.00</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                    <div class="single-static">
                        <img src="assets/images/icons/static-icons-2.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Free Returns</h4>
                            <p>Returns are free within 9 days</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                    <div class="single-static">
                        <img src="assets/images/icons/static-icons-4.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Support 24/7</h4>
                            <p>Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static">
                        <img src="assets/images/icons/static-icons-3.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>100% Payment Secure</h4>
                            <p>Your payment are safe with us.</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Static Area End -->
<!-- Banner Area Start -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="assets/images/banner-image/1.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="assets/images/banner-image/2.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="assets/images/banner-image/3.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- category Area Start -->
<div class="popular-categories-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Popular Categories</h2>
                </div>
            </div>
        </div>
        <div class="category-slider slider-nav-style-1">
            <div class="category-slider-wrapper swiper-wrapper">
                <div class="category-slider-item swiper-slide">
                    <div class="thumb-category">
                        <a href="">
                            <img src="assets/images/product-image/1.jpg" alt="product-image.jpg" />
                        </a>
                    </div>
                    <div class="category-discript">
                        <h4>Smart Electronics</h4>
                        <ul>
                            <li><a href="#">Wearable Devices</a></li>
                            <li><a href="#">Smart Home Appliances</a></li>
                            <li><a href="#">Smart Remote Controls</a></li>
                            <li><a href="#">Smart Watches</a></li>
                        </ul>
                        <a href="shop-4-column.html" class="view-all-btn">View All</a>
                    </div>
                </div>
                <div class="category-slider-item swiper-slide">
                    <div class="thumb-category">
                        <a href="">
                            <img src="assets/images/product-image/2.jpg" alt="product-image.jpg" />
                        </a>
                    </div>
                    <div class="category-discript">
                        <h4>Audio & Video</h4>
                        <ul>
                            <li><a href="#">Televisions</a></li>
                            <li><a href="#">TV Receivers</a></li>
                            <li><a href="#">Projectors</a></li>
                            <li><a href="#">TV Sticks</a></li>
                        </ul>
                        <a href="shop-4-column.html" class="view-all-btn">View All</a>
                    </div>
                </div>
                <div class="category-slider-item swiper-slide">
                    <div class="thumb-category">
                        <a href="">
                            <img src="assets/images/product-image/3.jpg" alt="product-image.jpg" />
                        </a>
                    </div>
                    <div class="category-discript">
                        <h4>Video Games</h4>
                        <ul>
                            <li><a href="#">Handheld Game Players</a></li>
                            <li><a href="#">Game Controllers</a></li>
                            <li><a href="#">Joysticks</a></li>
                            <li><a href="#">Stickers</a></li>
                        </ul>
                        <a href="shop-4-column.html" class="view-all-btn">View All</a>
                    </div>
                </div>
                <div class="category-slider-item swiper-slide">
                    <div class="thumb-category">
                        <a href="">
                            <img src="assets/images/product-image/4.jpg" alt="product-image.jpg" />
                        </a>
                    </div>
                    <div class="category-discript">
                        <h4>Portable Audio & Video</h4>
                        <ul>
                            <li><a href="#">Headphones</a></li>
                            <li><a href="#">Speakers</a></li>
                            <li><a href="#">MP3 Players</a></li>
                            <li><a href="#">Microphones</a></li>
                        </ul>
                        <a href="shop-4-column.html" class="view-all-btn">View All</a>
                    </div>
                </div>
                <div class="category-slider-item swiper-slide">
                    <div class="thumb-category">
                        <a href="">
                            <img src="assets/images/product-image/5.jpg" alt="product-image.jpg" />
                        </a>
                    </div>
                    <div class="category-discript">
                        <h4>Camera & Photo</h4>
                        <ul>
                            <li><a href="#">Digital Cameras</a></li>
                            <li><a href="#">Camcorders</a></li>
                            <li><a href="#">Camera Drones</a></li>
                            <li><a href="#">Action Cameras</a></li>
                        </ul>
                        <a href="shop-4-column.html" class="view-all-btn">View All</a>
                    </div>
                </div>
                <div class="category-slider-item swiper-slide">
                    <div class="thumb-category">
                        <a href="">
                            <img src="assets/images/product-image/1.jpg" alt="product-image.jpg" />
                        </a>
                    </div>
                    <div class="category-discript">
                        <h4>Smart Electronics</h4>
                        <ul>
                            <li><a href="#">Wearable Devices</a></li>
                            <li><a href="#">Smart Home Appliances</a></li>
                            <li><a href="#">Smart Remote Controls</a></li>
                            <li><a href="#">Smart Watches</a></li>
                        </ul>
                        <a href="shop-4-column.html" class="view-all-btn">View All</a>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!-- category Area End -->
<!-- Category Tab 1 Area Start -->
<section class="category-tab-area mt-60px mb-30px">
    <div class="container">
        <div class="section-title d-flex">
            <h2>Smart Electronics</h2>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs sub-category d-flex justify-content-end flex-grow-1">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Smart Home Appliances</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Smart Remote Controls</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Smart Watches</a>
                </li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content banner-area">
            <!-- 1st tab start -->
            <div id="tab-1" class="tab-pane active">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="assets/images/banner-image/11.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                        <div class="feature-slider-2 slider-nav-style-1 single-product-responsive">
                            <div class="feature-slider-wrapper swiper-wrapper">
                                @foreach($product_new as $pn)
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide swiper-slide-next" role="group"
                                    aria-label="2 / 17" style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="{{route('single_product',['product'=>$pn->id,'slug'=>Str::slug($pn->name)])}}" class="thumbnail">
                                                <img class="first-img" src="{{ url('uploads') }}/{{$pn->image}}" alt="">
                                                <img class="second-img" src="{{ url('uploads') }}/{{$pn->image}}"
                                                    alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="{{route('category',$pn->cat->id)}}"><span>
                                                    {{$pn->cat->name}}</span></a>
                                            <h2><a href="{{route('single_product',['product'=>$pn->id,'slug'=> Str::slug($pn->name)])}}" class="product-link">
                                                    {{$pn->name}}
                                                </a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                @if($pn->sale_price != 0)
                                                <ul>
                                                    <li class="old-price">€{{number_format($pn->price,2)}}</li>
                                                    <li class="current-price">€{{number_format($pn->sale_price,2)}}</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                                @else
                                                <ul>
                                                    <li class="old-price not-cut">€{{number_format($pn->price,2)}}</li>
                                                </ul>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="{{route('cart-add',$pn->id)}}"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="{{route('single_product',['product'=>$pn->id,'slug'=>Str::slug($pn->name)])}}" class="thumbnail">
                                                <img class="first-img" src="{{ url('uploads') }}/{{$pn->image}}" alt="">
                                                <img class="second-img" src="{{ url('uploads') }}/{{$pn->image}}"
                                                    alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="{{route('category',$pn->cat->id)}}"><span>
                                                    {{$pn->cat->name}}</span></a>
                                            <h2><a href="{{route('single_product',['product'=>$pn->id,'slug'=> Str::slug($pn->name)])}}" class="product-link">
                                                    {{$pn->name}}
                                                </a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                @if($pn->sale_price != 0)
                                                <ul>
                                                    <li class="old-price">€{{number_format($pn->price,2)}}</li>
                                                    <li class="current-price">€{{number_format($pn->sale_price,2)}}</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                                @else
                                                <ul>
                                                    <li class="old-price not-cut">€{{number_format($pn->price,2)}}</li>
                                                </ul>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="{{route('cart-add',$pn->id)}}"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                @endforeach

                            
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 1st tab end -->
            <!-- 2nd tab start -->
            <div id="tab-2" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="assets/images/banner-image/11.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                        <div class="feature-slider-2 slider-nav-style-1">
                            <div class="feature-slider-wrapper swiper-wrapper">
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/23.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
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
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/15.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/10.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/27.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/26.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/13.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
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
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/15.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/21.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/20.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/10.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/19.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/18.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/21.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/13.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/14.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/23.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/11.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/25.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/29.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/26.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/27.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/27.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/29.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/23.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/21.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
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
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/10.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/11.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/15.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/16.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/13.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
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
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
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
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2nd tab end -->
            <!-- 3rd tab start -->
            <div id="tab-3" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="assets/images/banner-image/11.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                        <div class="feature-slider-2 slider-nav-style-1">
                            <div class="feature-slider-wrapper swiper-wrapper">
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/23.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
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
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/15.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/10.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/27.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/26.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/13.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
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
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/15.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/21.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/20.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/10.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/19.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/18.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/21.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/13.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/14.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/23.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/11.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/25.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/29.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/26.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/27.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/27.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/29.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/23.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/21.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
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
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/10.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/11.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/15.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/16.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg"
                                                    alt="" />
                                                <img class="second-img" src="assets/images/product-image/13.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
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
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
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
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg"
                                                    alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 3rd tab end -->
        </div>
    </div>
</section>
<!-- Category Tab 1 Area end -->
<!--  Category Tab2 Area Start -->
<section class="category-tab-area">
    <div class="container">
        <div class="section-title d-flex">
            <h2>Portable Audio &amp; Video</h2>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs sub-category d-flex justify-content-end flex-grow-1">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab-4">Headphones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Speakers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-6">MP3 Players</a>
                </li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content banner-area">
            <!-- 1st tab start -->
            <div id="tab-4" class="tab-pane active">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="assets/images/banner-image/12.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                        <div
                            class="feature-slider-2 slider-nav-style-1 swiper-initialized swiper-horizontal swiper-pointer-events">
                            <div class="feature-slider-wrapper swiper-wrapper" id="swiper-wrapper-124c35821d464797"
                                aria-live="polite"
                                style="transform: translate3d(-232.5px, 0px, 0px); transition-duration: 0ms;">
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide swiper-slide-prev" role="group"
                                    aria-label="1 / 17" style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide swiper-slide-active" role="group"
                                    aria-label="2 / 17" style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/8.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/15.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide swiper-slide-next" role="group"
                                    aria-label="3 / 17" style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/27.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/26.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="4 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/11.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/12.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="5 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/21.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/20.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="6 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="7 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/19.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/18.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="8 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/13.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/14.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="9 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/11.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="10 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/25.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="11 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/26.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/27.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/27.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="12 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="13 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="14 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="15 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/10.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/11.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/15.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/16.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="16 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/11.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/12.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="17 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                    aria-controls="swiper-wrapper-abd1455c5e7d4422" aria-disabled="false"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                                    aria-controls="swiper-wrapper-abd1455c5e7d4422" aria-disabled="false"></div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 1st tab end -->
            <!-- 2nd tab start -->
            <div id="tab-5" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="assets/images/banner-image/12.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                        <div
                            class="feature-slider-2 slider-nav-style-1 swiper-initialized swiper-horizontal swiper-pointer-events">
                            <div class="feature-slider-wrapper swiper-wrapper" id="swiper-wrapper-e5f987ab411e3fa6"
                                aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide swiper-slide-active" role="group"
                                    aria-label="1 / 17" style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide swiper-slide-next" role="group"
                                    aria-label="2 / 17" style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/8.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/15.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="3 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/27.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/26.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="4 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/11.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/12.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="5 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/21.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/20.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="6 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="7 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/19.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/18.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="8 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/13.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/14.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="9 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/11.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="10 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/25.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="11 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/26.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/27.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/27.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="12 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="13 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="14 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="15 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/10.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/11.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/15.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/16.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="16 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/11.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/12.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="17 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                    aria-controls="swiper-wrapper-abd1455c5e7d4422" aria-disabled="false"></div>
                                <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                                    aria-label="Previous slide" aria-controls="swiper-wrapper-abd1455c5e7d4422"
                                    aria-disabled="true"></div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2nd tab end -->
            <!-- 3rd tab start -->
            <div id="tab-6" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="assets/images/banner-image/12.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                        <div
                            class="feature-slider-2 slider-nav-style-1 swiper-initialized swiper-horizontal swiper-pointer-events">
                            <div class="feature-slider-wrapper swiper-wrapper" id="swiper-wrapper-cbf9f7ccc86a184f"
                                aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide swiper-slide-active" role="group"
                                    aria-label="1 / 17" style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide swiper-slide-next" role="group"
                                    aria-label="2 / 17" style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/8.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/15.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="3 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/27.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/26.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="4 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/11.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/12.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="5 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/21.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/20.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="6 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="7 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/19.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/18.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="8 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/13.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/14.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="9 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/11.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="10 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/25.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="11 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/26.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/27.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/27.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="12 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="13 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="14 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="15 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/10.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/11.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/15.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/16.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="16 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/11.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/12.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide" role="group" aria-label="17 / 17"
                                    style="width: 232.5px;">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
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
                                                <li class="cart"><a title="Add to cart" href="#"><i
                                                            class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i
                                                            class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i
                                                            class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                    aria-controls="swiper-wrapper-abd1455c5e7d4422" aria-disabled="false"></div>
                                <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                                    aria-label="Previous slide" aria-controls="swiper-wrapper-abd1455c5e7d4422"
                                    aria-disabled="true"></div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 3rd tab end -->
        </div>
    </div>
</section>
<!-- Category Tab 2 Area End -->
<!-- Banner Area Start -->
<div class="banner-area mt-30px mb-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="assets/images/banner-image/7.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="assets/images/banner-image/8.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Feature Area start -->
<div class="feature-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Featured Products</h2>
                </div>
            </div>
        </div>
        <div class="feature-slider slider-nav-style-1 swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="feature-slider-wrapper swiper-wrapper" id="swiper-wrapper-821f1ff7027c96ac" aria-live="polite"
                style="transform: translate3d(0px, 0px, 0px);">
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide swiper-slide-active" role="group" aria-label="1 / 17"
                    style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide swiper-slide-next" role="group" aria-label="2 / 17"
                    style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/8.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="3 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="4 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="5 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="6 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="7 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/18.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/19.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="8 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="9 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="10 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/24.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/25.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="11 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/26.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/27.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="12 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="13 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="14 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/9.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="15 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/10.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/11.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="16 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
                <!-- Single Item -->
                <div class="feature-slider-item swiper-slide" role="group" aria-label="17 / 17" style="width: 282px;">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="">
                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="">
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
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
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                    aria-controls="swiper-wrapper-abd1455c5e7d4422" aria-disabled="false"></div>
                <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                    aria-label="Previous slide" aria-controls="swiper-wrapper-abd1455c5e7d4422" aria-disabled="true">
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</div>
<!-- Feature Area End -->

<!-- Brand area start -->
<div class="brand-area mt-30px mb-60px">
    <div class="container">
        <div class="brand-slider slider-nav-style-1  slider-nav-style-2">
            <div class="brand-slider-wrapper swiper-wrapper">
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="assets/images/brand-logo/3.jpg" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="assets/images/brand-logo/4.jpg" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="assets/images/brand-logo/5.jpg" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!-- Brand area end -->
<!-- Recently Add area start -->
<div class="recent-add-area mb-30px mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Recently Added</h2>
                </div>
            </div>
        </div>
        <div class="recent-slider slider-nav-style-1 multi-row-2">
            <div class="recent-slider-wrapper swiper-wrapper">
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                </div>
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/15.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/16.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/17.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/18.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>Graphic Corner</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                </div>
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/21.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/22.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>Graphic Corner</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/23.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/24.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                </div>
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/25.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/26.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/27.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/28.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                </div>
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/29.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                </div>
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                            </h2>
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
                    </article>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!-- Recently Add area end -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">x</span></button>
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
                            <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm
                                tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis
                                nostrud exercitation ullamco</p>
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
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to
                                        wishlist</a>
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