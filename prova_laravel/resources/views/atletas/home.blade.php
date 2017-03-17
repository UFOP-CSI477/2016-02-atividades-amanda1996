@extends('principal')

@section('titulo')
  Home
@endsection

@section('conteudo')
<form role="form" method="POST" action="{{ route('selecionaAtleta') }}">
{{csrf_field() }}

  <select class="form-control" style="width: 20%"  onchange="" id="select" name="atleta_id">
    <option value="" selected disabled>Selecione um atleta</option>
    @foreach($atletas as $a)
      <option value="{{$a->id}}">{{$a->nome}}</option>
      @endforeach
    </select>

    <br><br>
    <button type="submit" class="w3-btn-block">Ver eventos</button>
</form>
<br><br>
<button type="submit" class="w3-btn-block" onclick="window.location='/registros/create'">Cadastrar-se em eventos</button>
@endsection
