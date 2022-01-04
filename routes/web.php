<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NewCustomer;
use App\Http\Controllers\NewCustomerController;
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
Route::post('/customer', [App\Http\Controllers\NewCustomerController::class, 'store'])->name('customer');
Route::post('/order', [App\Http\Controllers\MakeOrderController::class, 'search'])->name('order');
Route::get('/customer', [App\Http\Controllers\NewCustomerController::class, 'index'])->name('customer');
Route::get('/order', [App\Http\Controllers\MakeOrderController::class, 'index'])->name('order');
