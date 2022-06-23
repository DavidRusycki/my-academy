<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class ControllerManutencaoPessoa extends ControllerManutencaoBase
{

    public function getNomeClasse()
    {
        return 'Pessoa';
    }

    public function getModelFromId(Int $id)
    {
        $oModel = Pessoa::find($id);

        return $oModel;
    }

    public function getNewModel() : Pessoa
    {
        return new Pessoa();
    }

    public function setDados($oModel, Request $request)
    {
        if ($request->input('id')) {
            $oModel = Pessoa::find($request->input('id'));
        }
        $oModel->nome = $request->input('nome');
        $oModel->idade = $request->input('idade');
        $oModel->sexo = $request->input('sexo');
        return $oModel;
    }
    
}
