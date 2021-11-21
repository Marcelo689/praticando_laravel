@extends('site.layouts.basico')

@section('titulo','Projetos em php')

@section('conteudo')   
<h1 style="text-align:center;">Editando Projeto</h1>

@component('site._components.form_create_edit',['projeto'=>$projeto,'linguagens'=>$linguagens])
@endcomponent
@endsection