<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\WO\kategoriController;
use App\Http\Controllers\WO\pembelianController;
use App\Http\Controllers\WO\produkController;
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