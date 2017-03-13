@extends('principal')

@section('titulo')
  Produtos
@endsection

@section('conteudo')
  @foreach($produtos as $p)
    @for($i = 0; $i < 3; $i++):
        <div class="col-md-4">
          <p>{{$p->nome}}</p>
          <p><img src="images/{{$p->imagem}}" style="width:30%"/></p>
          <p>R$ {{$p->preco}}</p>
          <p><a href="/produtos/{{$p->id}}">Ver detalhes</a></p>
        </div>
      @endfor
  @endforeach
@endsection
