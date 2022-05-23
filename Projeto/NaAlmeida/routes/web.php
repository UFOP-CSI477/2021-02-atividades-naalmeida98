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
Route::resource('/rings', RingController::class);
Route::resource('/bracelets', BraceletController::class);
Route::resource('/necklaces', NecklaceController::class);
Route::resource('/earrings', EarringController::class);
Route::resource('/pendants', PendantController::class);

