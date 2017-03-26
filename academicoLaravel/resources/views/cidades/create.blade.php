@extends('principal')

@section('conteudo')

        <h1>Adicionar cidade</h1>

        <form method="post" action="/cidades">
          {{ csrf_field() }}
                <label for="">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="">
              <label for="" class="col-2 col-form-label">Estado: </label><br>
              <select name="estado_id" class="form-control">
                @foreach($estados as $e)
                  <option value="{{$e->id}}"> {{$e->nome}}</option>
                @endforeach
              </select>
<br>
          <input type="submit" class="btn btn-primary" value="Salvar" />

        </form>

@endsection
