@extends('principal')

@section('titulo')
  Cadastrar produtos
@endsection

@section('conteudo')
    <h1>Adicionar novo produto</h1>
    <form class="w3-form" action="/produtos/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <label for="nome">Nome: </label>
      <input type="text" name="nome" value="" placeholder="Nome">
      {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br><br>
      <label for="preco">Preço: </label>
      <input type="text" name="preco" value="" placeholder="Preço">
      {{ ($errors->has('preco')) ? $errors->first('preco') : '' }}<br><br>
      <label for="imagem">Imagem:</label>
      <input type="file" name="imagem">
      {{ ($errors->has('imagem')) ? $errors->first('imagem') : '' }}<br><br><br>
      <input type="submit" name="name" value="Salvar">
    </form>
@endsection
