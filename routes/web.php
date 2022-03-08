<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => ''], function() {
    Route::get('/', [HomeController::class, 'index'] )->name('index');
    Route::get('/shop',  [HomeController::class, 'shop'])->name('shop');
    Route::get('/about',  [HomeController::class, 'about'])->name('about');
    Route::get('/blog',  [HomeController::class, 'blog'])->name('blog');
    Route::get('/contact',  [HomeController::class, 'contact'])->name('contact');
    Route::get('/cart',  [HomeController::class, 'cart'])->name('cart');
    Route::get('/checkout',  [HomeController::class, 'checkout'])->name('checkout');
    Route::get('/login',  [HomeController::class, 'login'])->name('login');
    Route::get('/account',  [HomeController::class, 'account'])->name('account');
    Route::get('/wishlist',  [HomeController::class, 'wishlist'])->name('wishlist');
    Route::get('/product',  [HomeController::class, 'single_product'])->name('single-product');
    Route::get('/thank you',  [HomeController::class, 'thankyou'])->name('thankyou');
    Route::get('/compare',  [HomeController::class, 'compare'])->name('compare');
});

// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/',  [HomeController::class, 'admin'])->name('admin');

//     Route::resources([
//         'category' => CategoryController::class,
//         'product' => ProductController::class
//     ]);
// });

Route::prefix('admin')->group(function () {
     Route::get('/',  [HomeController::class, 'admin'])->name('admin');

    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class
    ]);
});


