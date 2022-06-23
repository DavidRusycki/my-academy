<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerConsultaEquipamento;
use App\Http\Controllers\ControllerConsultaAcademia;
use App\Http\Controllers\ControllerManutencaoEquipamento;
use App\Http\Controllers\ControllerManutencaoAcademia;
use App\Models\Academia;
use App\Models\Equipamento;

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
    return view('consultaIndex', Array(
        'equipamento' => new Equipamento(),
        'academia' => new Academia()
    ));
});

Route::get('/equipamentos', [ControllerConsultaEquipamento::class, 'listar']);
Route::get('/equipamentos/inserir', [ControllerManutencaoEquipamento::class, 'montaTelaInsercao']);
Route::get('/equipamentos/alterar/{id}', [ControllerManutencaoEquipamento::class, 'montaTelaAlteracao']);
Route::post('/equipamentos/alterar/save', [ControllerManutencaoEquipamento::class, 'saveFormUpdate']);
Route::post('/equipamentos/inserir/save', [ControllerManutencaoEquipamento::class, 'saveFormInsert']);
Route::get('/equipamentos/deletar/{id}', [ControllerManutencaoEquipamento::class, 'deletar']);

Route::get('/academias', [ControllerConsultaAcademia::class, 'listar']);
Route::get('/academias/inserir', [ControllerManutencaoAcademia::class, 'montaTelaInsercao']);
Route::get('/academias/alterar/{id}', [ControllerManutencaoAcademia::class, 'montaTelaAlteracao']);
Route::post('/academias/alterar/save', [ControllerManutencaoAcademia::class, 'saveFormUpdate']);
Route::post('/academias/inserir/save', [ControllerManutencaoAcademia::class, 'saveFormInsert']);
Route::get('/academias/deletar/{id}', [ControllerManutencaoAcademia::class, 'deletar']);
