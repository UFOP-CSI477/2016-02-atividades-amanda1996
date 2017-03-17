@extends('principal')

@section('titulo')
  Área administrativa
@endsection

@section('conteudo')
<h1>Lista de produtos</h1>
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
     <form class="post" action="/produtos/{{ $p->id }}" method="post">
       {{ csrf_field() }}
       {{ method_field('DELETE')}}
      <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->nome}}</td>
        <td>{{$p->preco}}</td>
        <td><a href="/produtos/{{ $p->id }}/edit">Editar</a></td>
        <td> <button type="submit" name="delete">Excluir</button></td>
      </tr>
    </form>
    @endforeach
  </tbody>
</table>
<br><br>

<button type="submit" class="w3-btn-block" onclick="window.location='/produtos/create';">Cadastrar novo produto</button>
<br><br>
@endsection
