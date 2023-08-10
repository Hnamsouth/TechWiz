<?php
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
        Route::delete('delete/{team:id}',[\App\Http\Controllers\Admin\TeamController::class,"delete"])->name('team-delete');
    });

    // PLAYER
    Route::prefix('player')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\PlayerController::class,"list"])->name('player-list');
        Route::get("/create",[\App\Http\Controllers\Admin\PlayerController::class,"create"])->name('player-create');
        Route::post("/create",[\App\Http\Controllers\Admin\PlayerController::class,"store"]);
        Route::get("/edit",[\App\Http\Controllers\Admin\PlayerController::class,"edit"])->name('player-edit');
        Route::put("/edit",[\App\Http\Controllers\Admin\PlayerController::class,"update"]);
        Route::delete('delete/{player:id}',[\App\Http\Controllers\Admin\PlayerController::class,"delete"])->name('player-delete');
    });
