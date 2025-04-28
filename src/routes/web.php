<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('grupos', App\Http\Controllers\GruposController::class);
Route::resource('empresas', App\Http\Controllers\EmpresasController::class);
Route::resource('setores', App\Http\Controllers\SetoresController::class);
Route::resource('unidades', App\Http\Controllers\UnidadesController::class);
Route::resource('funcoes', App\Http\Controllers\FuncoesController::class);
Route::resource('funcionarios', App\Http\Controllers\FuncionariosController::class);
Route::resource('medicos', App\Http\Controllers\MedicosController::class);