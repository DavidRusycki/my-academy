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

}
