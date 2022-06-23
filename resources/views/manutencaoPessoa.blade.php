@extends('manutencao')
@section('campos')
<div class="container">
<form action="{{$Insert ? $Model->getRotaSaveFormInsert() : $Model->getRotaSaveFormUpdate()}}" method="POST">

    <label for="id_visivel">Id</label>
    <input class="form-control" id="id_visivel" name="id_visivel" type="number" disabled value='{{$Model->id??null}}'>
    <input class="form-control" id="id" name="id" type="number" value='{{$Model->id??null}}' style="display:none">   
    
    <label for="nome">Nome</label>
    <input  class="form-control" id="nome" name="nome" type="text" value='{{$Model->nome??null}}'>
    
    <label for="idade">Idade</label>
    <input  class="form-control" id="idade" name="idade" type="number" value='{{$Model->idade??null}}'>

    <label for="sexo">Sexo</label>
    <input class="form-control" id="sexo" name="sexo" type="string" value='{{$Model->sexo??null}}'>

    <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}" />
    </br>
    <input class="btn btn-primary" type="submit" value="Confirmar" name="submit">
    <a class="btn btn-primary" href="{{$Model->getRotaConsulta()}}">Voltar</a>

</form>
</div>  
@stop