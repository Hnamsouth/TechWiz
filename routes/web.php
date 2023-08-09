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
    return view('guest.home');
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
