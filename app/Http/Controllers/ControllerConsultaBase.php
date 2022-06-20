<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class ControllerConsultaBase extends Controller
{

    abstract public function getModel();

    public function listar()
    {
        $oModel = $this->getModel();
        $sNomeVariavelRegistros = $oModel->getNomeVariavelRegistros();
        $aAll = $oModel->getAllFromModel();

        return $oModel->getViewConsulta([
            $sNomeVariavelRegistros => $aAll
        ]);
    }

}
