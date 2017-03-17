@extends('principal')

@section('titulo')
  Editar produto
@endsection

@section('conteudo')

<h1>Editar produto</h1>
<h3>{{$produto->id}} {{$produto->nome}}</h3>
<form  class="w3-form" action="/produtos/{{$produto->id}}" method="post" enctype="multipart/form-data">
    {{method_field('PATCH')}}
    {{ csrf_field() }}
    <label for="preco">Preço: </label>
    <input type="text" name="preco" value="{{ $produto->preco }}" placeholder="Preço">
    {{ ($errors->has('preco')) ? $errors->first('preco') : '' }}<br>
    <label for="imagem">Imagem: </label>
    <input type="file" name="imagem">
    {{ ($errors->has('imagem')) ? $errors->first('imagem') : '' }}<br><br><br>
    <input type="submit" name="name" value="Salvar">
</form>

@endsection
