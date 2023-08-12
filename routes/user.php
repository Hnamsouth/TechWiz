<?php
// CHECK OUT
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//


/* -- Account section -- */
Route::get('/my-account', [HomeController::class, "myAccount"]);
Route::post('/update-user-info', [HomeController::class, "updateUserInfo"]) ;
Route::get('/my-account/change-password', [HomeController::class, "changePassword"]);
Route::post('/my-account/change-password', [HomeController::class, "changePasswordSave"]);
Route::get('/order-history', [HomeController::class, "orderHistory"]);
Route::get('/order-detail/{order:code}', [HomeController::class, "orderDetail"]);
Route::post('/cancel-order', [HomeController::class, "cancelOrder"]);
