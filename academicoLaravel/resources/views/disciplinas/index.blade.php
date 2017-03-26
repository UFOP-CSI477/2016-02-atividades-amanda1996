@extends('principal')

@section('conteudo')

        <h1>Lista de disciplinas</h1>

<a href="/disciplinas/create" class="btn btn-primary"><i class="fa fa-plus"></i> Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Codigo</th>
      <th>Carga Horária</th>
      <th>#</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    @foreach($disciplinas as $d)
      <tr>
        <td>{{ $d->nome }}</td>
        <td>{{ $d->codigo }}</td>
        <td>{{ $d->carga }}</td>
        <td><a href="/disciplinas/{{$d->id}}/edit">Editar</a></td>
        <td>
          <form class="" action="/disciplinas/{{$d->id}}" method="post">
            {{method_field('DELETE')}}
            {{ csrf_field() }}
            <button type="submit" name="button" class="btn btn-danger">Excluir</button>
          </form>
        </td>
      </tr>

    @endforeach

  </tbody>

</table>

<a href="/disciplinas/create" class="btn btn-primary">Cadastrar nova disciplina</a>

@endsection
