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

<div class="container form-group">

  <hr />

    <form action="/contatos" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group col-sm-10">
        <label for="nome" class="label-gestante">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control input-gestante" placeholder="Nome do contato">
      </div>

      <div class="form-group col-sm-10">
        <label for="email" class="label-gestante">Email:</label>
        <input type="text" id="email" name="email" class="form-control input-gestante" placeholder="Email do contato">
      </div>

      <div class="form-group col-sm-10">
          <label for="celular" class="label-gestante">Celular:</label>
          <input type="tel" id="celular" name="celular" class="form-control input-gestante" placeholder="Celular do contato">
      </div>

      <div class="form-group col-sm-10">
        <label for="tipo" class=" label-gestante">Tipo: </label>
            <select class="form-control input-gestante" name="tipo" style="width:350px">
              <option value="1" class="input-gestante">Amigo(a)</option>
              <option value="2" class="input-gestante">Telefone Útil</option>
            </select>
      </div>

        <div class="offset-sm-2 col-sm-10">
          <input type="submit" class="btn btn-primary login__submit" value="Cadastrar">
        </div>
  </form>
</div>


@endsection
