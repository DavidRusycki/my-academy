<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class ModelBase extends Model
{
    use HasFactory;

    abstract public function getNomeVariavelRegistros();
    abstract public function getAllFromModel();
    abstract public function getViewConsulta(Array $aParams);
    abstract public function getRotaConsulta();
    abstract public function getRotaSaveFormInsert();
    abstract public function getRotaSaveFormUpdate();
    abstract public function getRotaDeletar($id);
    abstract public function getRotaUpdate($id);
    abstract public function getRotaInsert();

    private function getRotaConsultaEquipamento() 
    {
        $sUrl = '/equipamentos';

        return $sUrl;
    }

}
