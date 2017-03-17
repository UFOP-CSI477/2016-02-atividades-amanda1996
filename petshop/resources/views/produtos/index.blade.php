@extends('principal')

@section('titulo')
  Produtos
@endsection

@section('conteudo')

<div class="container">
  <?php $cont = 0;  ?>
  <div class="row">
  @foreach($produtos as $p)
    @if($cont % 3 == 0)
      </div>
      <br><br>
      <div class="row">
      @endif
      <div class="col-md-4">
        <p>{{$p->nome}}</p>
        <p><div class="">
          <img src="images/{{$p->imagem}}" style="max-width:200px;max-height:200px;width:auto;height:auto"/>
        </div></p>
        <br>
        <p>R$ {{$p->preco}}</p>
        <p><a href="/produtos/{{$p->id}}">Ver detalhes</a></p>
        </div>
        <?php $cont = $cont + 1; ?>
  @endforeach
</div>
@endsection
