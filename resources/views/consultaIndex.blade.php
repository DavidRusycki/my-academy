@extends('consulta')

<a href="{{$equipamento->getRotaConsulta()}}" class="btn btn-dark">Equipamento</a>
<a href="{{$academia->getRotaConsulta()}}" class="btn btn-dark">Academia</a>
<a href="{{$pessoa->getRotaConsulta()}}" class="btn btn-dark">Pessoa</a>