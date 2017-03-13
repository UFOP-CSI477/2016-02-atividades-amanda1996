@extends('principal')

@section('titulo')
  Produtos
@endsection

@section('conteudo')

<button type="submit" class="w3-btn-block" onclick="window.location='/compras/index/{{$id}}';">Ver compras</button>
<br><br>
<button type="submit" class="w3-btn-block" onclick="window.location='/users/edit/{{$id}}';">Editar informações pessoais</button>
@endsection
