<div style="width:30%;margin-left:auto;margin-right:auto;">
 <form action="{{isset($projeto->id) ? route('site.edit',['id'=>$projeto->id]) : route('site.create',['linguagens'=>$linguagens])}}" method="post">
        @csrf
        @if(isset($projeto->id))
            @method('PUT')
            <input type="hidden" name="id" value="{{$projeto->id}}">
        @endif
    <input type="text" name="nome" value="{{$projeto->nome ?? old('nome')}}" placeholder="Nome">
    {{$errors->has('nome') ? $errors->first('nome') : ''}}
    <br>
    <input type="text" name="descricao" value="{{$projeto->descricao ?? old('nome')}}" col='5' placeholder="Descrição">
    {{$errors->has('descricao') ? $errors->first('descricao') : ''}}
    <br>
    <select name="linguagem_id" >
        <option value="">Selecione uma Linguagem</option>
        @foreach($linguagens as $linguagem)
        <option value="{{$linguagem->id}}">{{$linguagem->nome}}</option>
        @endforeach
    </select>
    {{$errors->has('linguagem_id') ? $errors->first('linguagem_id') : ''}}
    
    <input type="text" name="link" value="{{$projeto->link ?? old('link')}}" placeholder="Link">
    {{$errors->has('link') ? $errors->first('link') : ''}}
    <br>
    <button type="submit">{{ isset($projeto->id) ? 'Atualizar' : 'Cadastrar'}}</button>
    </form>
</div>