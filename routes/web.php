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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-details', [HomeController::class, 'blogDetails'])->name('blog-details');
Route::get('/shop', [HomeController::class, 'shopProduct'])->name('shop-product');

Route::get('/match', [HomeController::class, 'match'])->name('match');
Route::get('/point-table', [\App\Http\Controllers\Client\MatchController::class, 'PointTable'])->name('point_table');
Route::get('/team', [HomeController::class, 'PointTable'])->name('team');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/player-detail/{player:id}', [HomeController::class, 'playerdetail'])->name('playerdetail');
Route::prefix('/contact')->group(function(){
    Route::get('/', [\App\Http\Controllers\FeedbackController::class, 'create'])->name('contact');
    Route::get('/create', [\App\Http\Controllers\FeedbackController::class, 'create']);
    Route::post('/create', [\App\Http\Controllers\FeedbackController::class, 'store']);
});
//Route::get('/playerdetail', [HomeController::class, 'playerdetail'])->name('playerdetail');
Route::get('/checkout', [HomeController::class, 'checkout'])->middleware(['auth'])->name('checkout');
Route::post('/checkout', [HomeController::class, 'placeOrder'])->middleware(['auth'])->name('placeOrder');
Route::get('/product-detail/{product:slug}', [HomeController::class, 'productDetail'])->name('product-detail');
Route::get('add-to-cart/{product:slug}', [HomeController::class, 'addToCart'])->name('add-to-cart');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/update-cart', [HomeController::class, 'updateCart'])->name('cart');
Route::post('/delete-from-cart/{product:slug}', [HomeController::class, 'deleteFromCart'])->name('cart');
Route::get('/club-history', [HomeController::class, 'clubHistory'])->name('club-history');
Route::prefix("profile")->group(function (){
    Route::get('/{player:name}', [\App\Http\Controllers\PlayerController::class, 'detail']);
});


//commit


Route::get('/match-rs/{match:id}',[\App\Http\Controllers\Client\MatchController::class,'match_result'])->name('match_rs');


/* -- PAYPAL -- */
Route::get('/process-paypal/{order:code}', [HomeController::class, 'processPaypal'])->middleware(['auth'])->name('process_paypal');
Route::get('/success-paypal/{order:code}', [HomeController::class, 'successPaypal'])->middleware(['auth'])->name('success_paypal');
Route::get('/cancel-paypal/{order:code}', [HomeController::class, 'cancelPaypal'])->middleware(['auth'])->name('cancel_paypal');

/* -- Account section -- */
Route::get('/my-account', [HomeController::class, "myAccount"])->middleware(['auth']);
Route::post('/update-user-info', [HomeController::class, "updateUserInfo"])->middleware(['auth']) ;
Route::get('/my-account/change-password', [HomeController::class, "changePassword"])->middleware(['auth']);
Route::post('/my-account/change-password', [HomeController::class, "changePasswordSave"])->middleware(['auth']);
Route::get('/order-history', [HomeController::class, "orderHistory"])->middleware(['auth']);
Route::get('/order-detail/{order:code}', [HomeController::class, "orderDetail"])->middleware(['auth']);
Route::post('/cancel-order', [HomeController::class, "cancelOrder"]);

/* ---------------------------------------------------- */
/* ------------------ ADMIN2 INTERFACE ---------------- */
/* ---------------------------------------------------- */
Route::prefix("admin")->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'home']);

    // -- PRODUCT --
    Route::prefix('product')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'list']);
        Route::get('/detail/{product:slug}', [\App\Http\Controllers\Admin\ProductController::class, 'detail']);
        Route::get('/create', [\App\Http\Controllers\Admin\ProductController::class, 'create']);
        Route::post('/create', [\App\Http\Controllers\Admin\ProductController::class, 'store']);
        Route::get('/edit/{product:slug}', [\App\Http\Controllers\Admin\ProductController::class, 'edit']);
        Route::put('/edit/{product:slug}', [\App\Http\Controllers\Admin\ProductController::class, 'update']);
        Route::delete('/delete/{product:slug}', [\App\Http\Controllers\Admin\ProductController::class, 'delete']);
        Route::get('/deleted', [\App\Http\Controllers\Admin\ProductController::class, 'deleted']);
        Route::post('/restore', [\App\Http\Controllers\Admin\ProductController::class, 'restore']);
    });
    // -- CATEGORY --
    Route::prefix('category')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'list']);
        Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create']);
        Route::post('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'store']);
        Route::get('/edit/{category:slug}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']);
        Route::put('/edit/{category:slug}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);
        Route::delete('/delete/{category:slug}', [\App\Http\Controllers\Admin\CategoryController::class, 'delete']);
        Route::get('/deleted', [\App\Http\Controllers\Admin\CategoryController::class, 'deleted']);
        Route::post('/restore', [\App\Http\Controllers\Admin\CategoryController::class, 'restore']);
    });
    // -- ORDER --
    Route::prefix('order')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\OrderController::class, "list"]);
        Route::get('/detail/{order:code}', [\App\Http\Controllers\Admin\OrderController::class, "detail"]);
        Route::put('/detail/{order:code}', [\App\Http\Controllers\Admin\OrderController::class, "updateStatus"]);
    });
    // -- USER (CUSTOMER) --
    Route::prefix('user')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\UserController::class, "userList"])->name('user-list');
        Route::get('/detail/{user:id}', [\App\Http\Controllers\Admin\UserController::class, "userDetail"])->name('user-detail');
    });
    // -- USER FEEDBACK --
    Route::get('/feedback', [\App\Http\Controllers\FeedbackController::class, "list"])->name('feedback');

});
