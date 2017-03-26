@extends('principal')

@section('conteudo')

        <h1>Editar disciplina</h1>

        <form method="post" action="/disciplinas/{{$disciplina->id}}">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{method_field('PATCH')}}
          {{ csrf_field() }}

          <div class="form-group col-sm-12">


          <div class="form-group row">
              <div class="col-sm-12">
                <label for="">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="{{$disciplina->nome}}">
              </div>
          </div>

          <div class="form-group row">
            <div class="form-group col-sm-6">
              <label for="" class="col-2 col-form-label">Código: </label><br>
              <input type="text" class="form-control" name="codigo" value="{{$disciplina->codigo}}">
            </div>

            <div class="form-group col-sm-6">
              <label for="" class="col-2 col-form-label">CH: </label><br>
              <input type="text" class="form-control" name="carga" value="{{$disciplina->carga}}">
            </div>

          </div>
          </div>

          <input type="submit" class="btn btn-primary" value="Salvar"/>
          <a href="/disciplinas" class="btn btn-primary">Voltar</a>


        </form>

@endsection
