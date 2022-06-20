<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;

class ControllerManutencaoEquipamento extends ControllerManutencaoBase
{

    public function getNomeClasse()
    {
        return 'Equipamento';
    }

    public function getModelFromId(Int $id)
    {
        $oModel = Equipamento::find($id);
        return $oModel;
    }

    public function getNewModel() : Equipamento
    {
        return new Equipamento;
    }

    public function setDados($oModel, Request $request)
    {
        $oModel->id = $request->input('id');
        $oModel->nome = $request->input('nome');
        $oModel->valor = $request->input('valor');
    }

}
