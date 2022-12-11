<?php

use App\Http\Controllers\API\Admin\penjualanController;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Cust\customersController;
use App\Http\Controllers\API\Produk\produkController;
use App\Http\Controllers\API\Type\kategoriController;
use App\Http\Controllers\API\User\pembelianController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('register', 'API\Auth\AuthController@register');
// Route::post('login', 'API\Auth\AuthController@login');
Route::post('/register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

//penjualan
Route::get('penjualan', [penjualanController::class, 'index']);
Route::post('penjualan/add', [penjualanController::class, 'add']);

//pembelian
Route::get('/pembelian', [pembelianController::class, 'index']);
Route::post('pembelian/add', [pembelianController::class, 'add']);

//kategori
Route::get('/kategori', [kategoriController::class, 'index']);
Route::post('kategori/add', [kategoriController::class, 'add']);

//customers
Route::get('/customer', [customersController::class, 'index']);
Route::post('customer/add', [customersController::class, 'add']);

//produk
Route::get('/produk', [produkController::class, 'index']);
Route::post('produk/add', [produkController::class, 'add']);

//API
Route::post('register', [AuthController::class, 'register']);
Route::post('login',[AuthController::class, 'login']);

//CRUD
Route::get('kategori',[kategoriController::class, 'index']);
Route::post('kategori/add',[kategoriController::class, 'add']);

Route::get('produk',[produkController::class, 'index']);
Route::post('produk/add',[produkController::class, 'add']);

//Transaksi Pembelian
Route::get('pembelian',[pembelianController::class, 'index']);
Route::post('pembelian/add',[pembelianController::class, 'add']);
Route::post('pembelian/update',[pembelianController::class, 'update']);
Route::post('pembelian/destroy',[pembelianController::class, 'destroy']);
