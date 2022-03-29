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
            $cats = Category::orderBy('name','ASC')->get();
            $view->with(compact('cats'));
        });
    }
}
