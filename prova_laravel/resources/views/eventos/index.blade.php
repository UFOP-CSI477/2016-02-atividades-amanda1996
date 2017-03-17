@extends('principal')

@section('titulo')
  Home
@endsection

@section('conteudo')

<table class="w3-table">
    <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Data</th>
        </tr>
    </thead>
    <tbody>
      @foreach($eventos as $e)
        <tr>
          <td>{{$e->id}}</td>
          <td>{{$e->nome}}</td>
          <td>{{$e->preco}}</td>
          <td>{{$e->data}}</td>
        </tr>
      @endforeach
   </tbody>
</table>

@endsection
