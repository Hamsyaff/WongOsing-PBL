<?php

<<<<<<< HEAD
use App\Http\Controllers\backend\CheckoutController;
use App\Http\Controllers\backend\HomeController;
=======
use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\CheckoutController;
>>>>>>> a0160971ad3349c8e9cfe85bfce350e0b0d283b8
use App\Http\Controllers\backend\LogoutController;
use App\Http\Controllers\backend\ProductController;
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

Route::get('/view', [CheckoutController::class, 'CheckoutView'])->name('checkout.view');
Route::get('/shop', [ProductController::class, 'ProductView'])->name('product.view');
Route::get('/about', [adminController::class, 'AboutView'])->name('about.view');
Route::get('/contact', [adminController::class, 'ContactView'])->name('contact.view');
