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
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
//Route::get('/playerdetail', [HomeController::class, 'playerdetail'])->name('playerdetail');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/product-detail', [HomeController::class, 'productDetail'])->name('product-detail');
Route::get('/club-history', [HomeController::class, 'clubHistory'])->name('club-history');
Route::get('/profile', [\App\Http\Controllers\PlayerController::class, 'player'])->name('club-history');

//commit

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
