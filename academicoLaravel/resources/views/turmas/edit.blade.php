@extends('principal')

@section('conteudo')

        <h1>Editar turma</h1>

        <form method="post" action="/turmas/{{$turma->id}}">
          {{method_field('PATCH')}}
          {{ csrf_field() }}

                <label for="">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="{{$turma->nome}}">

              <label for="" class="">Disciplina: </label><br>
              <input type="text" class="form-control" name="disciplina_id" value="{{$turma->disciplina_id}}">

          <input type="submit" class="btn btn-success" value="Salvar" />

        </form>

@endsection
