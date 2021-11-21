@extends('site.layouts.basico')

@section('titulo',"Cadastrando registro")

@section('conteudo')
    <h1 style="text-align:center;">Cadastrando Projeto</h1>

    @component('site._components.form_create_edit',['linguagens'=>$linguagens])
    @endcomponent
@endsection