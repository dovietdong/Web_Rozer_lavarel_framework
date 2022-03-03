@extends('layout.main')

@section('title', 'Compare')

@section('compare')
<!-- Compare area start -->
<div class="compare-area mtb-60px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <!-- Compare Table -->
                    <div class="compare-table table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="first-column">Product</td>
                                    <td class="product-image-title">
                                        <a href="#" class="image"><img class="img-responsive"
                                                src="assets/images/product-image/19.jpg" alt="Compare Product" /></a>
                                        <a href="#" class="category">Camera</a>
                                        <a href="#" class="title">Zeon Zen 4 Pro</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="#" class="image"><img class="img-responsive"
                                                src="assets/images/product-image/24.jpg" alt="Compare Product" /></a>
                                        <a href="#" class="category">Doren</a>
                                        <a href="#" class="title">Aquet Doren D 420</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="#" class="image"><img class="img-responsive"
                                                src="assets/images/product-image/10.jpg" alt="Compare Product" /></a>
                                        <a href="#" class="category">Games</a>
                                        <a href="#" class="title">Game Station X 22</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Description</td>
                                    <td class="pro-desc">
                                        <p>Samsome Note Book Pro 5 is the best Laptop on this budget. You can satisfy
                                            after usign this laptop. It’s performance is awesome. Designer’s love it.
                                        </p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Samsome Note Book Pro 5 is the best Laptop on this budget. You can satisfy
                                            after usign this laptop. It’s performance is awesome. Designer’s love it.
                                        </p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Samsome Note Book Pro 5 is the best Laptop on this budget. You can satisfy
                                            after usign this laptop. It’s performance is awesome. Designer’s love it.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Price</td>
                                    <td class="pro-price">$295</td>
                                    <td class="pro-price">$275</td>
                                    <td class="pro-price">$395</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Color</td>
                                    <td class="pro-color">Black</td>
                                    <td class="pro-color">Black</td>
                                    <td class="pro-color">Black</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Add to cart</td>
                                    <td class="pro-addtocart">
                                        <a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a>
                                    </td>
                                    <td class="pro-addtocart">
                                        <a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a>
                                    </td>
                                    <td class="pro-addtocart">
                                        <a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Delete</td>
                                    <td class="pro-remove">
                                        <button><i class="ion-trash-b"></i></button>
                                    </td>
                                    <td class="pro-remove">
                                        <button><i class="ion-trash-b"></i></button>
                                    </td>
                                    <td class="pro-remove">
                                        <button><i class="ion-trash-b"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Rating</td>
                                    <td class="pro-ratting">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </td>
                                    <td class="pro-ratting">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star-outline"></i>
                                    </td>
                                    <td class="pro-ratting">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star-half"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Compare area end -->
@stop()