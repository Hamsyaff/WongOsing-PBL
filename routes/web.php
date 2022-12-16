<?php



// use App\Http\Controllers\backend\HomeController;

use App\Http\Controllers\backend\userController;
use App\Http\Controllers\backend\CheckoutController;
use App\Http\Controllers\backend\DashboardController;
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


Route::get('/', [DashboardController::class, 'index']);

Route::group(['prefix' => 'user/'], function () {
    Route::get("register", [UserController::class, "register"]);
    Route::post("process-register", [UserController::class, "processRegister"]);
    Route::get("register-success/{id}", [UserController::class, "registerSuccess"]);

    // next week
    Route::get("login", [UserController::class, "login"])->name("login");
    Route::post("process-login", [UserController::class, "processLogin"]);

    Route::post("process-logout", [UserController::class, "process-logout"]);
});


// Route::get('/Logout/logout', [LogoutController::class, 'logout'])->name('user.logout');

//user
Route::prefix('users')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'DashboardView'])->name('user.index');
    Route::get('/view', [CheckoutController::class, 'CheckoutView'])->name('checkout.view');
    Route::get('/shop', [ProductController::class, 'ProductView'])->name('product.view');
    Route::get('/about', [userController::class, 'AboutView'])->name('about.view');
    Route::get('/contact', [userController::class, 'ContactView'])->name('contact.view');
});
