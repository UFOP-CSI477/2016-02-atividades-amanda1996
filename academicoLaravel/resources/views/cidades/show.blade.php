@extends('principal')

@section('conteudo')

        <h1>Exibir cidade</h1>

        <form method="post" action="/cidades/{{$cidade->id}}">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{method_field('DELETE')}}
          {{ csrf_field() }}
          <div class="form-group col-sm-12">


          <div class="form-group row">
              <div class="col-sm-12">
                <label for="">Nome: {{$cidade->nome}}</label><br>
                <!-- <input type="text" class="form-control" name="name" value="{{$cidade->nome}}"> -->
              </div>


            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Estado: {{$cidade->estado->nome}} </label><br>
            </div>

          </div>
          </div>


          <a href="/cidades/{{$cidade->id}}/edit" class="btn btn-primary">Editar</a>
          <input type="submit" class="btn btn-danger" value="Excluir"/>
          <a href="/cidades" class="btn btn-primary">Voltar</a>

        </form>

@endsection
