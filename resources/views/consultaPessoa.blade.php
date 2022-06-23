@extends('consulta')
@section('tabela')

<a href="{{$Model->getRotaInsert()}}" class="btn btn-success">Inserir</a>
<table class="table table-dark" style="margin-top: 20px;">
    <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Sexo</th>
    </tr>
@foreach($Pessoas as $oPessoa) 

    <tr>
        <td>{{$oPessoa->id}}</td>
        <td>{{$oPessoa->nome}}</td>
        <td>{{$oPessoa->idade}}</td>
        <td>{{$oPessoa->sexo}}</td>
        <td><a href="{{$Model->getRotaUpdate($oPessoa->id)}}" class="btn btn-warning">Alterar</a></td>
        <td><a href="{{$Model->getRotaDeletar($oPessoa->id)}}" class="btn btn-danger">Deletar</a></td>
    </tr>
    
@endforeach
</table>

@stop