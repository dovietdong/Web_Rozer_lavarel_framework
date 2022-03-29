<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
        rel="stylesheet" />

    <!-- CSS
  ============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css"> -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/plugins/swiper.css">  -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="{{ url('assets') }}/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="{{ url('assets') }}/css/style.min.css">

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
</head>


<body>
    <!-- Header Section Start From Here -->
    <header class="header-wrapper">
        <!-- Header Nav Start -->
        <div class="header-nav header-nav-2 bg-blue-deep">
            <div class="container">
                <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                    <div class="header-static-nav">
                        <p>Welcome you to Rozer Store!</p>
                    </div>
                    <div class="header-menu-nav">
                        <ul class="menu-nav">
                            <li>
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Account <i
                                            class="ion-ios-arrow-down"></i></button>

                                    <ul class="dropdown-menu animation slideDownIn"
                                        aria-labelledby="dropdownMenuButton">
                                        <li><a href="{{route('account')}}">My account</a></li>
                                        <li><a href="{{route('checkout')}}">Checkout</a></li>
                                        <li><a href="{{route('login')}}">Sign in</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->
        <div class="header-top header-top-2 bg-blue ptb-30px d-xl-block d-none ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="{{route('index')}}"><img class="img-responsive" src="{{ url('assets') }}/images/logo/logo-2.png"
                                    alt="logo.jpg" /></a>
                        </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                        <div class="header-right-element d-flex">
                            <div class="search-element media-body mr-120px">
                                <form class="d-flex" action="#">
                                    <div class="search-category">
                                        <select>
                                            <option value="0">All categories</option>
                                            <option value="12">Laptop</option>
                                            <option value="13">- - Hot Categories</option>
                                            <option value="19">- - - - Dresses</option>
                                            <option value="20">- - - - Jackets &amp; Coats</option>
                                            <option value="21">- - - - Sweaters</option>
                                            <option value="22">- - - - Jeans</option>
                                            <option value="23">- - - - Blouses &amp; Shirts</option>
                                            <option value="14">- - Outerwear &amp; Jackets</option>
                                            <option value="24">- - - - Basic Jackets</option>
                                            <option value="25">- - - - Real Fur</option>
                                            <option value="26">- - - - Down Coats</option>
                                            <option value="27">- - - - Blazers</option>
                                            <option value="28">- - - - Trench Coats</option>
                                            <option value="15">- - Weddings &amp; Events</option>
                                            <option value="29">- - - - Wedding Dresses</option>
                                            <option value="30">- - - - Evening Dresses</option>
                                            <option value="31">- - - - Prom Dresses</option>
                                            <option value="32">- - - - Bridesmaid Dresses</option>
                                            <option value="33">- - - - Wedding Accessories</option>
                                            <option value="16">- - Bottoms</option>
                                            <option value="34">- - - - Skirts</option>
                                            <option value="35">- - - - Leggings</option>
                                            <option value="36">- - - - Pants &amp; Capris</option>
                                            <option value="37">- - - - Wide Leg Pants</option>
                                            <option value="38">- - - - Shorts</option>
                                            <option value="17">- - Tops &amp; Sets</option>
                                            <option value="39">- - - - Tank Tops</option>
                                            <option value="40">- - - - Suits &amp; Sets</option>
                                            <option value="41">- - - - Jumpsuits</option>
                                            <option value="42">- - - - Rompers</option>
                                            <option value="43">- - - - Sleep &amp; Lounge</option>
                                            <option value="18">- - Accessories</option>
                                            <option value="44">- - - - Eyewear &amp; Accessories</option>
                                            <option value="45">- - - - Hats &amp; Caps</option>
                                            <option value="46">- - - - Belts &amp; Cummerbunds</option>
                                            <option value="47">- - - - Scarves &amp; Wraps</option>
                                            <option value="48">- - - - Gloves &amp; Mittens</option>
                                            <option value="49">Computer</option>
                                            <option value="50">- - Bottoms</option>
                                            <option value="53">- - - - Skirts</option>
                                            <option value="54">- - - - Leggings</option>
                                            <option value="55">- - - - Jeans</option>
                                            <option value="56">- - - - Pants &amp; Capris</option>
                                            <option value="57">- - - - Shorts</option>
                                            <option value="51">- - Outerwear &amp; Jackets</option>
                                            <option value="58">- - - - Trench</option>
                                            <option value="59">- - - - Genuine Leather</option>
                                            <option value="60">- - - - Parkas</option>
                                            <option value="61">- - - - Down Jackets</option>
                                            <option value="62">- - - - Wool &amp; Blends</option>
                                            <option value="52">- - Underwear &amp; Loungewear</option>
                                            <option value="63">- - - - Boxers</option>
                                            <option value="64">- - - - Briefs</option>
                                            <option value="65">- - - - Long Johns</option>
                                            <option value="66">- - - - Men's Sleep &amp; Lounge</option>
                                            <option value="67">- - - - Pajama Sets</option>
                                            <option value="68">Smartphone</option>
                                            <option value="69">- - Accessories &amp; Parts</option>
                                            <option value="75">- - - - Cables &amp; Adapters</option>
                                            <option value="76">- - - - Batteries</option>
                                            <option value="77">- - - - Chargers</option>
                                            <option value="78">- - - - Bags &amp; Cases</option>
                                            <option value="79">- - - - Electronic Cigarettes</option>
                                            <option value="70">- - Audio &amp; Video</option>
                                            <option value="80">- - - - Televisions</option>
                                            <option value="81">- - - - TV Receivers</option>
                                            <option value="82">- - - - Projectors</option>
                                            <option value="83">- - - - Audio Amplifier Boards</option>
                                            <option value="84">- - - - TV Sticks</option>
                                            <option value="71">- - Camera &amp; Photo</option>
                                            <option value="85">- - - - Digital Cameras</option>
                                            <option value="86">- - - - Camcorders</option>
                                            <option value="87">- - - - Camera Drones</option>
                                            <option value="88">- - - - Action Cameras</option>
                                            <option value="89">- - - - Photo Studio Supplies</option>
                                            <option value="72">- - Portable Audio &amp; Video</option>
                                            <option value="90">- - - - Headphones</option>
                                            <option value="91">- - - - Speakers</option>
                                            <option value="92">- - - - MP3 Players</option>
                                            <option value="93">- - - - VR/AR Devices</option>
                                            <option value="94">- - - - Microphones</option>
                                            <option value="73">- - Smart Electronics</option>
                                            <option value="95">- - - - Wearable Devices</option>
                                            <option value="96">- - - - Smart Home Appliances</option>
                                            <option value="97">- - - - Smart Remote Controls</option>
                                            <option value="98">- - - - Smart Watches</option>
                                            <option value="99">- - - - Smart Wristbands</option>
                                            <option value="74">- - Video Games</option>
                                            <option value="100">- - - - Handheld Game Players</option>
                                            <option value="101">- - - - Game Controllers</option>
                                            <option value="102">- - - - Joysticks</option>
                                            <option value="103">- - - - Stickers</option>
                                            <option value="104">Game Consoles</option>
                                            <option value="105">Mp3 &amp; headphone</option>
                                            <option value="106">Tv &amp; Video</option>
                                            <option value="107">Watches</option>
                                            <option value="108">Washing Machine</option>
                                            <option value="109">Camera</option>
                                            <option value="110">Audio &amp; Theater</option>
                                            <option value="111">Accessories</option>
                                            <option value="112">Games &amp; Consoles</option>
                                        </select>
                                    </div>
                                    <input type="text" placeholder="Enter your search key ... " />
                                    <button><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                            <!--Cart info Start -->
                            <div class="header-tools tools-style-2 d-flex">
                                <div class="cart-info d-flex align-self-center">
                                    <a href="{{route('compare')}}" class="shuffle" data-number="3"><i
                                            class="icon-shuffle"></i></a>
                                    <a href="#offcanvas-wishlist" class="heart offcanvas-toggle" data-number="3"><i
                                            class="icon-heart"></i></a>
                                    <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="3"><i
                                            class="icon-bag"></i><span>$20.00</span></a>
                                </div>
                            </div>
                        </div>
                        <!--Cart info End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->
        <div class="header-menu bg-blue sticky-nav d-xl-block d-none padding-0px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 custom-col-2">
                        <div class="header-menu-vertical">
                            <h4 class="menu-title">All Cattegories</h4>
                            <ul class="menu-content display-none">
                                @foreach($cats as $cat)
                                <li class="menu-item"><a href="{{route('category',$cat->id)}}">{{$cat->name}}</a></li>
                                @endforeach
                            </ul>
                            <!-- menu content -->
                        </div>
                        <!-- header menu vertical -->
                    </div>
                    <div class="col-lg-9 custom-col-2">
                        <div class="header-horizontal-menu">
                            <ul class="menu-content">
                                <li class="active menu-dropdown">
                                    <a href="{{route('index')}}">Home</a>
                                </li>
                                <li class="menu-dropdown">
                                    <a href="{{route('shop')}}">Shop </i></a>
                                </li>
                                <li class="menu-dropdown">
                                    <a href="{{route('about')}}">About</a>
                                </li>
                                <li class="menu-dropdown">
                                    <a href="{{route('blog')}}">Blog</a>
                                </li>
                                <li><a href="{{route('contact')}}">contact Us</a></li>
                            </ul>
                        </div>
                        <!-- header horizontal menu -->
                        <div class="intro-text-shipping text-end">
                            <div class="free-ship">Free Shipping on Orders $50+</div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- header menu -->
    </header>
    <!-- Header Section End Here -->

    <!-- Mobile Header Section Start -->
    <div class="mobile-header d-xl-none sticky-nav bg-white ptb-10px">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{route('index')}}"><img class="img-responsive" src="assets/images/logo/logo.png"
                                alt="logo.jpg" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="cart-info d-flex align-self-center">
                            <a href="{{route('compare')}}" class="shuffle d-xs-none" data-number="3"><i
                                    class="icon-shuffle"></i></a>
                            <a href="#offcanvas-wishlist" class="heart offcanvas-toggle d-xs-none" data-number="3"><i
                                    class="icon-heart"></i></a>
                            <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="3"><i
                                    class="icon-bag"></i><span>$20.00</span></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>

    <!-- Search Category Start -->
    <div class="mobile-search-area d-xl-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-element media-body">
                        <form class="d-flex" action="#">
                            <div class="search-category">
                                <select>
                                    <option value="0">All categories</option>
                                    <option value="12">Laptop</option>
                                    <option value="13">- - Hot Categories</option>
                                    <option value="19">- - - - Dresses</option>
                                    <option value="20">- - - - Jackets &amp; Coats</option>
                                    <option value="21">- - - - Sweaters</option>
                                    <option value="22">- - - - Jeans</option>
                                    <option value="23">- - - - Blouses &amp; Shirts</option>
                                    <option value="14">- - Outerwear &amp; Jackets</option>
                                    <option value="24">- - - - Basic Jackets</option>
                                    <option value="25">- - - - Real Fur</option>
                                    <option value="26">- - - - Down Coats</option>
                                    <option value="27">- - - - Blazers</option>
                                    <option value="28">- - - - Trench Coats</option>
                                    <option value="15">- - Weddings &amp; Events</option>
                                    <option value="29">- - - - Wedding Dresses</option>
                                    <option value="30">- - - - Evening Dresses</option>
                                    <option value="31">- - - - Prom Dresses</option>
                                    <option value="32">- - - - Bridesmaid Dresses</option>
                                    <option value="33">- - - - Wedding Accessories</option>
                                    <option value="16">- - Bottoms</option>
                                    <option value="34">- - - - Skirts</option>
                                    <option value="35">- - - - Leggings</option>
                                    <option value="36">- - - - Pants &amp; Capris</option>
                                    <option value="37">- - - - Wide Leg Pants</option>
                                    <option value="38">- - - - Shorts</option>
                                    <option value="17">- - Tops &amp; Sets</option>
                                    <option value="39">- - - - Tank Tops</option>
                                    <option value="40">- - - - Suits &amp; Sets</option>
                                    <option value="41">- - - - Jumpsuits</option>
                                    <option value="42">- - - - Rompers</option>
                                    <option value="43">- - - - Sleep &amp; Lounge</option>
                                    <option value="18">- - Accessories</option>
                                    <option value="44">- - - - Eyewear &amp; Accessories</option>
                                    <option value="45">- - - - Hats &amp; Caps</option>
                                    <option value="46">- - - - Belts &amp; Cummerbunds</option>
                                    <option value="47">- - - - Scarves &amp; Wraps</option>
                                    <option value="48">- - - - Gloves &amp; Mittens</option>
                                    <option value="49">Computer</option>
                                    <option value="50">- - Bottoms</option>
                                    <option value="53">- - - - Skirts</option>
                                    <option value="54">- - - - Leggings</option>
                                    <option value="55">- - - - Jeans</option>
                                    <option value="56">- - - - Pants &amp; Capris</option>
                                    <option value="57">- - - - Shorts</option>
                                    <option value="51">- - Outerwear &amp; Jackets</option>
                                    <option value="58">- - - - Trench</option>
                                    <option value="59">- - - - Genuine Leather</option>
                                    <option value="60">- - - - Parkas</option>
                                    <option value="61">- - - - Down Jackets</option>
                                    <option value="62">- - - - Wool &amp; Blends</option>
                                    <option value="52">- - Underwear &amp; Loungewear</option>
                                    <option value="63">- - - - Boxers</option>
                                    <option value="64">- - - - Briefs</option>
                                    <option value="65">- - - - Long Johns</option>
                                    <option value="66">- - - - Men's Sleep &amp; Lounge</option>
                                    <option value="67">- - - - Pajama Sets</option>
                                    <option value="68">Smartphone</option>
                                    <option value="69">- - Accessories &amp; Parts</option>
                                    <option value="75">- - - - Cables &amp; Adapters</option>
                                    <option value="76">- - - - Batteries</option>
                                    <option value="77">- - - - Chargers</option>
                                    <option value="78">- - - - Bags &amp; Cases</option>
                                    <option value="79">- - - - Electronic Cigarettes</option>
                                    <option value="70">- - Audio &amp; Video</option>
                                    <option value="80">- - - - Televisions</option>
                                    <option value="81">- - - - TV Receivers</option>
                                    <option value="82">- - - - Projectors</option>
                                    <option value="83">- - - - Audio Amplifier Boards</option>
                                    <option value="84">- - - - TV Sticks</option>
                                    <option value="71">- - Camera &amp; Photo</option>
                                    <option value="85">- - - - Digital Cameras</option>
                                    <option value="86">- - - - Camcorders</option>
                                    <option value="87">- - - - Camera Drones</option>
                                    <option value="88">- - - - Action Cameras</option>
                                    <option value="89">- - - - Photo Studio Supplies</option>
                                    <option value="72">- - Portable Audio &amp; Video</option>
                                    <option value="90">- - - - Headphones</option>
                                    <option value="91">- - - - Speakers</option>
                                    <option value="92">- - - - MP3 Players</option>
                                    <option value="93">- - - - VR/AR Devices</option>
                                    <option value="94">- - - - Microphones</option>
                                    <option value="73">- - Smart Electronics</option>
                                    <option value="95">- - - - Wearable Devices</option>
                                    <option value="96">- - - - Smart Home Appliances</option>
                                    <option value="97">- - - - Smart Remote Controls</option>
                                    <option value="98">- - - - Smart Watches</option>
                                    <option value="99">- - - - Smart Wristbands</option>
                                    <option value="74">- - Video Games</option>
                                    <option value="100">- - - - Handheld Game Players</option>
                                    <option value="101">- - - - Game Controllers</option>
                                    <option value="102">- - - - Joysticks</option>
                                    <option value="103">- - - - Stickers</option>
                                    <option value="104">Game Consoles</option>
                                    <option value="105">Mp3 &amp; headphone</option>
                                    <option value="106">Tv &amp; Video</option>
                                    <option value="107">Watches</option>
                                    <option value="108">Washing Machine</option>
                                    <option value="109">Camera</option>
                                    <option value="110">Audio &amp; Theater</option>
                                    <option value="111">Accessories</option>
                                    <option value="112">Games &amp; Consoles</option>
                                </select>
                            </div>
                            <input type="text" placeholder="Enter your search key ... " />
                            <button><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Category End -->
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="{{route('wishlist')}}" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">$144.00</span>
                </div>
                <div class="buttons">
                    <a href="{{route('cart')}}" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="{{route('checkout')}}" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="head">
                <span class="title">&nbsp;</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li class="active menu-dropdown">
                        <a href="{{route('index')}}">Home</a>
                    </li>
                    <li class="menu-dropdown">
                        <a href="{{route('shop')}}">Shop <i class="ion-ios-arrow-down"></i></a>
                    </li>
                    <li class="menu-dropdown">
                        <a href="about.html">About</a>
                    </li>
                    <li class="menu-dropdown">
                        <a href="{{route('blog')}}">Blog</a>
                    </li>
                    <li><a href="{{route('contact')}}">contact Us</a></li>
                </ul>
            </div>
            <div class="offcanvas-buttons mt-30px">
                <div class="header-tools d-flex">
                    <div class="cart-info d-flex align-self-center">
                        <a href="{{route('account')}}" class="user"><i class="icon-user"></i></a>
                        <a href="{{route('wishlist')}}" data-number="3"><i class="icon-heart"></i></a>
                        <a href="" data-number="3"><i class="icon-bag"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-social mt-30px">
                <ul>
                    <li>
                        <a href="#"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>
    <!-- Breadcrumb Area Start -->
    @if(request()->is('/'))
    @else
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li>
                                @yield('title')
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Breadcrumb Area End-->
    @yield('home')
    @yield('shop')
    @yield('blog')
    @yield('contact')
    @yield('cart')
    @yield('checkout')
    @yield('login')
    @yield('account')
    @yield('thankyou')
    @yield('wishlist')
    @yield('single-product')
    @yield('category')


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
                                        <img class="img-responsive m-auto" src="assets/images/product-image/11.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/12.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/13.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/14.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/11.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/12.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/13.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/14.jpg"
                                            alt="">
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
                                        <a href="{{route('compare')}}"><i class="ion-ios-shuffle-strong"></i>Add to
                                            compare</a>
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
    <!-- Footer Area Start -->
    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">ABOUT US</h4>
                                <p class="text-infor">We are a team of designers and developers that create high quality
                                    HTML template</p>
                                <div class="need-help">
                                    <p class="phone-info">
                                        NEED HELP?
                                        <span>
                                            0123456789 <br />
                                            0123456789
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Information</h4>
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="#">Delivery</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Secure Payment</a></li>
                                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">Stores</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 mb-sm-30px mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">CUSTOM LINKS</h4>
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="#">Legal Notice</a></li>
                                        <li><a href="#">Prices Drop</a></li>
                                        <li><a href="#">New Products</a></li>
                                        <li><a href="#">Best Sales</a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('account')}}">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 ">
                            <div class="single-wedge">
                                <h4 class="footer-herading">NEWSLETTER</h4>
                                <div class="subscrib-text">
                                    <p>You may unsubscribe at any moment. For that purpose, please find our contact info
                                        in the legal notice.</p>
                                </div>
                                <div id="mc_embed_signup" class="subscribe-form">
                                    <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                                        name="mc-embedded-subscribe-form" method="post"
                                        action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input class="email" type="email" required=""
                                                placeholder="Enter your email here.." name="EMAIL" value="" />
                                            <div class="mc-news" aria-hidden="true"
                                                style="position: absolute; left: -5000px;">
                                                <input type="text" value="" tabindex="-1"
                                                    name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                            </div>
                                            <div class="clear">
                                                <input id="mc-embedded-subscribe" class="button" type="submit"
                                                    name="subscribe" value="Sign Up" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="social-info">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-social-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6 text-end">
                            <img class="payment-img" src="assets/images/icons/payment.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->
    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <!-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="assets/js/plugins/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/swiper.min.js"></script>
        <script src="assets/js/plugins/countdown.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/elevateZoom.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{ url('assets') }}/js/vendor/vendor.min.js"></script>
    <script src="{{ url('assets') }}/js/plugins/plugins.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>
</body>


</html>