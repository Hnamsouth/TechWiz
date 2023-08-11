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
Route::get('/blog-details', [HomeController::class, 'blogDetails'])->name('blog-details');
Route::get('/shop', [HomeController::class, 'shopProduct'])->name('shop-product');
Route::get('/match', [HomeController::class, 'match'])->name('match');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/playerdetail', [HomeController::class, 'playerdetail'])->name('playerdetail');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/product-detail/{product:slug}', [HomeController::class, 'productDetail'])->name('product-detail');
Route::get('/club-history', [HomeController::class, 'clubHistory'])->name('club-history');
//commit


Route::get('/match-rs/{match:id}',[\App\Http\Controllers\Client\MatchController::class,'match_result'])->name('match_rs');
