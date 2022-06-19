@extends('consulta')
@section('tabela')

@foreach($Equipamentos as $oEquipamento) 

<table class="table">
    <tr>
        <td>{{$oEquipamento->id}}</td>
        <td>{{$oEquipamento->nome}}</td>
        <td>{{$oEquipamento->valor}}</td>
    </tr>
</table>

@endforeach

@stop