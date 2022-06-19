<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class ControllerConsultaBase extends Controller
{
    /**
     * Esse nome irá influenciar no nome da variável de ambiente que será injetada no arquivo .blade, e também no nome da consulta a ser buscada.
     */
    abstract public function getClasse();
    abstract public function getAllFromModel();

    protected function getNomeConsulta()
    {
        $sNome = 'Consulta'.$this->getClasse();
        return $sNome;
    }

    /**
     * Nome da variável que será injetada na view, para permitir acesso aos registros.
     */
    protected function getNomeVariavelRegistros()
    {
        $sNome = $this->getClasse().'s';
        return $sNome;
    }

    public function listar() 
    {
        $aAll = $this->getAllFromModel();
        $sNome = $this->getNomeConsulta();
        $sNomeVariavelRegistros = $this->getNomeVariavelRegistros();

        return view($sNome, [
            $sNomeVariavelRegistros => $aAll
        ]);
    }

}
