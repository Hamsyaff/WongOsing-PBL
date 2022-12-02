<?php

use App\Http\Controllers\Backend\HomeController;
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
Route::prefix('homes')->group(function () {
    Route::get('/view', [HomeController::class, 'HomeView'])->name('admin.index');
});
