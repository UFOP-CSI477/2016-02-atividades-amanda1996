@extends('admin.admin_template')

@section('content-header')

<section class="content-header">
  <h1 class="label-gestante">
    Adicionar Contato
    <small class="input-gestante">Insira informações do contato</small>
  </h1>
  <!-- <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Layout</a></li>
    <li class="active">Boxed</li>
  </ol> -->
</section>


@endsection

@section('content')

<div class="container">

  <hr />

    <form action="/contatos/{{$contato->id}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      {{ method_field('PATCH')}}
      <div class="form-group col-sm-10">
        <label class="label-gestante" for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control input-gestante" value="{{$contato->nome}}">
      </div>

      <div class="form-group col-sm-10">
        <label class="label-gestante" for="email">Email:</label>
        <input type="text" id="email" name="email" class="form-control input-gestante" value="{{$contato->email}}">
      </div>

      <div class="form-group col-sm-10">
          <label  class="label-gestante" for="celular">Celular:</label>
          <input type="tel" id="celular" name="celular" class="form-control input-gestante" value="{{$contato->celular}}">
      </div>

      <div class="offset-sm-2 col-sm-10 text-center">
        <input type="submit" class="btn btn-primary login__submit" value="Cadastrar">
      </div>
  </form>
</div>


@endsection
