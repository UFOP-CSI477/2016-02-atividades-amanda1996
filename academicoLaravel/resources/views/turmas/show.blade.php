@extends('principal')

@section('conteudo')

        <h1>Exibir turma</h1>

        <form method="post" action="/turmas/{{$turma->id}}">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{method_field('DELETE')}}
          {{ csrf_field() }}
          <div class="form-group col-sm-12">


          <div class="form-group row">
              <div class="col-sm-12">
                <label for="">Nome: {{$turma->nome}}</label><br>
              </div>


            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Disciplina: {{$turma->disciplina->nome}} </label><br>
            </div>

          </div>
          </div>


          <a href="/turmas/{{$turma->id}}/edit" class="btn btn-primary">Editar</a>
          <input type="submit" class="btn btn-danger" value="Excluir"/>
          <a href="/turmas" class="btn btn-primary">Voltar</a>

        </form>

@endsection
