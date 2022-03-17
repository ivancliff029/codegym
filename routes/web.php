<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NewCustomer;
use App\Http\Controllers\NewCustomerController;
use App\ttp\Controllers\DrinksController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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
    return view('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', [App\Http\Controllers\HomeController::class, 'search'])->name('home');
Route::post('/customer', [App\Http\Controllers\NewCustomerController::class, 'store'])->name('customer');
Route::get('/customer', [App\Http\Controllers\NewCustomerController::class, 'index'])->name('customer');
Route::get('/order', [App\Http\Controllers\MakeOrderController::class, 'index'])->name('order');
Route::post('/order', [App\Http\Controllers\MakeOrderController::class, 'store'])->name('order');
Route::get('/display', [App\Http\Controllers\DisplayCustomersController::class, 'index'])->name('display');
Route::get('/display', [App\Http\Controllers\DisplayCustomersController::class, 'search'])->name('display');
Route::get('/confirm-order', [App\Http\Controllers\ConfirmOrderController::class, 'index'])->name('confirm-order');
Route::get('/menu', [App\Http\controllers\MenuController::class, 'index'])->name('menu');
Route::get('/drinks', [App\Http\controllers\DrinksController::class, 'index'])->name('drinks');
Route::post('/drinks', [App\Http\controllers\DrinksController::class, 'store'])->name('drinks');
Route::get('/foods', [App\Http\controllers\FoodsController::class, 'index'])->name('foods');
Route::get('/profile', [App\Http\controllers\UserProfileController::class, 'index'])->name('profile');
