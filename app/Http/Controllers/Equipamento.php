<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipamento;

class ControllerEquipamento extends Controller
{

    public function listar() {
        $aEquipamentos = Equipamento::all();

        return view('ConsultaEquipamento', [
            'equipamentos' => $aEquipamentos
        ]);
    }

}
