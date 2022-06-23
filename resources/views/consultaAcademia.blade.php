@extends('consulta')
@section('tabela')

<a href="{{$Model->getRotaInsert()}}" class="btn btn-success">Inserir</a>
<table class="table">
    <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Endereço</th>
    </tr>
@foreach($Academias as $oAcademia) 

    <tr>
        <td>{{$oAcademia->id}}</td>
        <td>{{$oAcademia->nome}}</td>
        <td>{{$oAcademia->endereco}}</td>
        <td><a href="{{$Model->getRotaUpdate($oAcademia->id)}}" class="btn btn-warning">Alterar</a></td>
        <td><a href="{{$Model->getRotaDeletar($oAcademia->id)}}" class="btn btn-danger">Deletar</a></td>
    </tr>
    
@endforeach
</table>

@stop