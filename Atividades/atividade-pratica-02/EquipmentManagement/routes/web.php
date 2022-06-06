<?php

use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
// use App\Http\Controllers\UserController;
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
    return view('app');
});


// CONTROLERS
Route::resource('/equipamentos', EquipamentoController::class);
Route::resource('/manutencoes', RegistroController::class);
// Route::resource('/usuarios', UserController::class);
