<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RingController;
use App\Http\Controllers\braceletController;
use App\Http\Controllers\EarringController;
use App\Http\Controllers\NecklaceController;
use App\Http\Controllers\PendantController;

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
Route::resource('/ring', RingController::class);
Route::resource('/bracelet', BraceletController::class);
Route::resource('/necklace', NecklaceController::class);
Route::resource('/earring', EarringController::class);
Route::resource('/pendant', PendantController::class);

