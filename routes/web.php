<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('about', [HomeController::class,'about'])->name('about');
Route::get('blog', [HomeController::class,'blog'])->name('blog');
Route::get('contact', [HomeController::class,'contact'])->name('contact');
Route::get('cart', [HomeController::class,'cart'])->name('cart');
Route::get('checkout', [HomeController::class,'checkout'])->name('checkout');
Route::get('blog-detail', [HomeController::class,'blogDetail'])->name('blogDetail');
Route::get('wishlist', [HomeController::class,'wishlist'])->name('wishlist');
Route::get('faq', [HomeController::class,'faq'])->name('faq');
Route::get('login-register', [HomeController::class,'logReg'])->name('logReg');
Route::get('single-product', [HomeController::class,'singleProduct'])->name('singleProduct');
Route::get('my-account', [HomeController::class,'myAccount'])->name('myAccount');

Route::get('shop', [ShopController::class,'index'])->name('shop');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
