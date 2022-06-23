<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class ControllerConsultaPessoa extends ControllerConsultaBase
{
 
    public function getModel() 
    {
        return new Pessoa();
    }

}
