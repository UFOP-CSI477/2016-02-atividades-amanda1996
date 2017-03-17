@extends('principal')

@section('titulo')
  Carrinho de compras
@endsection

@section('conteudo')
<form class="" action="/carrinho" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<h1>Lista de produtos</h1>
<table class="w3-table-all tr" style="width:100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>Produto</th>
      <th>Valor</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $p)
      <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->nome}}</td>
        <td>{{$p->preco}}</td>
        <td><a href="remove/{{$p->id}}">Remover</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
<br><br>

<button type="submit" class="w3-btn-block">Finalizar Compra</button>
<br><br>
</form>
@endsection
