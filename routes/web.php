<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerEquipamento;

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

Route::get('/equipamentos', [ControllerEquipamento::class, 'listar']);
Route::get('/equipamentos/inserir', [ControllerEquipamento::class, 'montaTela']);
