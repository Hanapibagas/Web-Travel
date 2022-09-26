<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('detail', [DetailController::class, 'detail'])->name('detail');
Route::get('checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout-success');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('travel-package', TravelPackageController::class);
});

Auth::routes(['verify' => true]);
