<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop');
    Route::get('/products', [ShopController::class, 'products'])->name('shop.products');
    Route::get('/product/{handle}', [ShopController::class, 'show'])->name('shop.show_product');

    //Route::get('/do-charge', [ShopController::class, 'doCharge'])->name('shop.docharge');
    Route::match(array('GET', 'POST'), '/charge', [PaymentController::class, 'doCharge'])->name('shop.charge');
});
