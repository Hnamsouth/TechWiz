<?php
use Illuminate\Support\Facades\Route;
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

    // TEAM
    Route::prefix('team')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\TeamController::class,"list"])->name('team-list');
        Route::get("/create",[\App\Http\Controllers\Admin\TeamController::class,"create"])->name('team-create');
        Route::post("/create",[\App\Http\Controllers\Admin\TeamController::class,"store"]);
        Route::get("/edit",[\App\Http\Controllers\Admin\TeamController::class,"edit"])->name('team-edit');
        Route::put("/edit",[\App\Http\Controllers\Admin\TeamController::class,"update"]);
        Route::delete('/delete/{team:id}',[\App\Http\Controllers\Admin\TeamController::class,"delete"])->name('team-delete');
    });

    // PLAYER
    Route::prefix('player')->group(function (){
       Route::get('/',[\App\Http\Controllers\Admin\PlayerController::class,"list"])->name('player-list');
       Route::get("/create",[\App\Http\Controllers\Admin\PlayerController::class,"create"])->name('player-create');
       Route::post("/create",[\App\Http\Controllers\Admin\PlayerController::class,'store']);
       Route::get('/edit',[\App\Http\Controllers\Admin\PlayerController::class,'edit'])->name('player-edit');
       Route::put('/edit',[\App\Http\Controllers\Admin\PlayerController::class,'update']);
       Route::delete('/delete/{players:id}',[\App\Http\Controllers\Admin\PlayerController::class.'delete'])->name('player-delete');
    });

    // Coach
    Route::prefix('coach')->group(function (){
       Route::get('/',[\App\Http\Controllers\Admin\CoachController::class,'list'])->name('coach-list');
       Route::get('/create',[\App\Http\Controllers\Admin\CoachController::class,'create'])->name('coach-create');
       Route::post('/create',[\App\Http\Controllers\Admin\CoachController::class,'store']);
       Route::get('/edit',[\App\Http\Controllers\Admin\CoachController::class,'edit'])->name('coach-edit');
       Route::put('/edit',[\App\Http\Controllers\Admin\CoachController::class,'update']);
       Route::delete('/delete/{coaches:id}',[\App\Http\Controllers\Admin\CoachController::class,'delete'])->name('coach-delete');
    });



    Route::prefix('league')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\LeagueController::class, 'list'])->name('match-list');
        Route::get('/detail/{league:id}', [\App\Http\Controllers\Admin\LeagueController::class, 'detail'])->name('league-detail');
        Route::get('/create', [\App\Http\Controllers\Admin\LeagueController::class, 'create']);
        Route::post('/create', [\App\Http\Controllers\Admin\LeagueController::class, 'store']);
        Route::get('/edit/{league:id}', [\App\Http\Controllers\Admin\LeagueController::class, 'edit']);
        Route::put('/edit/{league:id}', [\App\Http\Controllers\Admin\LeagueController::class, 'update']);
        Route::delete('/delete/{league:id}', [\App\Http\Controllers\Admin\LeagueController::class, 'delete']);
    });
    Route::prefix('match')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\MatchController::class, 'list'])->name('match-list');
        Route::get('/detail/{match:id}', [\App\Http\Controllers\Admin\MatchController::class, 'detail'])->name('match-detail');
        Route::get('/create', [\App\Http\Controllers\Admin\MatchController::class, 'create']);
        Route::post('/create', [\App\Http\Controllers\Admin\MatchController::class, 'store']);
        Route::get('/edit/{match:id}', [\App\Http\Controllers\Admin\MatchController::class, 'edit']);
        Route::put('/edit/{match:id}', [\App\Http\Controllers\Admin\MatchController::class, 'update']);
        Route::delete('/delete/{match:id}', [\App\Http\Controllers\Admin\MatchController::class, 'delete']);
    });




//Route::get('/uplogo', [\App\Http\Controllers\WebController::class, 'uplogo'])->name('shop-product');
//Route::get('/uplogo-player', [\App\Http\Controllers\WebController::class, 'uplogoPlayer'])->name('shop-product');
