<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RingController;
use App\Http\Controllers\ProductController;


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


//VIEW PRINCIPAL
Route::get('/', function () {
    return view('home');
});



// CONTROLERS
Route::resource('/rings', RingController::class);
Route::resource('/products', ProductController::class);


