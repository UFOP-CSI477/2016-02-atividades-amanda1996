@extends('principal')

@section('conteudo')

      <h1>Lista de alunos</h1>


      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>#</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
          @foreach($alunos as $a)
            <tr>
              <td>{{ $a->nome }}</td>
              <td>{{ $a->cidade->nome }}</td>
              <td><a href="/alunos/{{$a->id}}/edit">Editar</a></td>
              <td>
                <form class="" action="/alunos/{{$a->id}}" method="post">
                  {{method_field('DELETE')}}
                  {{ csrf_field() }}
                  <button type="submit" name="button" class="btn btn-danger">Excluir</button>
                </form>
              </td>
              </tr>

          @endforeach
        </tbody>

      </table>
      <a href="/alunos/create" class="btn btn-primary">Cadastrar novo aluno</a>


@endsection
