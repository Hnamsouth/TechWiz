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




Route::get('/shop', [HomeController::class, 'shopProduct'])->name('shop-product');
//Route::get('/uplogo', [\App\Http\Controllers\WebController::class, 'uplogo'])->name('shop-product');
//Route::get('/uplogo-player', [\App\Http\Controllers\WebController::class, 'uplogoPlayer'])->name('shop-product');

Route::get('/match', [HomeController::class, 'match'])->name('match');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::prefix('/contact')->group(function () {
    Route::get('/', [\App\Http\Controllers\FeedbackController::class, 'create'])->name('contact');
    Route::get('/create', [\App\Http\Controllers\FeedbackController::class, 'create']);
    Route::post('/create', [\App\Http\Controllers\FeedbackController::class, 'store']);
});
//Route::get('/playerdetail', [HomeController::class, 'playerdetail'])->name('playerdetail');
Route::get('/checkout', [HomeController::class, 'checkout'])->middleware(['auth'])->name('checkout');
Route::post('/checkout', [HomeController::class, 'placeOrder'])->middleware(['auth'])->name('placeOrder');

Route::get('/point-table', [\App\Http\Controllers\Client\MatchController::class, 'PointTable'])->name('point_table');
Route::get('/team', [HomeController::class, 'PointTable'])->name('team');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/player-detail/{player:id}', [HomeController::class, 'playerdetail'])->name('playerdetail');



Route::get('/club-history', [HomeController::class, 'clubHistory'])->name('club-history');
//commit


Route::get('/match-rs/{match:id}',[\App\Http\Controllers\Client\MatchController::class,'match_result'])->name('match_rs');


//Product router

Route::get('/product-detail/{product:slug}', [HomeController::class, 'productDetail'])->name('product-detail');
Route::get('add-to-cart/{product:slug}', [HomeController::class, 'addToCart'])->name('add-to-cart');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/update-cart', [HomeController::class, 'updateCart'])->name('cart');
Route::post('/delete-from-cart/{product:slug}', [HomeController::class, 'deleteFromCart'])->name('cart');
/* -- PAYPAL -- */
Route::get('/process-paypal/{order:code}', [HomeController::class, 'processPaypal'])->middleware(['auth'])->name('process_paypal');
Route::get('/success-paypal/{order:code}', [HomeController::class, 'successPaypal'])->middleware(['auth'])->name('success_paypal');
Route::get('/cancel-paypal/{order:code}', [HomeController::class, 'cancelPaypal'])->middleware(['auth'])->name('cancel_paypal');

/* -- Account section -- */
Route::get('/my-account', [HomeController::class, "myAccount"])->middleware(['auth']);
Route::post('/update-user-info', [HomeController::class, "updateUserInfo"])->middleware(['auth']);
Route::get('/my-account/change-password', [HomeController::class, "changePassword"])->middleware(['auth']);
Route::post('/my-account/change-password', [HomeController::class, "changePasswordSave"])->middleware(['auth']);
Route::get('/order-history', [HomeController::class, "orderHistory"])->middleware(['auth']);
Route::get('/order-detail/{order:code}', [HomeController::class, "orderDetail"])->middleware(['auth']);
Route::post('/cancel-order', [HomeController::class, "cancelOrder"]);

/* ---------------------------------------------------- */
/* ------------------ ADMIN2 INTERFACE ---------------- */
/* ---------------------------------------------------- */
