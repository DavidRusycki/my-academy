<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends ModelBase
{
    use HasFactory;

    protected $table = 'pessoa';
    protected $primayKey = 'id';

    public function getNomeVariavelRegistros()
    {
        return 'Pessoas';
    }

    public function getAllFromModel()
    {
        return Self::all();
    }

    public function getRotaConsulta()
    {
        return '/pessoas';
    }

    public function getRotaSaveFormInsert()
    {
        $sUrl = '/pessoas/inserir/save/';
        return $sUrl;
    }

    public function getRotaInsert()
    {
        $sUrl = '/pessoas/inserir';
        return $sUrl;
    }

    public function getRotaUpdate($id) 
    {
        $sUrl = '/pessoas/alterar/' . $id;
        
        return $sUrl;
    }

    public function getRotaSaveFormUpdate()
    {
        $sUrl = '/pessoas/alterar/save/';
        return $sUrl;
    }

    public function getRotaDeletar($id)
    {
        $sUrl = '/pessoas/deletar/' . $id;

        return $sUrl;
    }

    public function getViewConsulta($aParams = [])
    {
        return view('ConsultaPessoa', $aParams);
    }
}
