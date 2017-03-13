@extends('principal')

@section('titulo')
  Área administrativa
@endsection

@section('conteudo')

<table class="w3-table-all tr" style="width:100%">
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
    @foreach($produtos as $p)
      <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->nome}}</td>
        <td>{{$p->preco}}</td>
        <td><a href="/produtos/edit/{{ $p->id }}">Editar</a></td>
        <td><a href="/produtos/destroy/{{ $p->id }}">Excluir</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
