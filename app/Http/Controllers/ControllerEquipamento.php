<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipamento;

class ControllerEquipamento extends ControllerConsultaBase
{

    public function getClasse()
    {
        return "Equipamento";
    }

    public function getAllFromModel()
    {
        return Equipamento::All();
    }

}
