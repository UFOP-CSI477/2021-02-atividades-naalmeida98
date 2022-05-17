<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('home');
});

//estou vinculando todos os métodos do estado, logo, assumo todas as suas rotas
Route::resource('/estados', EstadoController::class);
