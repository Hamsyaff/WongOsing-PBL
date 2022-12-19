<?php



// use App\Http\Controllers\backend\HomeController;

use App\Http\Controllers\backend\userController;
use App\Http\Controllers\backend\CheckoutController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\LogoutController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\UsersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('user.index');
//     })->name('dashboard');
// });

Route::get('/', [UsersController::class, 'checkUserType']);

Route::get('/admin/dashboard', function () {
    return view('admin.admin_master');
})->name('admin.dashboard');

Route::get('/owner/dashboard', function () {
    return view('owner.owner_master');
})->name('owner.dashboard');

Route::get('/user/home', function () {
    return view('user.homepage');
})->name('user.home');

Route::get('/home', function () {
    return view('user.index');
})->name('home');




Route::get('/Logout/logout', [LogoutController::class, 'logout'])->name('admin.logout');

//user
Route::prefix('users')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'DashboardView'])->name('user.index');
    Route::get('/view', [CheckoutController::class, 'CheckoutView'])->name('checkout.view');
    Route::get('/shop', [ProductController::class, 'ProductView'])->name('product.view');
    Route::get('/about', [userController::class, 'AboutView'])->name('about.view');
    Route::get('/contact', [userController::class, 'ContactView'])->name('contact.view');
});
