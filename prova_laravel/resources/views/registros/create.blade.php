@extends('principal')

@section('titulo')
  Inscrição
@endsection

@section('conteudo')
    <h1>Inscrição em eventos</h1>
    <form class="" action="{{route('postCreateRegistro')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <label for="atleta_id">ID do atleta: </label>
      <input type="text" name="atleta_id" value="" placeholder="ID do atleta"><br><br>
      <label for="pago">Evento: </label>
      <select class="form-control" style="width: 20%" name="evento_id">
        <option value="" selected disabled>Selecione um evento</option>
          @foreach($eventos as $e)
            <option value="{{$e->id}}">{{$e->nome}}</option>
          @endforeach
      </select>
      <br><br>
      <label for="preco">Data prevista do pagamento: </label>
      <input type="text" name="data" value="" placeholder="Data">
      {{ ($errors->has('data')) ? $errors->first('data') : '' }}<br><br>
      <label for="pago">Status do pagamento: </label>
      <select class="form-control" style="width: 20%" name="pago">
        <option value="" selected disabled>Selecione uma opção</option>
        <option value=1>Sim</option>
        <option value=0>Não</option>
      </select>
      <br><br>
      <input type="submit" name="name" value="Finalizar inscrição">
    </form>
@endsection
