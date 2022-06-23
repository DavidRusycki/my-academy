<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academia;

class ControllerConsultaAcademia extends ControllerConsultaBase
{
 
    public function getModel() 
    {
        return new Academia();
    }

}
