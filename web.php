<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::controller(CustomerController::class)->group(function () {
    Route::get('customer', 'index')->name('index.customer');
    Route::get('customer/{id}', 'showUser')->name('one.user');
    Route::get('customer,saludo/{id}', 'showUserSaludo')->name('user.saludo');
    Route::get('customers/nuevo', 'nuevo')->name('user.crear');
    Route::post('customer', 'store')->name('customer.store');

});
