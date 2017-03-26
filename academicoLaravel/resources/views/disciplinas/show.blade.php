@extends('principal')

@section('conteudo')

        <h1>Exibir disciplina</h1>

        <form method="post" action="/disciplinas/{{$disciplina->id}}">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{method_field('DELETE')}}
          {{ csrf_field() }}
          <div class="form-group col-sm-12">


          <div class="form-group row">
              <div class="col-sm-12">
                <label for="">Nome: {{$disciplina->nome}}</label><br>
              </div>

          </div>
          <div class="form-group row">
            <div class="form-group col-sm-6">
              <label for="" class="col-2 col-form-label">Código: {{$disciplina->codigo}} </label><br>
            </div>
            <div class="form-group col-sm-6">
              <label for="" class="col-2 col-form-label">CH: {{$disciplina->carga}} </label><br>
            </div>
          </div>

          </div>

          <a href="/disciplinas/{{$disciplina->id}}/edit" class="btn btn-primary">Editar</a>
          <input type="submit" class="btn btn-danger" value="Excluir"/>
          <a href="/disciplinas" class="btn btn-primary">Voltar</a>

        </form>

@endsection
