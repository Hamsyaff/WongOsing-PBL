<?php

use App\Http\Controllers\backend\CheckoutController;
use App\Http\Controllers\backend\LogoutController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/Logout/logout', [LogoutController::class, 'logout'])->name('admin.logout');

// All Route User

Route::prefix('home')->group(function () {

    Route::get('/shop', [CheckoutController::class, 'Shopcart'])->name('admin.backend.shoping-cart');
    // Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/checkout', [CheckoutController::class, 'CheckoutView'])->name('admin.backend.checkout');
    // Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    // Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});
