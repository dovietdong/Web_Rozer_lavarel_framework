<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
//use lại cái bootstrap vì lavarel nó sử dụng thư viện khác bootstrap
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        //để sử dụng bóotrap trong lavarel
        Paginator::useBootstrap();
        //sử dụng biến global hiển thị ở tất cả các trang
        view()->composer('*', function($view){
            //hiển thị xem nhanh các sản phẩm trong giỏ hàng 
            //truyền mảng cart trong session vào và compact qua view
            $carts = session('cart') ? session('cart'):[];
            //tổng số lượng sản phẩm
            $totalQuantity = 0;
            //tổng giá sản phẩm
            $totalPrice = 0;
            foreach($carts as $cart){
                $totalQuantity += $cart->quantity;
                $totalPrice += $cart->quantity * $cart->price;
            }
            $cats = Category::orderBy('name','ASC')->get();
            $view->with(compact('cats','carts','totalQuantity','totalPrice'));
        });
        
    }
}