@extends('principal')

@section('conteudo')

        <h1>Adicionar turma</h1>

        <form method="post" action="/turmas">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{ csrf_field() }}
                <label for="">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="">

              <label for="" class="col-2 col-form-label">Disciplina: </label><br>
              <select name="disciplina_id" class="form-control">
                @foreach($disciplinas as $d)
                  <option value="{{$d->id}}"> {{$d->nome}}</option>
                @endforeach
              </select>
              <br>
          <input type="submit" class="btn btn-success" value="Salvar" />
<br>
        </form>

@endsection
