<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerConsultaEquipamento;
use App\Http\Controllers\ControllerConsultaAcademia;
use App\Http\Controllers\ControllerConsultaPessoa;
use App\Http\Controllers\ControllerManutencaoEquipamento;
use App\Http\Controllers\ControllerManutencaoAcademia;
use App\Http\Controllers\ControllerManutencaoPessoa;
use App\Models\Academia;
use App\Models\Equipamento;
use App\Models\Pessoa;

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
        'academia' => new Academia(),
        'pessoa' => new Pessoa()
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

Route::get('/pessoas', [ControllerConsultaPessoa::class, 'listar']);
Route::get('/pessoas/inserir', [ControllerManutencaoPessoa::class, 'montaTelaInsercao']);
Route::get('/pessoas/alterar/{id}', [ControllerManutencaoPessoa::class, 'montaTelaAlteracao']);
Route::post('/pessoas/alterar/save', [ControllerManutencaoPessoa::class, 'saveFormUpdate']);
Route::post('/pessoas/inserir/save', [ControllerManutencaoPessoa::class, 'saveFormInsert']);
Route::get('/pessoas/deletar/{id}', [ControllerManutencaoPessoa::class, 'deletar']);
