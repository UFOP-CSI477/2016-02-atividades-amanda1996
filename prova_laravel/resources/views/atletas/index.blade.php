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
        </tr>
    </thead>
    <tbody>
      @foreach($atletas as $a)
        <tr>
          <td>{{$a->id}}</td>
          <td>{{$a->nome}}</td>
        </tr>
      @endforeach
   </tbody>
</table>

@endsection
