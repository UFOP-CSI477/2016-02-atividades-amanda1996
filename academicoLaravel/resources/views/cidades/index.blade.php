@extends('principal')

@section('conteudo')

      <h1>Lista de cidades</h1>


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
          @foreach($cidades as $c)
            <tr>
              <td>{{ $c->nome }}</td>
              <td>{{ $c->estado->nome }}</td>
              <td><a href="/cidades/{{$c->id}}/edit">Editar</a></td>
              <td>
                <form class="" action="/cidades/{{$c->id}}" method="post">
                  {{method_field('DELETE')}}
                  {{ csrf_field() }}
                  <button type="submit" name="button" class="btn btn-danger">Excluir</button>
                </form>
              </td>
              </tr>

          @endforeach
        </tbody>

      </table>
      <a href="/cidades/create" class="btn btn-primary">Cadastrar nova cidade</a>


@endsection
