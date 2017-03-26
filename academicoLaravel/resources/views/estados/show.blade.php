@extends('principal')

@section('conteudo')

        <h1>Exibir estado</h1>

        <form method="post" action="/estados/{{$estado->id}}">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{method_field('DELETE')}}
          {{ csrf_field() }}
          <div class="form-group col-sm-12">


          <div class="form-group row">
              <div class="col-sm-12">
                <label for="">Nome: {{$estado->nome}}</label><br>
                <!-- <input type="text" class="form-control" name="name" value="{{$estado->nome}}"> -->
              </div>


            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Estado: {{$estado->sigla}} </label><br>
            </div>

          </div>
          </div>


          <a href="/estados/{{$estado->id}}/edit" class="btn btn-primary">Editar</a>
          <input type="submit" class="btn btn-danger" value="Excluir"/>
          <a href="/estados" class="btn btn-primary">Voltar</a>

        </form>

@endsection
