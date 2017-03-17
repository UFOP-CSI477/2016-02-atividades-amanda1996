@extends('principal')

@section('titulo')
  Produtos
@endsection

@section('conteudo')

<button type="submit" class="w3-btn-block" onclick="window.location='/compras';">Ver compras</button>
<br><br>
<button type="submit" class="w3-btn-block" onclick="window.location='/users/{{$id}}/edit';">Editar informações pessoais</button>
@endsection
