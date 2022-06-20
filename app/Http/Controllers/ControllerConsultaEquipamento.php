<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipamento;

class ControllerConsultaEquipamento extends ControllerConsultaBase
{
 
    public function getModel() 
    {
        return new Equipamento();
    }

}
