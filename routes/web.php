<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
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
    Route::get('/category/{category}',  [HomeController::class, 'category'])->name('category');
    Route::get('/about',  [HomeController::class, 'about'])->name('about');
    Route::get('/blog',  [HomeController::class, 'blog'])->name('blog');
    Route::get('/contact',  [HomeController::class, 'contact'])->name('contact');
    Route::get('/checkout',  [HomeController::class, 'checkout'])->name('checkout');
    Route::get('/login',  [HomeController::class, 'login'])->name('login');
    Route::get('/account',  [HomeController::class, 'account'])->name('account');
    Route::get('/wishlist',  [HomeController::class, 'wishlist'])->name('wishlist');
    Route::get('//{product}-{slug}',[HomeController::class, 'single_product'])->name('single_product');
    Route::get('/thank you',  [HomeController::class, 'thankyou'])->name('thankyou');
    Route::get('/compare',  [HomeController::class, 'compare'])->name('compare');
});

Route::get('/admin/layout',  [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/layout',  [AdminController::class, 'auth_login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/',  [AdminController::class, 'dashboard'])->name('layout.admin');

    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class
    ]);
});

Route::group(['prefix' => 'cart'], function() {
    Route::get('/',  [CartController::class, 'view'])->name('cart');
    Route::get('/add/{product}',  [CartController::class, 'add'])->name('cart-add');
    Route::get('/update',  [CartController::class, 'update'])->name('cart-update');
    Route::get('/remove/{product}',  [CartController::class, 'remove'])->name('cart-remove');
    Route::get('/clear',  [CartController::class, 'clear'])->name('cart-clear');
    Route::get('/blank',  [CartController::class, 'blank'])->name('cart-blank');
});



