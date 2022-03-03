@extends('layout.main')

@section('title', 'Wishlist')

@section('wishlist')
<!-- Wishlist area start -->
<div class="cart-main-area mtb-60px">
                <div class="container">
                    <h3 class="cart-page-title">Your cart items</h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <form action="#">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Until Price</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                                <th>Add To Cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a  href="#"><img class="img-responsive" src="assets/images/product-image/2-1.jpg" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">$70.00</td>
                                                <td class="product-wishlist-cart">
                                                    <a href="#">add to cart</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a  href="#"><img class="img-responsive" src="assets/images/product-image/2-2.jpg" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">$80.00</td>
                                                <td class="product-wishlist-cart">
                                                    <a href="#">add to cart</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a  href="#"><img class="img-responsive" src="assets/images/product-image/2-3.jpg" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">$70.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">$90.00</td>
                                                <td class="product-wishlist-cart">
                                                    <a href="#">add to cart</a>
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
            <!-- Wishlist area end -->
@stop()