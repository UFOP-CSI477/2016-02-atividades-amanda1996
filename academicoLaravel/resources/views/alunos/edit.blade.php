@extends('principal')

@section('conteudo')

        <h1>Editar aluno</h1>

        <form method="post" action="/alunos/{{$aluno->id}}">
          {{method_field('PATCH')}}
          {{ csrf_field() }}
                <label for="">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="{{$aluno->nome}}">

              <label for="" class="col-2 col-form-label">Rua: </label><br>
              <input type="text" class="form-control" name="rua" value="{{$aluno->rua}}">
              <label for="" class="col-2 col-form-label">Número: </label><br>
              <input type="text" class="form-control" name="numero" value="{{$aluno->numero}}">
              <label for="" class="col-2 col-form-label">Bairro: </label><br>
              <input type="text" class="form-control" name="bairro" value="{{$aluno->bairro}}">
              <label for="" class="col-2 col-form-label">Cidade: </label><br>
              <input type="text" class="form-control" name="cidade" value="{{$aluno->cidade_id}}">
              <label for="" class="col-2 col-form-label">CEP: </label><br>
              <input type="text" class="form-control" name="cep" value="{{$aluno->cep}}">
              <label for="" class="col-2 col-form-label">Email: </label><br>
              <input type="text" class="form-control" name="mail" value="{{$aluno->mail}}">

          <input type="submit" class="btn btn-success" value="Salvar" />

        </form>

@endsection
