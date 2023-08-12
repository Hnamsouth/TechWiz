<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
//
//Route::get('/', function () {
//    return view('guest.home');
//});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{blog:id}', [HomeController::class, 'blogDetails']);

Route::get('/checkout', [HomeController::class, 'checkout'])->middleware(['auth'])->name('checkout');
Route::post('/checkout', [HomeController::class, 'placeOrder'])->middleware(['auth'])->name('placeOrder');

/* -- PAYPAL -- */
Route::get('/process-paypal/{order:code}', [HomeController::class, 'processPaypal'])->name('process_paypal');
Route::get('/success-paypal/{order:code}', [HomeController::class, 'successPaypal'])->name('success_paypal');
Route::get('/cancel-paypal/{order:code}', [HomeController::class, 'cancelPaypal'])->name('cancel_paypal');


Route::get('/shop', [HomeController::class, 'shopProduct'])->name('shop-product');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::prefix('/contact')->group(function(){
    Route::get('/', [\App\Http\Controllers\FeedbackController::class, 'create'])->name('contact');
    Route::get('/create', [\App\Http\Controllers\FeedbackController::class, 'create']);
    Route::post('/create', [\App\Http\Controllers\FeedbackController::class, 'store']);
});


Route::get('/product-detail/{product:slug}', [HomeController::class, 'productDetail'])->name('product-detail');
Route::get('add-to-cart/{product:slug}', [HomeController::class, 'addToCart'])->name('add-to-cart');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/update-cart', [HomeController::class, 'updateCart'])->name('cart');
Route::post('/delete-from-cart/{product:slug}', [HomeController::class, 'deleteFromCart'])->name('cart');
Route::get('/club-history', [HomeController::class, 'clubHistory'])->name('club-history');
Route::prefix("profile")->group(function (){
    Route::get('/{player:name}', [\App\Http\Controllers\PlayerController::class, 'detail']);
});




