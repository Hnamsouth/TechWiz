<?php
// CHECK OUT
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
//Route::post('/checkout', [HomeController::class, 'placeOrder']);

/* -- PAYPAL -- */
Route::get('/process-paypal/{order:code}', [HomeController::class, 'processPaypal'])->name('process_paypal');
Route::get('/success-paypal/{order:code}', [HomeController::class, 'successPaypal'])->name('success_paypal');
Route::get('/cancel-paypal/{order:code}', [HomeController::class, 'cancelPaypal'])->name('cancel_paypal');

/* -- Account section -- */
Route::get('/my-account', [HomeController::class, "myAccount"]);
Route::post('/update-user-info', [HomeController::class, "updateUserInfo"]) ;
Route::get('/my-account/change-password', [HomeController::class, "changePassword"]);
Route::post('/my-account/change-password', [HomeController::class, "changePasswordSave"]);
Route::get('/order-history', [HomeController::class, "orderHistory"]);
Route::get('/order-detail/{order:code}', [HomeController::class, "orderDetail"]);
Route::post('/cancel-order', [HomeController::class, "cancelOrder"]);
