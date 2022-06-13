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

Route::get('/auth', function () {
    return view('adm');
})->middleware(['auth'])->name('dashboard');

Route::get('/rel_equip', function () {
    $equipamentos = Equipamento::get();
    return view('manutencoes.rel_equip', ['equipamentos' => $equipamentos, 'manutencoes' => '']);
})->middleware(['auth']);

Route::get('/rel_equip/{equipamento}', function ($equipamento) {
    $manutencoes = Registro::where(['equipamento_id' => $equipamento])->get();
    $equipamentos = Equipamento::get();
    return view('manutencoes.rel_equip', ['equipamentos' => $equipamentos, 'manutencoes' => $manutencoes]);
})->middleware(['auth']);



require __DIR__.'/auth.php';

Route::resource('/equipamentos', EquipamentoController::class);
Route::resource('/manutencoes', RegistroController::class);
