<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopdetailController;
use App\Http\Controllers\CartController;    
use App\Http\Controllers\ChackoutController;
use App\Http\Controllers\ContactController;


use App\Http\Controllers\FormelementsController;
use App\Http\Controllers\ComponentmodalsController;
use App\Http\Controllers\AuthbasicloginController;
use App\Http\Controllers\AppfullcalenderController;
use App\Http\Controllers\TabledatatableController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shopdetail', [ShopdetailController::class, 'index'])->name('shopdetail');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/chackout', [ChackoutController::class, 'index'])->name('chackout');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/form-elements', [FormelementsController::class, 'index'])->name('form-elements');
    Route::get('/component-modals', [ComponentmodalsController::class, 'index'])->name('component-modals');
    Route::get('/login', [AuthbasicloginController::class, 'index'])->name('auth-basic-login');
    Route::get('/app-full-calender', [AppfullcalenderController::class, 'index'])->name('app-full-calender');
    Route::get('/table-datatable', [TabledatatableController::class, 'index'])->name('table-datatable');
});
