<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerConsultaEquipamento;
use App\Http\Controllers\ControllerManutencaoEquipamento;

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

Route::get('/equipamentos', [ControllerConsultaEquipamento::class, 'listar']);
Route::get('/equipamentos/inserir', [ControllerManutencaoEquipamento::class, 'montaTelaInsercao']);
Route::get('/equipamentos/alterar/{id}', [ControllerManutencaoEquipamento::class, 'montaTelaAlteracao']);
Route::post('/equipamentos/alterar/save', [ControllerManutencaoEquipamento::class, 'saveFormUpdate']);
Route::post('/equipamentos/inserir/save', [ControllerManutencaoEquipamento::class, 'saveFormInsert']);
