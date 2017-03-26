@extends('principal')

@section('conteudo')

      <h1>Lista de estados cadastrados</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Estado</th>
            <th>#</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
          @foreach($estados as $e)
            <tr>
              <td>{{ $e->nome }}</td>
              <td>{{ $e->sigla }}</td>
              <td>
              <a href="/estados/{{$e->id}}/edit">Editar</a></td>
              <td>
                <form class="" action="/estados/{{$e->id}}" method="post">
                  {{method_field('DELETE')}}
                  {{ csrf_field() }}
                  <button type="submit" name="button" class="btn btn-danger">Excluir</button>
                </form>
              </td>
              </tr>

          @endforeach
        </tbody>

      </table>


@endsection
