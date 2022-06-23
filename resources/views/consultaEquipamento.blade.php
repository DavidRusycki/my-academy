@extends('consulta')
@section('tabela')

<a href="{{$Model->getRotaInsert()}}" class="btn btn-success">Inserir</a>
<table class="table">
    <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
    </tr>
@foreach($Equipamentos as $oEquipamento) 

    <tr>
        <td>{{$oEquipamento->id}}</td>
        <td>{{$oEquipamento->nome}}</td>
        <td>{{$oEquipamento->valor}}</td>
        <td><a href="{{$Model->getRotaUpdate($oEquipamento->id)}}" class="btn btn-warning">Alterar</a></td>
        <td><a href="{{$Model->getRotaDeletar($oEquipamento->id)}}" class="btn btn-danger">Deletar</a></td>
    </tr>
    
@endforeach
</table>

@stop