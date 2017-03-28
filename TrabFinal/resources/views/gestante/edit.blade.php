@extends('admin.admin_template')

@section('content-header')

<section class="content-header">
  <h1 class="input-gestante">
    Editar Dados
    <small class="label-gestante">Edite as informações da gestante</small>
  </h1>
  <br><br><br>

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

    <form class="form-horizontal" action="/users/{{$user->id}}" method="post">
      {{ method_field('PATCH')}}
      {{ csrf_field() }}

      <div class="form-group col-sm-10">
        <label for="name" class="label-gestante">Nome</label>
        <input type="text" id="name" name="name" class="form-control input-gestante" value="{{$user->name}}">
      </div>

      <div class="form-group col-sm-10">
        <label for="apelido" class="label-gestante">Como gosta de ser chamada</label>
        <input type="text" id="apelido" name="apelido" class="form-control input-gestante" value="{{$user->apelido}}">
      </div>

      <div class="form-group col-sm-10">
        <label for="companheiro" class="label-gestante">Nome do Companheiro(a)</label>
        <input type="text" id="companheiro" name="companheiro" class="form-control input-gestante" value="{{$user->conjuge}}">
      </div>

      <!-- <div class="form-group col-sm-10">
          <label for="dataN">Data de nascimento da gestante</label>
          <input type="text" id="dataN" name="dataN" class="form-control" value="{{$user->data_nasc}}">
        </div> -->

        <!-- <div class="form-group col-sm-10">
            <label for="dataN">Data prevista para o parto</label>
            <input type="date" id="dataN" name="dataN" class="form-control" value="{{$user->data_parto}}">
          </div> -->

        <!-- <div class="col-sm-5">
          <label for="idade">Idade</label>
          <input type="number" id="idade" name="idade" class="form-control" value="Idade">
        </div>
      </div> -->

      <!-- <div class="form-group col-sm-10">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}">
      </div> -->

      <div class="form-group col-sm-5">
          <label for="telefone" class="label-gestante">Telefone Fixo</label>
          <input type="text" id="telefone" name="telefone" class="form-control input-gestante"  value="{{$user->telefone}}">
        </div>

        <div class="col-sm-5">
          <label for="celular" class="label-gestante">Celular</label>
          <input type="text" id="celular" name="celular" class="form-control input-gestante" value="{{$user->celular}}">
        </div>

        <!-- <div class="col-sm-10">
          <label for="password">Senha:</label>
          <input type="password" id="password" name="password" class="form-control" value="{{$user->password}}">
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>

        <div class="col-sm-10">
          <label for="password-confirm">Confirme a senha:</label>
          <input type="password" id="password-confirm" name="password-confirm" class="form-control" value="{{$user->password}}">
        </div> -->
      </div>
      <br><br>
      <center>
            <button type="submit" class="btn btn-primary login__submit" name="salvar">Salvar Alterações</button>
      </center>
      </div>
    </form>

@endsection
