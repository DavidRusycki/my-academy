<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class ControllerManutencaoBase extends Controller
{
    abstract public function getNomeClasse();
    abstract public function getModelFromId(Int $id);
    abstract public function getNewModel();
    abstract public function setDados($oModel, Request $request);

    protected function getNomeView()
    {
        $sNome = "manutencao".$this->getNomeClasse();
        return $sNome;
    }

    public function montaTelaInsercao()
    {
        $oModel = $this->getNewModel();
        $sNomeView = $this->getNomeView();

        return view($sNomeView, [
            'Model' => $oModel,
            'Insert' => true
        ]);
    }

    public function montaTelaAlteracao($id)
    {
        $oModel = $this->getModelFromId($id);
        $sNomeView = $this->getNomeView();

        return view($sNomeView, [
            'Model' => $oModel,
            'Insert' => false
        ]);
    }

    /**
     * Store a new registry.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveFormInsert(Request $request) 
    {
        $oModel = $this->getNewModel();
        $oModel = $this->setDados($oModel, $request);
        $oModel->save();
        return redirect($oModel->getRotaConsulta());
    }

    /**
     * Store a new registry.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveFormUpdate(Request $request) 
    {
        $oModel = $this->getNewModel();
        $oModel = $this->setDados($oModel, $request);
        $oModel->update();
        return redirect($oModel->getRotaConsulta());
    }

    public function deletar($id) {
        $oModel = $this->getModelFromId($id);

        $oModel->delete();

        return redirect($oModel->getRotaConsulta());
    }
}
