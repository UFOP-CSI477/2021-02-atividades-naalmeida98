<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\EntidadeController;
use App\Http\Controllers\ColetaController;
use App\Models\Coleta;
use Illuminate\Support\Facades\DB;

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

Route::get('/geral', function () {
    $coletas_entidade = Coleta::select('entidade_id', DB::raw('SUM(quantidade) as total_qtd'))
    ->groupBy('entidade_id')
    ->get();

    $coletas_item = Coleta::select('item_id', DB::raw('SUM(quantidade) as total_qtd'))
    ->groupBy('item_id')
    ->get();

    $total_item = Coleta::sum('quantidade');

    return view('geral',['coletas_entidade' => $coletas_entidade,
                            'coletas_item' => $coletas_item,
                            'total_item' => $total_item ]);
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/itens', ItemController::class)->middleware(['auth']);
Route::resource('/entidades', EntidadeController::class)->middleware(['auth']);
Route::resource('/coletas', ColetaController::class)->middleware(['auth']);

