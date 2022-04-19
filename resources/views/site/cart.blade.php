@extends('layout.main')

@section('title', 'Cart')

@section('cart')
<!-- cart area start -->
<div class="cart-main-area mtb-60px">
    <div class="container">
        <h3 class="cart-page-title">Your cart items</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="{{route('cart-update')}}" method="get">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carts as $cart)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img class="img-responsive"
                                                src="{{url('uploads')}}/{{$cart->image}}" alt="{{$cart->image}}" /></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{$cart->name}}</a></td>
                                    <td class="product-price-cart"><span class="amount">${{$cart->price}}</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="{{$cart->id}}" value="{{$cart->quantity}}" />
                                        </div>
                                    </td>
                                    <td class="product-subtotal">${{$cart->price * $cart->quantity}}</td>
                                    <td class="product-remove">

                                        <a href="{{route('cart-remove',$cart->id)}}"
                                            onclick="return confirm('Bạn có muốn xóa sản phẩm này khỏi giỏ hàng không?')"><i
                                                class="icon-close"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{route('index')}}">Continue Shopping</a>
                                </div>
                                <div class="cart-clear">
                                    <button>Update Shopping Cart</button>
                                    <a href="{{route('cart-clear')}}"
                                        onclick="return confirm('Bạn có muốn xóa hết giỏ hàng không?')">Clear Shopping
                                        Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">


                    <div class="col-lg-4 col-md-12 mt-md-30px">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                            </div>
                            <h5>Total quantity <span>{{$totalQuantity}}</span></h5>
                            <h5>Total products <span>${{$totalPrice}}</span></h5>
                            <div class="total-shipping">
                                <h5>Total shipping</h5>
                                <ul>
                                    <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                    <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                </ul>
                            </div>
                            <h4 class="grand-totall-title">Grand Total <span>${{$totalPrice}}</span></h4>
                            <a href="{{route('checkout')}}">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart area end -->
@stop()