@extends('manutencao')
@section('campos')

<form action="{{$Insert ? $Model->getRotaSaveFormInsert() : $Model->getRotaSaveFormUpdate()}}" method="POST">

    <label for="id_visivel">Id</label>
    <input id="id_visivel" name="id_visivel" type="number" disabled value='{{$Model->id??null}}'>
    <input id="id" name="id" type="number" value='{{$Model->id??null}}' style="display:none">   
    
    <label for="nome">Nome</label>
    <input id="nome" name="nome" type="text" value='{{$Model->nome??null}}'>
    
    <label for="idade">Idade</label>
    <input id="idade" name="idade" type="number" value='{{$Model->idade??null}}'>

    <label for="sexo">Sexo</label>
    <input id="sexo" name="sexo" type="string" value='{{$Model->sexo??null}}'>

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <input type="submit" value="Confirmar" name="submit">

</form>
    
@stop