@extends('principal')

@section('titulo')
  Detalhes do produto
@endsection

@section('conteudo')
<center>
  <form action="add/{{$produto->id}}"  class="w3-form" method="post" style="padding-bottom:20px" >
    {{ method_field('PATCH')}}
    {{ csrf_field() }}
  <h2>{{ $produto->nome }}</h2>
  <p>
    <div>
      <img src="/images/{{$produto->imagem}}" style="max-width:400px;max-height:400px;width:auto;height:auto"/>
    </div>
  </p>
  <p>Código do produto: {{$produto->id}}</p>
  <input type="hidden" name="produto_id" value="{{$produto->id}}">
  <p>Valor: {{ $produto->preco }} </p>
  <label for="quantidade">Quantidade: </label>
  <input type="text" name="quantidade" style="width:50px"/>
  {{ ($errors->has('quantidade')) ? $errors->first('quantidade') : '' }}<br><br>
  <input type="submit" value="Adicionar ao carrinho"/>
</form>
</center>

@endsection
