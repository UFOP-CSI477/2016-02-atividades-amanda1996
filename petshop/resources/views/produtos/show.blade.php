@extends('principal')

@section('titulo')
  Detalhes do produto
@endsection

@section('conteudo')
<center>
  <form action="/produtos"  class="w3-form" method="POST" style="padding-bottom:20px" >
    {{ csrf_field() }}
  <h2>{{ $produto->nome }}</h2>
  <p>
    <div class="container">
      <img src="/images/{{$produto->imagem}}"/>
    </div>
  </p>
  <p>Código: {{$produto->id}}</p>
  <input type="hidden" name="produto_id" value="{{$produto->id}}">
  <p>Valor: {{ $produto->preco }} </p>
  <label for="quantidade">Quantidade: </label>
  <input type="text" name="quantidade" style="width:50px"/>
  {{ ($errors->has('quantidade')) ? $errors->first('quantidade') : '' }}<br><br>
  <input type="submit" value="Adicionar ao carrinho"/>
</form>
</center>

@endsection
