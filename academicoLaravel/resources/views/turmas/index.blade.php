@extends('principal')

@section('conteudo')

      <h1>Informações das turmas</h1>


      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Disciplina</th>
            <td>#</td>
            <td>#</td>
          </tr>
        </thead>
        <tbody>
          @foreach($turmas as $t)
            <tr>
              <td>{{ $t->nome }}</td>
              <td>{{ $t->disciplina->nome }}</td>
              <td><a href="/turmas/{{$t->id}}/edit">Editar</a></td>
              <td>
                <form class="" action="/turmas/{{$t->id}}" method="post">
                  {{method_field('DELETE')}}
                  {{ csrf_field() }}
                  <button type="submit" name="button" class="btn btn-danger">Excluir</button>
                </form>
              </td>
              </tr>

          @endforeach
        </tbody>

      </table>
      <a href="/turmas/create" class="btn btn-primary">Adicionar</a>


@endsection
