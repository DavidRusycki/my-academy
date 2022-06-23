@extends('consulta')
<div class="container">
    <div class="menu">
        <a href="{{$equipamento->getRotaConsulta()}}" class="btn btn-dark">Equipamento</a>
        <a href="{{$academia->getRotaConsulta()}}" class="btn btn-dark">Academia</a>
        <a href="{{$pessoa->getRotaConsulta()}}" class="btn btn-dark">Pessoa</a>
    </div>
</div>

<style>
.menu{
    display: flex;
    justify-content: center;
    flex-direction: column;
}
a {
    margin-bottom: 1px;
}
</style>