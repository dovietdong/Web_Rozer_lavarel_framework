@extends('layout.main')

@section('title', 'Cart')

@section('cart')
<!-- cart area start -->
<div class="cart-main-area mtb-60px">
    <div class="container">
 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <h1>Bạn chưa thêm sản phẩm nào !</h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{route('index')}}">Continue Shopping</a>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
<!-- cart area end -->
@stop()