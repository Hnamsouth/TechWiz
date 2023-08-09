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
Route::middleware(['auth', 'admin'])->prefix(env('ADMIN_PATH'))->group(function () {

    Route::get("/dashboard", [\App\Http\Controllers\WebController::class, "home"]);


    Route::prefix('newspaper')->group(function () {

        Route::get('/list', [\App\Http\Controllers\NewspaperControllner::class, "list"]);


        Route::get('/details-c/{newspaper:slug}', [\App\Http\Controllers\NewspaperControllner::class, "details"])->name('newspaper.details');

        Route::put('/details-b/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "lenLich"])->name('newspaper_lenlich');
        Route::get('/details-a/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "khongDuyetBai"])->name('newspaper.khongduyet');

        Route::get('/create', [\App\Http\Controllers\NewspaperControllner::class, "create"]);
        Route::post('/create', [\App\Http\Controllers\NewspaperControllner::class, "save"]);
        Route::get('/bai-viet-cua-toi', [\App\Http\Controllers\NewspaperControllner::class, "myNews"]);
        Route::get('/edit/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "edit"])->name('newspaper.edit');
        Route::put('/edit/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "update"])->name('newspaper.update');
        Route::get('/list/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "goBai"])->name('newspaper.gobai');
        Route::delete('/list/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "xoaBai"])->name('newspaper.xoabai');


    });


    Route::prefix('user')->group(function () {
        Route::get('/list', [\App\Http\Controllers\UserControllner::class, "list"]);
        Route::get('/create', [\App\Http\Controllers\UserControllner::class, "create"]);
        Route::post('/create-a', [\App\Http\Controllers\UserControllner::class, "save"]);
        Route::post("/list-a/{user}", [\App\Http\Controllers\UserControllner::class, "deleteUser"])->name('user.xoaphongvien');



    });

    Route::prefix('title')->group(function () {
        Route::get("/list", [\App\Http\Controllers\TitleControllner::class, "list"]);
        Route::get('/create', [\App\Http\Controllers\TitleControllner::class, "create"]);
        Route::post('/create-a', [\App\Http\Controllers\TitleControllner::class, "save"]);


    });
    Route::prefix('comment')->group(function () {
        Route::get("/list", [\App\Http\Controllers\CommentControllner::class, "list"]);
        Route::delete("/list/{comment}", [\App\Http\Controllers\CommentControllner::class, "delete"])->name('comment.xoabinhluan');
        Route::post('/create-a', [\App\Http\Controllers\CommentControllner::class, "save"]);


    });


});
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/match', [HomeController::class, 'match'])->name('match');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/playerdetail', [HomeController::class, 'playerdetail'])->name('playerdetail');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/productdetail', [HomeController::class, 'productdetail'])->name('productdetail');


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
});
