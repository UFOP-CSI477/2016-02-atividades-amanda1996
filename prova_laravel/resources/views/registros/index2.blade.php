@extends('principal')

@section('titulo')
  Relatório
@endsection

@section('conteudo')

<h1>Relatório de Eventos</h1>

<table class="w3-table">
        <thead>
          <tr>
            <th>Evento</th>
            <th>Quantidade de inscrições</th>
            <th>Valor total</th>
          </tr>
        </thead>
        @foreach($eventos as $e)
          <tr>
            <td>{{$e->nome}}</td>
            <td>{{$e->qtd}}</td>
            <td><?php echo $e->qtd*$e->total ?></td>
          </tr>
        @endforeach
</table>

<br><br>
<h1>Relatório de Atletas</h1>

<table class="w3-table">
  <thead>
    <tr>
      <th>Atleta</th>
      <th>Quantidade de inscrições</th>
      <th>Valor total</th>
    </tr>
  </thead>
  @foreach($atletas as $a)
    <tr>
      <td>{{$a->nome}}</td>
      <td>{{$a->qtd}}</td>
      <td><?php echo $a->total ?></td>
    </tr>
  @endforeach
</table>

@endsection
