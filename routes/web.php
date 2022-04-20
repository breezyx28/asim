<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CheckoutsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentMethodsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsDetailsController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\UsersController;
use App\Models\Product;
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
    return view('pages.welcome', ['products' => Product::limit(8)->get()]);
});

// auth pages
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('loginAction');
Route::post('/register', [LoginController::class, 'storeUser'])->name('storeUser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('registerPage');

Route::get('/shopping', [ShoppingController::class, 'list']);
Route::get('/item', [ShoppingController::class, 'item']);
Route::get('/cart', [ShoppingController::class, 'cart'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'payment'])->name('checkout');
// Route::post('/store-checkout', [CheckoutController::class, 'store'])->name('storeCheckout');
Route::post('/submit-payment', [CheckoutController::class, 'submitPayment'])->name('submitPayment');

// public resource
Route::resource('checkouts', CheckoutsController::class);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // resources
    Route::resource('products', ProductsController::class);
    Route::resource('users', UsersController::class);
    Route::resource('orders', OrdersController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('productDetails', ProductsDetailsController::class);
    Route::resource('paymentMethods', PaymentMethodsController::class);
});
