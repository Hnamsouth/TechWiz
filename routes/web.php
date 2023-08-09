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
Route::get('/shop', [HomeController::class, 'index2'])->name('shop');
Route::get('/match', [HomeController::class, 'index3'])->name('match');
Route::get('/team', [HomeController::class, 'index4'])->name('team');
Route::get('/contact', [HomeController::class, 'index5'])->name('contact');
Route::get('/playerdetail', [HomeController::class, 'index6'])->name('playerdetail');
