@extends('principal')

@section('titulo')
  Produtos
@endsection

@section('conteudo')

<table class="w3-table-all tr">
  <thead>
    <tr>
      <th>ID</th>
      <th>Produto</th>
      <th>Valor</th>
      <th>#</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    @foreach($compras as $c)
      <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->nome}}</td>
        <td>{{$c->preco}}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection
