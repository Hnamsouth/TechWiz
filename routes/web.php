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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/match', [HomeController::class, 'match'])->name('match');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/playerdetail', [HomeController::class, 'playerdetail'])->name('playerdetail');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/productdetail', [HomeController::class, 'productdetail'])->name('productdetail');


