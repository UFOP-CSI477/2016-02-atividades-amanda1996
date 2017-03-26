@extends('principal')

@section('conteudo')

        <h1>Editar cidade</h1>

        <form method="post" action="/cidades/{{$cidade->id}}">
          {{method_field('PATCH')}}
          {{ csrf_field() }}

                <label for="">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="{{$cidade->nome}}">

              <label for="" class="col-2 col-form-label">Estado: </label><br>
              <input type="text" class="form-control" name="estado_id" value="{{$cidade->id}}">
          <input type="submit" class="btn btn-success" value="Salvar" />
          <a href="/cidades" class="btn btn-primary">Voltar</a>

        </form>

@endsection
