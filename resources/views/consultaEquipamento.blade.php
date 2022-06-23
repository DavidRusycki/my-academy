@extends('consulta')
@section('tabela')

@foreach($Equipamentos as $oEquipamento) 

<table class="table">
    <tr>
        <td>{{$oEquipamento->id}}</td>
        <td>{{$oEquipamento->nome}}</td>
        <td>{{$oEquipamento->valor}}</td>
        <td><a href="{{$Model->getRotaUpdate($oEquipamento->id)}}">Alterar</a></td>
        <td><a href="{{$Model->getRotaDeletar($oEquipamento->id)}}">Deletar</a></td>
    </tr>
</table>

@endforeach

@stop