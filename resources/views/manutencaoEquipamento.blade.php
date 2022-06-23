@extends('manutencao')
@section('campos')

<form action="{{$Insert ? $Model->getRotaSaveFormInsert() : $Model->getRotaSaveFormUpdate()}}" method="POST">

    <label for="id_visivel">Id</label>
    <input id="id_visivel" name="id_visivel" type="number" disabled value='{{$Model->id??null}}'>
    <input id="id" name="id" type="number" value='{{$Model->id??null}}' style="display:none">   
    
    <label for="nome">Nome</label>
    <input id="nome" name="nome" type="text" value='{{$Model->nome??null}}'>
    
    <label for="valor">Valor</label>
    <input id="valor" name="valor" type="text" value='{{$Model->valor??null}}'>

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <input type="submit" value="Confirmar" name="submit">

</form>
    
@stop