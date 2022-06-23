<?php

namespace App\Models;

use App\Http\Controllers\ControllerConsultaEquipamento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends ModelBase
{
    use HasFactory;

    protected $table = 'equipamento';
    protected $primayKey = 'id';

    public function getNomeVariavelRegistros()
    {
        return 'Equipamentos';
    }

    public function getAllFromModel()
    {
        return Self::all();
    }

    public function getRotaConsulta()
    {
        return '/equipamentos';
    }

    public function getRotaSaveFormInsert()
    {
        $sUrl = '/equipamentos/inserir/save/';
        return $sUrl;
    }

    public function getRotaInsert()
    {
        $sUrl = '/equipamentos/inserir';
        return $sUrl;
    }

    public function getRotaUpdate($id) 
    {
        $sUrl = '/equipamentos/alterar/' . $id;
        
        return $sUrl;
    }

    public function getRotaSaveFormUpdate()
    {
        $sUrl = '/equipamentos/alterar/save/';
        return $sUrl;
    }

    public function getRotaDeletar($id)
    {
        $sUrl = '/equipamentos/deletar/' . $id;

        return $sUrl;
    }

    public function getViewConsulta($aParams = [])
    {
        return view('ConsultaEquipamento', $aParams);
    }

}
