<?php

namespace App\Http\Controllers;

use App\Models\Academia;
use Illuminate\Http\Request;

class ControllerManutencaoAcademia extends ControllerManutencaoBase
{

    public function getNomeClasse()
    {
        return 'Academia';
    }

    public function getModelFromId(Int $id)
    {
        $oModel = Academia::find($id);

        return $oModel;
    }

    public function getNewModel() : Academia
    {
        return new Academia;
    }

    public function setDados($oModel, Request $request)
    {
        if ($request->input('id')) {
            $oModel = Academia::find($request->input('id'));
        }
        $oModel->nome = $request->input('nome');
        $oModel->endereco = $request->input('endereco');
        return $oModel;
    }

}
