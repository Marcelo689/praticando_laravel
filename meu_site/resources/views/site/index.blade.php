@extends('site.layouts.basico')

@section('titulo','Projetos em php')

@section('conteudo')
    <div style="width:90%;margin-left:auto;margin-right:auto;margin-top:70px;text-align:center;">
        <h3>{{isset($msg) ? $msg : '' }}</h3>
        <table border='1' width='100%'>
            <thead>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Linguagem</th>
                <th>Link</th>
                <th>Editar</th>
                <th>Excluir</th>
            </thead>
            <tbody>
                @foreach($projetos as $projeto)
                <tr>
                    <td>{{$projeto->nome}}</td>
                    <td>{{$projeto->descricao}}</td>
                    <td>{{$projeto->linguagem->nome}}</td>
                    <td><a style="text-decoration: none;color:lawngreen;" href="{{$projeto->link}}">Link do projeto</a></td>
                    <td><a href="{{route('site.edit',['id'=>$projeto->id])}}">Editar</a></td>
                    <td><a href="{{route('site.excluir',['id'=>$projeto->id])}}">Excluir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection