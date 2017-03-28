@extends('admin.admin_template')

@section('content-header')

<section class="content-header">
  <h1 class="input-gestante">
    Cadastrar Dados do Bebê
    <small class="label-gestante">Insira informações do bebê</small>
  </h1>
  <br><br><br>

</section>


@endsection

@section('content')
<div class="container">

  <hr />
    <form action="/bebes" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">

      <div class=" col-sm-10 row">
        <label for="nome" class="label-gestante">Nome: </label>
        <input type="text" id="nome" name="nome" class="form-control input-gestante" placeholder="Nome do bebê">
      </div>

      <div class="row col-md-10">

        <div class="col-md-6">
          <label for="sexo" class=" label-gestante">Sexo: </label>
              <select class="form-control input-gestante" name="sexo" style="width:350px">
                <option value="feminino" class="input-gestante">Feminino</option>
                <option value="masculino" class="input-gestante">Masculino</option>
              </select>
        </div>

        <div class="col-md-6">
          <label for="idade" class="label-gestante">Idade gestacional: </label>
          <input type="text" id="idade" name="idade" class="form-control input-gestante" placeholder="Informe com quantas semanas o bebê está">

        </div>

      </div>

      <div class="row col-md-10 text-center">
        <button type="submit" class="login__submit" name="cadastrar">Cadastrar</button>

      </div>
        </div>
    </form>
  </div>
@endsection
