@extends('admin.admin_template')

@section('content-header')

<section class="content-header">

  <h1 class="input-gestante">
    Informações da Gestante
    <small class="label-gestante">Veja as infomações cadastradas no nosso sistema</small>
  </h1>
<br>
<br>
<br>

  <!-- <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Layout</a></li>
    <li class="active">Boxed</li>
  </ol> -->
</section>
@endsection

@section('content')

  <div class="container form-group">
      <div class="row">
        <div class="form-group col-sm-3">
          <label for="" class="label-gestante"> Nome da gestante:</label>
        </div>
        <div class="form-group col-sm-3 input-gestante">
          {{$user->name}}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-3">
          <label for="" class="label-gestante"> Como gosta de ser chamada:</label>
        </div>
        <div class="form-group col-sm-3 input-gestante">
          {{$user->apelido}}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-3">
          <label for="" class="label-gestante"> Companheiro(a):
</label>
        </div>
        <div class="form-group col-sm-3 input-gestante">
          {{$user->conjuge}}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-3">
          <label for="" class="label-gestante"> Data de nascimento:</label>
        </div>
        <div class="form-group col-sm-3 input-gestante">
          {{$user->data_nasc}}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-3">
          <label for="" class="label-gestante"> Email:</label>
        </div>
        <div class="form-group col-sm-3 input-gestante">
          {{$user->email}}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-3">
          <label for="" class="label-gestante"> Data prevista para o parto:</label>
        </div>
        <div class="form-group col-sm-3 input-gestante">
          {{$user->data_parto}}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-3">
          <label for="" class="label-gestante"> Telefone</label>
        </div>
        <div class="form-group col-sm-3 input-gestante">
          {{$user->telefone}}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-3">
          <label for="" class="label-gestante"> Celular</label>
        </div>
        <div class="form-group col-sm-3 input-gestante">
          {{$user->celular}}
        </div>
      </div>

  </div>

@endsection
