
<?php

use Illuminate\Support\Facades\Route;
Route::middleware(['auth','admin'])->group(function () {

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
// -- LEAGUE --
    Route::prefix('league')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\LeagueController::class, 'list'])->name('match-list');
        Route::get('/detail/{league:id}', [\App\Http\Controllers\Admin\LeagueController::class, 'detail'])->name('league-detail');
        Route::get('/create', [\App\Http\Controllers\Admin\LeagueController::class, 'create']);
        Route::post('/create', [\App\Http\Controllers\Admin\LeagueController::class, 'store']);
        Route::get('/edit/{league:id}', [\App\Http\Controllers\Admin\LeagueController::class, 'edit']);
        Route::put('/edit/{league:id}', [\App\Http\Controllers\Admin\LeagueController::class, 'update']);
        Route::delete('/delete/{league:id}', [\App\Http\Controllers\Admin\LeagueController::class, 'delete']);
    });
// -- MATCH --
    Route::prefix('match')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\MatchController::class, 'list'])->name('match-list');
        Route::get('/detail/{match:id}', [\App\Http\Controllers\Admin\MatchController::class, 'detail'])->name('match-detail');
        Route::get('/create', [\App\Http\Controllers\Admin\MatchController::class, 'create']);
        Route::post('/create', [\App\Http\Controllers\Admin\MatchController::class, 'store']);
        Route::get('/edit/{match:id}', [\App\Http\Controllers\Admin\MatchController::class, 'edit']);
        Route::put('/edit/{match:id}', [\App\Http\Controllers\Admin\MatchController::class, 'update']);
        Route::delete('/delete/{match:id}', [\App\Http\Controllers\Admin\MatchController::class, 'delete']);
    });
// -- BLOG --
    Route::prefix('blog')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\BlogController::class, 'list'])->name('blog-list');
        Route::get('/detail/{blog:id}', [\App\Http\Controllers\Admin\BlogController::class, 'detail'])->name('blog-detail');
        Route::get('/create', [\App\Http\Controllers\Admin\BlogController::class, 'create']);
        Route::post('/create', [\App\Http\Controllers\Admin\BlogController::class, 'store']);
        Route::get('/edit/{blog:id}', [\App\Http\Controllers\Admin\BlogController::class, 'edit']);
        Route::put('/edit/{blog:id}', [\App\Http\Controllers\Admin\BlogController::class, 'update']);
        Route::delete('/delete/{blog:id}', [\App\Http\Controllers\Admin\BlogController::class, 'delete']);
    });




});
