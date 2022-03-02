<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'] )->name('index');
Route::get('/Shop',  [HomeController::class, 'shop'])->name('shop');
Route::get('/About',  [HomeController::class, 'about'])->name('about');
Route::get('/Blogs',  [HomeController::class, 'blog'])->name('blog');
Route::get('/Contact',  [HomeController::class, 'contact'])->name('contact');



Route::post('/phuong-thuc-route::post',  [HomeController::class, 'post'])->name('post_method');

