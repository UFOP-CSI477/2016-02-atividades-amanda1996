@extends('admin.admin_template')

@section('content-header')

<section class="content-header">
  <h1 class="label-input">
    Editar Dados do Bebê
    <small class="input-gestante">Edite as informações do bebê</small>
  </h1>
</section>


@endsection

@section('content')
<div class="container">
    <form action="/bebes/{{$bebe->id}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      {{ method_field('PATCH')}}
      <div class="form-group">

      <div class=" col-sm-10 row">
        <label for="nome" class="label-gestante">Nome: </label>
        <input type="text" id="nome" name="nome" class="form-control input-gestante" value="{{$bebe->nome}}">
      </div>

      <div class="col-sm-10 row">

        <div class="col-sm-6 row">
          <label for="sexo" class=" label-gestante">Sexo: </label>
              <select class="form-control input-gestante" name="sexo" style="width:350px">
                <option value="feminino" class="input-gestante">Feminino</option>
                <option value="masculino" class="input-gestante">Masculino</option>
              </select>
        </div>

        <div class="col-sm-6 row">
          <label for="idade" class="label-gestante">Idade gestacional: </label>
          <input type="text" id="idade" name="idade" class="form-control input-gestante" value="{{$bebe->idade}}">

        </div>

      </div>

      <div class="row col-md-10 text-center">
        <button type="submit" class="login__submit" name="cadastrar">Salvar Alterações</button>

      </div>
        </div>
    </form>
  </div>
@endsection
