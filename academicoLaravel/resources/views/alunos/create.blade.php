@extends('principal')

@section('conteudo')

        <h1>Adicionar aluno</h1>

        <form method="post" action="/alunos">
          {{ csrf_field() }}
                <label for="">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="">
              <label for="" class="col-2 col-form-label">Rua: </label><br>
              <input type="text" class="form-control" name="rua" value="">
              <label for="" class="col-2 col-form-label">Número: </label><br>
              <input type="text" class="form-control" name="numero" value="">
              <label for="" class="col-2 col-form-label">Bairro: </label><br>
              <input type="text" class="form-control" name="bairro" value="">
              <label for="" class="col-2 col-form-label">Cidade: </label><br>
              <select name="cidade_id" class="form-control">
                @foreach($cidades as $c)
                  <option value="{{$c->id}}"> {{$c->nome}}</option>
                @endforeach
              </select>
              <label for="" class="col-2 col-form-label">CEP: </label><br>
              <input type="text" class="form-control" name="cep" value="">
              <label for="" class="col-2 col-form-label">Email: </label><br>
              <input type="text" class="form-control" name="mail" value="">

          <input type="submit" class="btn btn-success" value="Salvar" />
        </form>

@endsection
