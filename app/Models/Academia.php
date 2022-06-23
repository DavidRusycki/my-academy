<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academia extends ModelBase
{
    use HasFactory;

    protected $table = 'academia';
    protected $primayKey = 'id';

    public function getNomeVariavelRegistros()
    {
        return 'Academias';
    }

    public function getAllFromModel()
    {
        return Self::all();
    }

    public function getRotaConsulta()
    {
        return '/academias';
    }

    public function getRotaSaveFormInsert()
    {
        $sUrl = '/academias/inserir/save/';
        return $sUrl;
    }

    public function getRotaInsert()
    {
        $sUrl = '/academias/inserir';
        return $sUrl;
    }

    public function getRotaUpdate($id) 
    {
        $sUrl = '/academias/alterar/' . $id;
        
        return $sUrl;
    }

    public function getRotaSaveFormUpdate()
    {
        $sUrl = '/academias/alterar/save/';
        return $sUrl;
    }

    public function getRotaDeletar($id)
    {
        $sUrl = '/academias/deletar/' . $id;

        return $sUrl;
    }

    public function getViewConsulta($aParams = [])
    {
        return view('ConsultaAcademia', $aParams);
    }
}
