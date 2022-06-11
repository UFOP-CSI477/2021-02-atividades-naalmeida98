<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Models\Equipamento;
use App\Models\Registro;
use App\Models\User;

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

Route::get('/users/index', function () {
    $users = User::orderBy('name')->paginate(20);
    return view('users.index', ['users' => $users]);
})->middleware(['auth']);

Route::get('/users/create', function () {
    return view('users.create');
})->middleware(['auth']);

Route::get('/manutencoes/create_form', function () {
    $equipamentos = Equipamento::get();
    return view('manutencoes.create_form', ['equipamentos' => $equipamentos]);
})->middleware(['auth']);

// Route::get('/manutencoes/index2', function () {
//     $manutencoes = Registro::orderBy('datalimite')->paginate(20);
//     foreach($manutencoes as $m){
//         $user = User::where('id', $m->user_id)->get();
//         $equipamento = Equipamento::where('id', $m->equipamento_id)->get();

//         $m->user_nome = $user['name'];
//         $m->equipamento_nome = $equipamento['nome'];
//     }

//     return view('manutencoes.index', ['manutencoes' => $manutencoes]);
// })->middleware(['auth']);

Route::get('/app', function () {
    return view('app');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/equipamentos', EquipamentoController::class);
Route::resource('/manutencoes', RegistroController::class);
