@extends('principal')

@section('titulo')
  Registros
@endsection

@section('conteudo')
<table class="w3-table">
    <thead>
        <tr>
          <th>Atleta</th>
          <th>Evento</th>
          <th>Data</th>
        </tr>
    </thead>
    <tbody>
      @foreach($registros as $r)
        <tr>
          <td>{{$r->nomeAtleta}}</td>
          <td>{{$r->nomeEvento}}</td>
          <td>{{$r->data}}</td>
        </tr>
      @endforeach
   </tbody>
</table>
@endsection
