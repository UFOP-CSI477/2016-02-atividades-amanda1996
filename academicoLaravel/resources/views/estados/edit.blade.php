@extends('principal')

@section('conteudo')

        <h1>Editar estado</h1>
        <form method="post" action="/estados/{{$estado->id}}">
          {{method_field('PATCH')}}
          {{ csrf_field() }}
                <label for="nome">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="{{$estado->nome}}">

              <label for="sigla" class="col-2 col-form-label">Sigla: </label><br>
              <input type="text" class="form-control" name="sigla" value="{{$estado->sigla}}">

          <br>
          <input type="submit" class="btn btn-primary" value="Salvar" />
        </form>
@endsection
